<?php

/**
 * Created by PhpStorm.
 * User: ChanD
 * Date: 17.09.14
 * Time: 14:42
 */
class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        $this->deleteFormSession();
        if (is_null(Auth::User()->installateur)) {
            $faker = Faker\Factory::create('de_DE');
            $inst = $this->getInstallateurInstance();
            $inst->installNr = $faker->ean8;
            $errors = new \Illuminate\Support\MessageBag([
                'installateur' => ['<strong>' . ucfirst(Lang::get('common.attention')) . '!' . '</strong> ' . Lang::get('common.insta_missing')
                . '<button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#instModal">' . Lang::get('common.create') . '</button>']]);
            return View::make('user_area.index')->withInst($inst)->withErrors($errors)->withModal('forms.installateur')->withFormart('insta');
        }
        if (is_null(Auth::User()->installateur->fachkraft)) {
            if (!empty($errors)) {
                var_dump($errors);
            }
            $inst = $this->getInstallateurInstance();
            $errors = new \Illuminate\Support\MessageBag([
                'fachkraft' => ['<strong>' . ucfirst(Lang::get('common.failure')) . '!' . '</strong> ' . Lang::get('common.spec_emp_missing')
                . '<button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#instModal">' . Lang::get('common.create') . '</button>']]);
            return View::make('user_area.index')->withInst($inst)->withErrors($errors)->withModal('forms.fachkraft')->withFormart('insta');
        }
        return View::make('user_area.index');
    }

    protected function getInstallateurInstance()
    {
        $inst = Auth::User()->installateur;
        if (is_null($inst)) {
            $inst = new Installateur();
            $inst->fachkraft = new Fachkraft();
        } elseif (is_null(Auth::User()->installateur->fachkraft)) {
            $inst->fachkraft = new Fachkraft();
        }
        return $inst;
    }

    public function getOverview()
    {
        $this->deleteFormSession();
        return View::make('user_area.overview');
    }

    protected function deleteFormSession($deleteInput = false)
    {
        if (Session::has('sessionForm')) {
            Session::forget('sessionForm');
        }
        if (Session::has('formart')) {
            Session::forget('formart');
        }
        if (Session::has('input') && $deleteInput) {
            Session::forget('ínput');
        }
    }
}