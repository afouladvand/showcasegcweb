@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="well">
               <div>
                  <legend>
                  	@if(isset($toMail['login']))
                  	{{Lang::get('home/verify.headlinelogin')}}
                  	@else
                  	{{Lang::get('home/verify.headline')}}
                  	@endif
                  </legend>
                  <p>
                     @if(isset($toMail['login']))
                     {{Lang::get('home/verify.contentlogin', 
                           array('email'   => $toMail['email'],
                                 'stunden' => '48'))
                     }}
                     @else
                     {{Lang::get('home/verify.content', 
                                array('email'   => $toMail['email'],
                                      'stunden' => '48'))                      	
                     }}
                     @endif                  	
                     
                  </p>
                  <p>
	                 {{ Form::open(['action' => 'HomeRegisterController@resendVerify']) }}
		             {{ Form::hidden('email', $toMail['email']) }}
		             {{ Form::hidden('username', $toMail['username']) }}
		             {{ Form::hidden('confirmation_code', $toMail['confirmation_code']) }}
                    <div class="form-group">
                       <section class="progress-button">
                          <button type="submit"
                                  class="btn btn-success ladda-button"
                                  data-style="expand-right">
                          <span class="ladda-label">{{ ucfirst(Lang::get('password/reset.sendmail')) }}</span>                    	
                          </button>
                       </section>

                    </div>  
	                 {{ Form::close() }}                  	
                  </p>                  
                  <!--
                  <p>
                     <a href="{{{ URL::to('login') }}}">Zur Anmeldung</a>
                  </p>
                  --> 
               </div>
            </div>
        </div>
    </div>
</div>

@stop
