@extends('layouts.master')
@section('head')
{{ HTML::style('css/custom.css') }}
{{ HTML::script('js/custom_formblatt.js') }}
@section('content')
<form class="form text-left">
    {{ Form::text('formularArt', $formart,['class' => 'hidden','disabled']) }}
    <div id="step-2">
        <h3>Kundendaten</h3>
        <h4>Kundenadresse</h4>
        <button type="button" class="btn btn-default" onclick="submitTestForm('step-2')">test</button>
        <div class="form-group" name="KundenAdressse" id="KundenAdressse">
            <fieldset>
                <div class="row">
                    <div class="col-md-3 {{ $errors->has('stromAktiv') ? ' has-error' : '' }}"
                         >
                        {{ Form::label('stromAktiv', 'Vorhaben:',['class' =>'control-label']) }}
                        {{ Form::select('stromAktiv', [
                        'select' => 'Auswahl treffen',
                        'ansch' => 'Anschluß',
                        'aende' => 'Änderung',
                        'trenn' => 'Trennung'
                        ], 'select' ,['class' => 'form-control input-md']) }}
                        {{ $errors->first('stromAktiv', '<p class="help-block">:message</p>') }}
                    </div>
                </div>
                <div class="row">
                    <div id="toggleSwitchButtonGroup" class="btn-group btn-toggle col-md-offset-4 col-md-4"
                         onchange="javascript: collapseOnRadioValue('KundenAdressePrivate','kundenAdrFirnmenname')"
                         ondata-taget-name="KundenAdressePrivate" data-toggle="buttons">
                        <label class="btn btn-default active">
                            <input name="KundenAdressePrivate" id="KundenAdressePrivate-0" value="true" type="radio"
                                   checked="">Person</label>
                        <label class="btn btn-default ">
                            <input name="KundenAdressePrivate" id="KundenAdressePrivate-1" value="false"
                                   type="radio">Firma</label>
                    </div>
                </div>
                <div class="row toppaddingbox collapse " id="kundenAdrFirnmenname">
                    <label for="KdnFirmenNam" class="col-md-4 control-label">Firmenname:</label>

                    <div class="col-md-8 row">
                        <div class="col-md-8">
                            <input placeholder="Firmenname" class="form-control
                            input-md" name="KdnFirmenNam" type="text" id="KdnFirmenNam">
                        </div>
                    </div>
                </div>
                <div class="row toppaddingbox ">
                    <label for="KdnNam" class="col-md-4 control-label">Name:</label>

                    <div class="col-md-8 row " id="KdnNam" name="KdnNam">
                        <div class="col-md-4 ">
                            <input placeholder="Vorname" class="form-control
                            input-md" name="KdnVorNam" type="text">
                        </div>
                        <div class="col-md-4 ">
                            <input placeholder="Nachname" class="form-control
                            input-md" name="KdnNachNam" type="text">
                        </div>
                    </div>
                </div>
                <div class="row toppaddingbox ">
                    <label for="KdnStrNr" class="col-md-4 control-label">Straße:</label>

                    <div class="col-md-8 row " id="KdnStrNr" name="KdnStrNr">
                        <div class="col-md-4 ">
                            <input placeholder="Straße" class="form-control
                            input-md" name="KdnStr" type="text">
                        </div>
                        <div class="col-md-4 ">
                            <input placeholder="Hausnummer" class="form-control
                            input-md" name="KdnHausNr" type="text">
                        </div>
                    </div>
                </div>
                <div class="row toppaddingbox ">
                    <label for="KdnPlzOrt" class="col-md-4 control-label">Plz Ort:</label>

                    <div class="col-md-8 row " id="KdnPlzOrt" name="KdnPlzOrt">
                        <div class="col-md-4 ">
                            <input placeholder="Postleitzahl" class="form-control
                            input-md" name="KdnPlz" type="text">
                        </div>
                        <div class="col-md-4 ">
                            <input placeholder="Ort" class="form-control
                            input-md" name="KdnOrt" type="text">
                        </div>
                    </div>
                </div>
                <div class="row toppaddingbox ">
                    <label for="KdnTel" class="col-md-4 control-label">Telefon:</label>

                    <div class="col-md-8 row ">
                        <div class="col-md-4">
                            <div class=" input-group ">
                                <input placeholder="Telefonnummer" class="form-control
                                input-md" name="KdnTel" type="text" id="KdnTel">

                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-earphone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div id="step-3">
        <h3>Objektdaten</h3>

        <div class="form-group">
            <fieldset>
                <div class="row toppaddingbox">
                    <label for="bedarfsart" class="col-md-4 control-label">Bedarfsart:</label>

                    <div id="toggleSwitchButtonGroup" class="btn-group btn-toggle col-md-4"
                         ondata-taget-name="bedarfsart" data-toggle="buttons">
                        <label class="btn btn-default active">
                            <input name="bedarfsart" id="bedarfsart-0" value="1" type="radio"
                                   checked="">Haushalt</label>
                        <label class="btn btn-default ">
                            <input name="bedarfsart" id="bedarfsart-1" value="2" type="radio">Gewerbe</label>
                    </div>
                </div>
                <h4>Verbraucherstellen Andresse</h4>

                <div class="row toppaddingbox ">
                    <label for="ObjAdrPlzOrt" class="col-md-4 control-label">Postleitzahl und Ort:</label>

                    <div class="col-md-8 row " id="ObjAdrPlzOrt" name="ObjAdrPlzOrt">
                        <div class="col-md-4 ">
                            <input placeholder="Postleitzahl" class="form-control
                        input-md" name="ObjAdrPlz" type="text">
                        </div>
                        <div class="col-md-4 ">
                            <input placeholder="Ort" class="form-control
                        input-md" name="ObjAdrOrt" type="text">
                        </div>
                    </div>
                </div>
                <div class="row toppaddingbox ">
                    <label for="ObjAdrStrNr" class="col-md-4 control-label">Straße und Hausnummer:</label>

                    <div class="col-md-8 row " id="ObjAdrStrNr" name="ObjAdrStrNr">
                        <div class="col-md-4 ">
                            <input placeholder="Straße" class="form-control
                        input-md" name="ObjAdrStr" type="text">
                        </div>
                        <div class="col-md-4 ">
                            <input placeholder="Hausnr." class="form-control
                        input-md" name="ObjAdrNr" type="text">
                        </div>
                    </div>
                </div>
                <div class="row toppaddingbox ">
                    <label for="ObjAdrFlurWe" class="col-md-4 control-label">Flurstück und Wohneinheiten:</label>

                    <div class="col-md-8 row " id="ObjAdrFlurWe" name="ObjAdrFlurWe">
                        <div class="col-md-4 ">
                            <input placeholder="Flurstück" class="form-control
                        input-md" name="ObjAdrFlur" type="text">
                        </div>
                        <div class="col-md-4 ">
                            <input placeholder="Wohneinheiten" class="form-control
                        input-md" name="ObjAdrWe" type="text">
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</form>
@stop