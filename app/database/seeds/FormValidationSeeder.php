<?php

/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 10.10.2014
 * Time: 10:34
 */
class FormValidationSeeder extends Seeder
{
    public function run()
    {




        Eloquent::unguard();
        $formular_insta = Formular::create(array('name' => 'insta'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'installNr'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'digits:8'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'firmenName'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'max:40'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'ort'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'max:40'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'strasse'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'max:40'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'strNr'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'regex:/^\d+\s*[a-zA-Z]*$/'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'max:10'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'plz'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'digits:5'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'telefon'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'alpha_dash'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'max:30'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'fax'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'alpha_dash'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'max:30'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'vorname'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'alpha_dash'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'max:40'));
        $insta = Inputrule::create(array('formular_id' => $formular_insta->id, 'name' => 'nachname'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'alpha_dash'));
        $rules = Rule::create(array('inputrule_id' => $insta->id, 'rule' => 'max:40'));
        //AnschlussFormular
        
        $formular_ansch = Formular::create(array('name' => 'ansch'));
        //Kundendaten
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'KdnFirmenNam'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'KdnVorNam'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'KdnNachNam'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'KdnPlz'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits:5'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'KdnOrt'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'KdnStr'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'KdnHausNr'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'regex:/^\d+\s*[a-zA-Z]*$/'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:10'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'KdnTel'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'alpha_dash'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:30'));
        //Kundendaten_eigentuemer
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'EigtFirmenNam'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'EigtVorNam'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'EigtNachNam'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'EigtPlz'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits:5'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'EigtOrt'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'EigtStr'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'EigtHausNr'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'regex:/^\d+\s*[a-zA-Z]*$/'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:10'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'EigtTel'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'alpha_dash'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:30'));
        // objektdaten
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'bedarfsart'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits:1'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'ObjAdrPlz'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits:5'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'ObjAdrOrt'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'ObjAdrStr'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:40'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'ObjAdrNr'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'regex:/^\d+\s*[a-zA-Z]*$/'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:10'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'ObjAdrWe'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:30'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'ObjAdrFlur'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'max:30'));
        //sparten
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'stromAnzahlZaehler'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits_between:0,4'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'stromArtZaehler'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'stromGesamtleistung'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits_between:0,11'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'wassernzahlZaehler'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits_between:0,4'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'wasserGesamtleistung'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits_between:0,11'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'gasAnzahlZaehler'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits_between:0,4'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'gasGesamtleistung'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'digits_between:0,11'));
        $ansch = Inputrule::create(array('formular_id' => $formular_ansch->id, 'name' => 'sparreq'));
        $rules = Rule::create(array('inputrule_id' => $ansch->id, 'rule' => 'required'));
        //anlagen
        $formular_inbet = Formular::create(array('name' => 'inbet'));
        //Kundendaten
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'KdnFirmenNam'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'KdnVorNam'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'KdnNachNam'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'KdnPlz'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits:5'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'KdnOrt'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'KdnStr'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));

        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'KdnHausNr'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'regex:/^\d+\s*[a-zA-Z]*$/'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:10'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'KdnTel'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'alpha_dash'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:30'));
        //Kundendaten_eigentuemer
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'EigtFirmenNam'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'EigtVorNam'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'EigtNachNam'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'EigtPlz'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits:5'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'EigtOrt'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'EigtStr'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'EigtHausNr'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'regex:/^\d+\s*[a-zA-Z]*$/'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:10'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'EigtTel'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'alpha_dash'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:30'));
        // objektdaten
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'bedarfsart'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits:1'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'ObjAdrPlz'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits:5'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'ObjAdrOrt'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'ObjAdrStr'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:40'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'ObjAdrNr'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'regex:/^\d+\s*[a-zA-Z]*$/'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:10'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'ObjAdrWe'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:30'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'ObjAdrFlur'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'max:30'));
        //sparten
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'stromAnzahlZaehler'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits_between:0,4'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'stromArtZaehler'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'stromGesamtleistung'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits_between:0,11'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'wassernzahlZaehler'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits_between:0,4'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'wasserGesamtleistung'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits_between:0,11'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'gasAnzahlZaehler'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'digits_between:0,4'));
        $inbet = Inputrule::create(array('formular_id' => $formular_inbet->id, 'name' => 'sparreq'));
        $rules = Rule::create(array('inputrule_id' => $inbet->id, 'rule' => 'required'));
        //anlagen
    }
}