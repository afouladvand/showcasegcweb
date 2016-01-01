<nav role="navigation" class="navbar navbar-default col-xs-12">
    <h3>{{{ Lang::get('common.titleheadertext')}}}</h3>

    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">

        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle btn btn-default navbar-btn">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
            <a class="navbar-brand visible-xs" data-toggle="collapse" data-parent="#navbarCollapse" href="#navbarCollapse">Men&uuml;</a>

    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">

            @if(Auth::user())
            <li>{{ HTML::link('/', Lang::get('common.user_internal_home')) }}</li>
                @if(is_null(Auth::User()->installateur))
                @elseif(is_null(Auth::User()->installateur->fachkraft))
                @else
                    <li>{{ HTML::link('overview', Lang::get('common.user_overview')) }}</li>
                    <li>{{ HTML::link('hausanschluss', Lang::get('common.user_connect')) }}</li>
                    <li>{{ HTML::link('inbetriebnahme', Lang::get('common.user_installation')) }}</li>
                @endif
        </ul>
        <ul class="nav navbar-nav navbar-right" style="padding-right:20px;">

            <li>{{ HTML::link('logout', ucfirst(Lang::get('common.logout'))) }}</li>

            @else
            <li>{{ HTML::link('/', Lang::get('common.user_home')) }}</li>
            <li>{{ HTML::link('login', ucfirst(Lang::get('common.login'))) }}</li>
            @endif
        </ul>
    </div>
</nav>