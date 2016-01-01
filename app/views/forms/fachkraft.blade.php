<div class="modal fade" id="instModal" tabindex="-1" role="dialog" aria-labelledby="instModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {{ Form::open(array('url' => 'fachkraft')) }}
            {{ Form::text('formularArt', $formart,['class' => 'hidden']) }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="instModalModalLabel">{{{Lang::get('common.specemployee').' '.Lang::get('common.edit')}}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <div class="col-xs-6">
                            {{ Form::label('vorname', Lang::get('common.firstname_placeholder').':' ) }}
                            {{ Form::text('vorname', $inst->fachkraft->vorname,['placeholder' =>Lang::get('common.firstname_placeholder'),
                            'class' => 'form-control'
                            ])}}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::label('nachname', Lang::get('common.surname_placeholder').':' ) }}
                            {{ Form::text('nachname', $inst->fachkraft->nachname,['placeholder' =>Lang::get('common.surname_placeholder'),
                            'class' => 'form-control'
                            ])}}
                        </div>
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