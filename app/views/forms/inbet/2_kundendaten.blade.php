<h3>{{{Lang::get('forms/ansch.step2_title')}}}</h3>
<div>
    <div class="form-group" name="KundenAdressse" id="KundenAdressse">
        <h4>{{{Lang::get('forms/ansch.step2_section1_title')}}}</h4>
        <fieldset>


            <div class="row">
               {{ Form::toggleSwitch('KundenAdressePrivate', array(Lang::get('forms/ansch.private'),
                Lang::get('forms/ansch.commercial')),array('true', 'false'),
                array('class'=>'btn-group btn-toggle col-md-offset-4 col-md-4',
                'onchange'=>"javascript:
                switchCollapseOnRadioValue('KundenAdressePrivate','kundenAdrFirnmenname','kundenAdrPrivat')")) }}
            </div>
            <div class="row toppaddingbox collapse "
                 id="kundenAdrFirnmenname">
                {{ Form::label('KdnFirmenNam', Lang::get('common.company'),['class' =>'col-md-4
                control-label']) }}
                <div class="col-md-8 row">
                    <div class="col-md-8">
                        {{ Form::text('KdnFirmenNam', null,['placeholder' =>
                        Lang::get('common.company_placeholder'),'class' => 'form-control input-md ']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox collapse in " id="kundenAdrPrivat">

               {{ Form::label('KdnNam', Lang::get('common.fullname'),['class' =>'col-md-4 control-label']) }}
                <div class="col-md-8 row " id="KdnNam" name="KdnNam">
                    <div class="col-md-4">
                        {{ Form::text('KdnVorNam', null,['placeholder' =>
                        Lang::get('common.firstname_placeholder'),'class' => 'form-control
                        input-md postinput']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::text('KdnNachNam', null,['placeholder' =>
                        Lang::get('common.surname_placeholder'),'class' => 'form-control
                        input-md postinput']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox">
                {{ Form::label('KdnPlzOrt', Lang::get('common.plz_city'),['class' =>'col-md-4 control-label'])
                }}
                <div class="col-md-8 row" id="KdnPlzOrt" name="KdnPlzOrt">
                    <div class="col-md-4">
                        {{ Form::text('KdnPlz', null,['placeholder' =>
                        Lang::get('common.plz_placeholder'),'class' => 'form-control
                        input-md postinput']) }}
                    </div>
                    <div class="col-md-4 ">
                        {{ Form::text('KdnOrt', null,['placeholder' =>
                        Lang::get('common.city_placeholder'),'class' => 'form-control
                        input-md postinput']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox ">
                {{ Form::label('KdnStrNr', Lang::get('common.street'),['class' =>'col-md-4 control-label']) }}
                <div class="col-md-8 row " id="KdnStrNr" name="KdnStrNr">
                    <div class="col-md-4">
                        {{ Form::text('KdnStr', null,['placeholder' =>
                        Lang::get('common.street_placeholder'),'class' => 'form-control
                        input-md postinput']) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::text('KdnHausNr', null,['placeholder' =>
                        Lang::get('common.strnr_placeholder'),'class' => 'form-control
                        input-md postinput']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox ">
                {{ Form::label('KdnTel',Lang::get('common.tel'),['class' =>'col-md-4 control-label']) }}
                <div class="col-md-8 row ">
                    <div class="col-md-4">
                        <div class=" input-group">
                            {{ Form::text('KdnTel', null,['placeholder' =>
                            Lang::get('common.tel_placeholder'),'class' => 'form-control
                            input-md postinput']) }}
                            <div class="input-group-addon">
                                <span class="fa fa-phone "></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="row">

        <label for="newAddress" class="col-md-4 control-label postinput">{{{Lang::get('forms/ansch.step2_newAddress')}}}  {{HTML::popoverinfo(Lang::get('popoverinfo.addressident'), 'class="infopopover"' )}}</label>
        <div class="col-md-8">
            {{ Form::toggleSwitch('newAddress', array( ucfirst(Lang::get('common.no')),
            ucfirst(Lang::get('common.yes'))),array('false', 'true'),
            array( 'class'=>'btn-group btn-toggle',
            'onchange'=>"javascript: eigentuemerAdrPriv()" ),1) }}

        </div>
    </div>
</div>
<div id="eigentuemeradr" class="toppaddingbox collapse">
    <div class="form-group" name="EigentuemerAdressse" id="EigentuemerAdressse">
        <h4>{{{Lang::get('forms/ansch.step2_section2_title')}}}</h4>
        <fieldset>
            <div class="row">
                {{ Form::toggleSwitch('eigentuemerAdressePrivate', array( Lang::get('forms/ansch.private'),
                Lang::get('forms/ansch.commercial')),array('true',
                'false'),
                array('class'=>'btn-group btn-toggle col-md-offset-4 col-md-4',
                'onchange'=>"javascript:
                switchCollapseOnRadioValue('eigentuemerAdressePrivate','eigentuemerAdrFirnmenname','eigentuemerAdrPrivat')"))
                }}
            </div>
            <div class="row toppaddingbox collapse" id="eigentuemerAdrFirnmenname">
                {{ Form::label('EigtFirmenNam', Lang::get('common.company'),['class' =>'col-md-4
                control-label']) }}
                <div class="col-md-8 row">
                    <div class="col-md-8">
                        {{ Form::text('EigtFirmenNam', null,['placeholder' =>
                        Lang::get('common.company_placeholder'),'class' =>
                        'form-control Eigt input-md']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox collapse in " id="eigentuemerAdrPrivat">
                {{ Form::label('EigtNam', Lang::get('common.fullname'),['class' =>'col-md-4 control-label']) }}
                <div class="col-md-8 row " id="EigtNam" name="EigtNam">
                    <div class="col-md-4">
                        {{ Form::text('EigtVorNam', null,['placeholder' =>
                        Lang::get('common.firstname_placeholder'),'class' => 'form-control Eigt input-md'])
                        }}
                    </div>
                    <div class="col-md-4 ">
                        {{ Form::text('EigtNachNam', null,['placeholder' =>
                        Lang::get('common.surname_placeholder'),'class' => 'form-control Eigt input-md'])
                        }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox ">
                {{ Form::label('EigtPlzOrt', Lang::get('common.plz_city'),['class' =>'col-md-4
                control-label']) }}
                <div class="col-md-8 row " id="EigtPlzOrt" name="EigtPlzOrt">
                    <div class="col-md-4">
                        {{ Form::text('EigtPlz', null,['placeholder' =>
                        Lang::get('common.plz_placeholder'),'class' => 'form-control Eigt input-md']) }}
                    </div>
                    <div class="col-md-4 ">
                        {{ Form::text('EigtOrt', null,['placeholder' =>
                        Lang::get('common.city_placeholder'),'class' => 'form-control Eigt input-md']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox ">
                {{ Form::label('EigtStrNr', Lang::get('common.street'),['class' =>'col-md-4
                control-label']) }}
                <div class="col-md-8 row " id="EigtStrNr" name="EigtStrNr">
                    <div class="col-md-4 ">
                        {{ Form::text('EigtStr', null,['placeholder' =>
                        Lang::get('common.street_placeholder'),'class' => 'form-control Eigt input-md']) }}
                    </div>
                    <div class="col-md-4 ">
                        {{ Form::text('EigtHausNr', null,['placeholder' =>
                        Lang::get('common.strnr_placeholder'),'class' => 'form-control Eigt input-md']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox ">
                {{ Form::label('EigtTel', Lang::get('common.tel'),['class' =>'col-md-4 control-label']) }}
                <div class="col-md-8 row ">
                    <div class="col-md-4">
                        <div class=" input-group">
                            {{ Form::text('EigtTel', null,['placeholder' =>
                            Lang::get('common.tel_placeholder'),'class' =>
                            'form-control Eigt input-md']) }}
                            <div class="input-group-addon">
                                <span class="fa fa-phone "></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

