<h3>{{{Lang::get('forms/ansch.step4_title')}}}</h3>

    <div class="form-group row">
        <ul class="nav nav-tabs checkColor nav-justified" onclick="javascript: tabClick()" role="tablist">
            <li class="active"><a href="#strom" role="tab" data-toggle="tab">{{{Lang::get('forms/ansch.step4_spar1')}}}<span class="fa fa-times"></span></a>
            </li>
            <li><a href="#wasser" role="tab" data-toggle="tab">{{{Lang::get('forms/ansch.step4_spar2')}}}<span class="fa  fa-times "></span></a></li>
            <li><a href="#gas" role="tab" data-toggle="tab">{{{Lang::get('forms/ansch.step4_spar3')}}}<span class="fa fa-times  "></span></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade active in" id="strom">
                <h4 class="hidden">{{{Lang::get('forms/ansch.step4_spar1')}}}</h4>
                <br>
                <div class="row">
                    <div class="col-md-3 {{ $errors->has('stromAktiv') ? ' has-error' : '' }}"
                         onchange="javascript: toggleActivity(event)">
                        {{ Form::label('stromAktiv', Lang::get('forms/ansch.step4_activity'),['class' =>'control-label']) }}
                        {{ Form::select('stromAktiv', [
                        'select' => Lang::get('forms/ansch.step4_act_opt_default'),
                        'ansch' => Lang::get('forms/ansch.step4_act_opt_connect'),
                        'aende' => Lang::get('forms/ansch.step4_act_opt_edit'),
                        'trenn' => Lang::get('forms/ansch.step4_act_opt_disco')
                        ], 'select' ,['class' => 'form-control input-md']) }}
                        {{ $errors->first('stromAktiv', '<p class="help-block">:message</p>') }}
                    </div>
                    <div class="col-md-3 {{ $errors->has('stromAnzahlZaehler') ? ' has-error' : '' }}">
                    {{ Form::label('stromAnzahlZaehler', Lang::get('forms/ansch.step4_spar1_count'),['class' =>'control-label' ]) }}
                        {{ Form::text('stromAnzahlZaehler', null,['class' => 'form-control', 'placeholder' => Lang::get('forms/ansch.step4_spar1_count_placeholder')]) }}
                        {{ $errors->first('stromAnzahlZaehler', '<p class="help-block">:message</p>') }}
                    </div>
                    <div class="col-md-3 {{ $errors->has('stromArtZaehler') ? ' has-error' : '' }}">
                    {{ Form::label('stromArtZaehler', Lang::get('forms/ansch.step4_spar1_type'),['class' =>'control-label']) }}
                        {{ Form::select('stromArtZaehler', [
                        'select' => Lang::get('forms/ansch.step4_act_opt_default'),
                        'WS' => Lang::get('forms/ansch.step4_spar1_typ1'),
                        'DS' => Lang::get('forms/ansch.step4_spar1_typ2'),
                        'MZ' => Lang::get('forms/ansch.step4_spar1_typ3'),
                        'LZ' => Lang::get('forms/ansch.step4_spar1_typ4'),
                        'MW' => Lang::get('forms/ansch.step4_spar1_typ5'),
                        'TSG' => Lang::get('forms/ansch.step4_spar1_typ6')
                        ], 'select' ,['class' => 'form-control input-md']) }}
                        {{ $errors->first('stromArtZaehler', '<p class="help-block">:message</p>') }}
                    </div>
                    <div class="col-md-3 {{ $errors->has('stromGesamtleistung') ? ' has-error' : '' }}">
                    {{ Form::label('stromGesamtleistung', Lang::get('forms/ansch.step4_spar1_gesamt'),['class' =>'control-label']) }}
                        {{ Form::text('stromGesamtleistung', null,['placeholder'=>Lang::get('forms/ansch.step4_spar1_gesamt_placeholder'),'class' => 'form-control
                        input-md']) }}
                        {{ $errors->first('stromGesamtleistung', '<p class="help-block">:message</p>') }}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="wasser">
                <h4 class="hidden">{{{Lang::get('forms/ansch.step4_spar2')}}}</h4>
                <br>

                <div class="row">
                    <div class="col-md-4 {{ $errors->has('wasserAktiv') ? ' has-error' : '' }}"
                         onchange="javascript: toggleActivity(event)">
                        {{ Form::label('wasserAktiv', Lang::get('forms/ansch.step4_activity'),['class' =>'control-label']) }}
                        {{ Form::select('wasserAktiv', [
                        'select' => Lang::get('forms/ansch.step4_act_opt_default'),
                        'ansch' => Lang::get('forms/ansch.step4_act_opt_connect'),
                        'aende' => Lang::get('forms/ansch.step4_act_opt_edit'),
                        'trenn' => Lang::get('forms/ansch.step4_act_opt_disco')
                        ], 'select' ,['class' => 'form-control input-md']) }}
                        {{ $errors->first('wasserAktiv', '<p class="help-block">:message</p>') }}
                    </div>
                    <div class="col-md-4 {{ $errors->has('wasserAnzahlZaehler') ? ' has-error' : '' }}">
                        {{ Form::label('wasserAnzahlZaehler', Lang::get('forms/ansch.step4_spar2_count'),['class' =>'control-label']) }}
                        {{ Form::text('wasserAnzahlZaehler', null,['class' => 'form-control', 'placeholder' => Lang::get('forms/ansch.step4_spar2_count_placeholder')]) }}
                        {{ $errors->first('wasserAnzahlZaehler', '<p class="help-block">:message</p>') }}
                    </div>
                    <div class="col-md-4 {{ $errors->has('wasserGesamtleistung') ? ' has-error' : '' }}">
                        {{ Form::label('wasserGesamtleistung',  Lang::get('forms/ansch.step4_spar2_gesamt'),['class' =>'control-label']) }}
                        {{ Form::text('wasserGesamtleistung', null,['placeholder'=> Lang::get('forms/ansch.step4_spar2_gesamt_placeholder'),'class' => 'form-control
                        input-md']) }}
                        {{ $errors->first('wasserGesamtleistung', '<p class="help-block">:message</p>') }}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="gas">
                <h4 class="hidden">{{{Lang::get('forms/ansch.step4_spar3')}}}</h4>
                <br>

                <div class="row">
                    <div class="col-md-4 {{ $errors->has('gasAktiv') ? ' has-error' : '' }}"
                         onchange="javascript: toggleActivity(event)">
                        {{ Form::label('gasAktiv', Lang::get('forms/ansch.step4_activity'),['class' =>'control-label']) }}
                        {{ Form::select('gasAktiv', [
                        'select' => Lang::get('forms/ansch.step4_act_opt_default'),
                        'ansch' => Lang::get('forms/ansch.step4_act_opt_connect'),
                        'aende' => Lang::get('forms/ansch.step4_act_opt_edit'),
                        'trenn' => Lang::get('forms/ansch.step4_act_opt_disco')
                        ], 'select' ,['class' => 'form-control input-md']) }}
                        {{ $errors->first('gasAktiv', '<p class="help-block">:message</p>') }}
                    </div>
                    <div class="col-md-4 {{ $errors->has('gasAnzahlZaehler') ? ' has-error' : '' }}">
                        {{ Form::label('gasAnzahlZaehler', Lang::get('forms/ansch.step4_spar3_count'),['class' =>'control-label']) }}
                        {{ Form::text('gasAnzahlZaehler', null,['class' => 'form-control', 'placeholder' => Lang::get('forms/ansch.step4_spar3_count_placeholder')]) }}
                        {{ $errors->first('gasAnzahlZaehler', '<p class="help-block">:message</p>') }}
                    </div>
                    <div class="col-md-4 {{ $errors->has('gasGesamtleistung') ? ' has-error' : '' }}">
                        {{ Form::label('gasGesamtleistung',  Lang::get('forms/ansch.step4_spar3_gesamt'),['class' =>'control-label']) }}
                        {{ Form::text('gasGesamtleistung', null,['placeholder'=> Lang::get('forms/ansch.step4_spar3_gesamt_placeholder'),'class' => 'form-control
                        input-md']) }}
                        {{ $errors->first('gasGesamtleistung', '<p class="help-block">:message</p>') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
