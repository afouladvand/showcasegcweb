
    <div class="row">
        <div class="progress">
            <div class=" progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            </div>
            <span class="progress-type">{{{ucfirst(Lang::get('forms/formnavigation.progress'))}}}</span>
            <span class="progress-completed">0%</span>
        </div>
    </div>
    <div class="btn-block btn-toggle" id="formSelectButtons" data-toggle="buttons">
            <button id="btnStep-1" type="button" class="btn-lg col-xs-12 col-sm-4 col-md-2 btn btn-default active"
                    onclick="javascript: progressUpdate( 0, 'step-1');">
                <span class="hidden-xs fa fa-wrench"></span>

                <p>{{{Lang::get('forms/formnavigation.btntext1')}}}</p>
            </button>

            <button id="btnStep-2" type="button" class="btn-lg col-xs-12 col-sm-4 col-md-2 btn btn-default"
                    onclick="javascript: progressUpdate( 20, 'step-2');">
                <span class="hidden-xs fa  fa-user  "></span>
                <p>{{{Lang::get('forms/formnavigation.btntext2')}}}</p>
            </button>

            <button id="btnStep-3" type="button" class="btn-lg col-xs-12 col-sm-4 col-md-2 btn btn-default" disabled="disabled"
                    onclick="javascript: progressUpdate( 40, 'step-3');">
                <span class="hidden-xs fa fa-home "></span>
                <p>{{{Lang::get('forms/formnavigation.btntext3')}}}</p>
            </button>

            <button id="btnStep-4" type="button" class="btn-lg col-xs-12 col-sm-4 col-md-2 btn btn-default" disabled="disabled"
                    onclick="javascript: progressUpdate( 60, 'step-4');">
                <span class="hidden-xs fa fa-list-alt"></span>
                <p>{{{Lang::get('forms/formnavigation.btntext4')}}}</p>
            </button>

            <button id="btnStep-5" type="button" class="btn-lg col-xs-12 col-sm-4 col-md-2 btn btn-default" disabled="disabled"
                    onclick="javascript: progressUpdate( 80, 'step-5');">
                <span class="hidden-xs fa fa-upload "></span>

                <p>{{{Lang::get('forms/formnavigation.btntext5')}}}</p>
            </button>

            <button id="btnStep-6" type="button" class="btn-lg col-xs-12 col-sm-4 col-md-2 btn btn-default" disabled="disabled"
                    onclick="javascript: progressUpdate( 100, 'step-6');">
                <span class="hidden-xs fa fa-eye"></span>
                <p>{{{Lang::get('forms/formnavigation.btntext6')}}}</p>
            </button>

    </div>


