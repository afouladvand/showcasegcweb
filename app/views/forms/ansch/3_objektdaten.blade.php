
    <h3> {{{Lang::get('forms/ansch.step3_title')}}}</h3>

    <div class="form-group">
        <fieldset>
            <div class="row toppaddingbox">
                {{ Form::label('bedarfsart',  Lang::get('forms/ansch.step3_custType'),['class' =>'col-md-4 control-label']) }}
                {{ Form::toggleSwitch('bedarfsart', array(  Lang::get('forms/ansch.step3_home'),  Lang::get('forms/ansch.step3_commerce')),array('1', '2'),
                array('class'=>'btn-group btn-toggle col-md-4 postinput')) }}
            </div>
            <h4>{{{ Lang::get('forms/ansch.step3_section1_title')}}}</h4>
            <br>

            <div class="row">
                {{ Form::label('ObjAdrPlzOrt', Lang::get('common.plz_city'),['class' =>'col-md-4 control-label']) }}
                <div class="col-md-8 row  " id="ObjAdrPlzOrt" name="ObjAdrPlzOrt">
                    <div class="col-md-4 ">
                    {{ Form::text('ObjAdrPlz', null,['placeholder' =>  Lang::get('common.plz_placeholder'),'class' => 'form-control postinput input-md']) }}
                    </div>
                    <div class="col-md-4 {">
                    {{ Form::text('ObjAdrOrt', null,['placeholder' =>  Lang::get('common.city_placeholder'),'class' => 'form-control postinput input-md']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox ">
                {{ Form::label('ObjAdrStrNr',  Lang::get('common.street'),['class' =>'col-md-4 control-label']) }}
                <div class="col-md-8 row " id="ObjAdrStrNr" name="ObjAdrStrNr">
                    <div class="col-md-4 ">
                    {{ Form::text('ObjAdrStr', null,['placeholder' =>  Lang::get('common.street_placeholder'),'class' => 'form-control postinput
                        input-md']) }}
                    </div>
                    <div class="col-md-4 ">
                    {{ Form::text('ObjAdrNr', null,['placeholder' =>  Lang::get('common.strnr_placeholder'),'class' => 'form-control postinput
                        input-md']) }}
                    </div>
                </div>
            </div>
            <div class="row toppaddingbox">
                {{ Form::label('ObjAdrFlurWe',  Lang::get('forms/ansch.step3_flur_we'),['class' =>'col-md-4 control-label']) }}
                <div class="col-md-8 row " id="ObjAdrFlurWe" name="ObjAdrFlurWe">
                    <div class="col-md-4 ">
                    {{ Form::text('ObjAdrFlur', null,['placeholder' =>  Lang::get('forms/ansch.step3_flurStk'),'class' => 'form-control postinput
                        input-md']) }}
                    </div>
                    <div class="col-md-4 ">
                    {{ Form::text('ObjAdrWe', null,['placeholder' =>  Lang::get('forms/ansch.step3_we'),'class' => 'form-control postinput
                        input-md']) }}
                    </div>
                </div>
            </div>
        </fieldset>
    </div>

