<div class="modal fade" id="instModal" tabindex="-1" role="dialog" aria-labelledby="instModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {{ Form::open(array('url' => 'installateur')) }}
            {{ Form::text('formularArt', $formart,['class' => 'hidden','disabled']) }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="instModalModalLabel">{{{Lang::get('common.install').' '.Lang::get('common.edit')}}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        {{ Form::label('installNr', Lang::get('common.instanr')) }}
                        {{ Form::text
                        ('installNr', $inst->installNr ,
                        [
                        'placeholder' =>'',
                        'class' => 'form-control', 'disabled'
                        ]
                        )
                        }}
                    </div>
                    <div class="form-group col-md-8">
                        {{ Form::label('firmenName', Lang::get('common.company')) }}
                        {{ Form::text('firmenName', $inst->firmenName,[
                        'placeholder' =>Lang::get('common.company_placeholder'),
                        'class' => 'form-control',
                        ])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        {{ Form::label('strasse', Lang::get('common.street')) }}
                        {{ Form::text('strasse', $inst->strasse,[
                        'placeholder' =>Lang::get('common.street_placeholder'),
                        'class' => 'form-control'
                        ])}}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('strNr', Lang::get('common.strnr')) }}
                        {{ Form::text('strNr', $inst->strNr,['placeholder' =>Lang::get('common.strnr_placeholder'),
                        'class' => 'form-control'
                        ])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        {{ Form::label('plz', Lang::get('common.plz')) }}
                        {{ Form::text('plz', $inst->plz,['placeholder' =>Lang::get('common.plz_placeholder'),
                        'class' => 'form-control'
                        ])}}
                    </div>
                    <div class="form-group col-md-8">
                        {{ Form::label('ort', Lang::get('common.city')) }}
                        {{ Form::text('ort', $inst->ort,['placeholder' =>Lang::get('common.city_placeholder'),
                        'class' => 'form-control'
                        ])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('telefon', Lang::get('common.tel')) }}
                        {{ Form::text('telefon', $inst->telefon,['placeholder' =>Lang::get('common.tel_placeholder'),
                        'class' => 'form-control'
                        ])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('fax', Lang::get('common.fax')) }}
                        {{ Form::text('fax', $inst->fax,['placeholder' =>Lang::get('common.fax_placeholder'),
                        'class' => 'form-control'
                        ])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        {{ Form::label('', Lang::get('common.specemployee').':') }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::text('vorname', $inst->fachkraft->vorname,['placeholder' =>Lang::get('common.firstname_placeholder'),
                        'class' => 'form-control'
                        ])}}
                    </div>
                    <div class="col-md-6">
                        {{ Form::text('nachname', $inst->fachkraft->nachname,['placeholder' =>Lang::get('common.surname_placeholder'),
                        'class' => 'form-control'
                        ])}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    {{ Form::submit(ucfirst(Lang::get('common.save')), array('class' => 'btn btn-success')) }}
                    {{ Form::button(ucfirst(Lang::get('common.close')), array('class' => 'btn btn-default', 'data-dismiss'=>'modal')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>