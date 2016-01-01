<?php

/**
 * Created by PhpStorm.
 * User: ChanD
 * Date: 06.10.14
 * Time: 10:27
 * Controller für den Bereich Formulare.
 */
class UserFormController extends UserController
{
    public function getFormInbetrieb()
    {
        $inst = Auth::User()->installateur;
        $formsPath = array(
            'forms.inbet.1_installateur',
            'forms.inbet.2_kundendaten',
            'forms.inbet.3_objektdaten',
            'forms.inbet.4_sparten',
            'forms.inbet.5_anlagen',
            'forms.inbet.6_overview'
        );
        $this->deleteFormSession();
        return View::make('user_area.formblatt')->withForm($formsPath)
            ->withInst($inst)
            ->withFormart('inbet');
    }

    public function getFormHausAn()
    {
        if (Session::get('formart') == 'ansch') {
        };
        $inst = Auth::User()->installateur;
        $formsPath = array(
            'forms.ansch.1_installateur',
            'forms.ansch.2_kundendaten',
            'forms.ansch.3_objektdaten',
            'forms.ansch.4_sparten',
            'forms.ansch.5_anlagen',
            'forms.ansch.6_overview'
        );
        $this->deleteFormSession();
        return View::make('user_area.formblatt')->withForm($formsPath)
            ->withInst($inst)
            ->withFormart('ansch');
    }

     public function getFormKunde()
    {
        if (Session::get('formart') == 'kunde') {
        };
        $inst = Auth::User()->installateur;
        $formsPath = array(
            'forms.ansch.1_installateur',
            'forms.ansch.2_kundendaten',
            'forms.ansch.3_objektdaten',
            'forms.ansch.4_sparten',
            'forms.ansch.5_anlagen',
            'forms.ansch.6_overview'
        );
        $this->deleteFormSession();
        return View::make('user_area.formblatt')->withForm($formsPath)
            ->withInst($inst)
            ->withFormart('kunde');
    }

    public function postPartOfForm()
    {
        $inputs = Input::all();
        $rulesset = array();
        if (!array_key_exists('formularArt', $inputs) || !array_key_exists('step', $inputs)) {
            $errors = new \Illuminate\Support\MessageBag([
                'missingFields' => 'missing fields "formArt" and/or "step"']);
            Session::forget('formart');
            return Response::json([
                'success' => false, // test richtiger wert false
                'errors' => $errors]);
        }
        $stepData = $inputs;
        unset($stepData['formularArt']);
        unset($stepData['step']);
        unset($stepData['undefined']);
        $step = str_replace('-', '', $inputs['step']);
        Session::put('formart', $inputs['formularArt']);
        try {
            $formular = Formular::find(
                DB::table('formulare')->where('name', $inputs['formularArt'])->first()->id
            )->firstOrfail();
        } catch (Exception $e) {
            return Response::json([
                'success' => false, // test richtiger wert false
                'errors' => array($e->getMessage())]);
        }
        foreach (Formular::find(DB::table('formulare')->where('name', $inputs['formularArt'])->first()->id)->inputrules as $inputrule) {
            if (array_key_exists($inputrule->name, $inputs)) {
                $rules = [];
                foreach ($inputrule->rules as $rule) {
                    $rules[] = $rule->rule;
                }
                $rulesset[$inputrule->name] = $rules;
            }
        }
        $v = Validator::make($inputs, $rulesset);
        if ($v->fails()) {
            return Response::json([
                'success' => false, // test richtiger wert false
                'errors' => $v->errors()->toArray()]);
        }
        $thisSession = Session::pull('sessionForm');
        $thisSession[$step] = $stepData;
        Session::put('sessionForm', $thisSession);
        return Response::json(['success' => true]);
    }

    public function postForm() //änder für das finalen validieren und speicherns des Formulars
    {
        $inst = Auth::User()->installateur;
        $input = Input::all();
        $this->deleteFormSession();
        return View::make('user_area.index');
    }

    public function postFachkraft()
    {
        $instId = Auth::User()->installateur->id;
        $input = Input::all();
        $fachkraft = Fachkraft::firstOrNew(["installateur_id" => $instId]);
        $fachkraft->fill($input);
        $fachkraft->save();
        $inst = $this->getInstallateurInstance();
        return Redirect::back()->withInst($inst);
    }

    public function postInstallateur()
    {
        $input = Input::all();
        $inst = Installateur::firstOrNew(["user_id" => Auth::user()->id]);
        $inst->fill($input);
        $inst->save();
        $fachkraft = Fachkraft::firstOrNew(["installateur_id" => $inst->id]);
        $fachkraft->fill($input);
        $fachkraft->save();
        $inst = $this->getInstallateurInstance();
        return Redirect::back()->withInst($inst);
    }
}
