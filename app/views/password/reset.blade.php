@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="well">
               
                  <legend>
                     {{ Lang::get('password/reset.reset_title') }}
                  </legend>
                  @if(!isset($success))
                  
                  <div class="form-group">
                  	 {{ Lang::get('password/reset.reset_text') }}
                  </div>
                  
                  <div class="form-group{{ $errors->has('invalid_user') ? ' has-error' : '' }}">
                     {{ Form::open(array('url' => 'reset')) }}
                     {{ Form::hidden('token', $token) }}
                     {{ Form::label('email', Lang::get('password/reset.email')) }}
                     {{ Form::text('email', null,[
                                   'placeholder' => Lang::get('password/reset.email'),
                                   'class' => 'form-control'
                    ])}}
                    {{ $errors->first('invalid_user', '<p class="help-block">:message</p>') }}
                   </div>
                   
                   <div class="form-group{{ $errors->has('invalid_password') ? ' has-error' : '' }}">
                    {{ Form::label('password', Lang::get('password/reset.password_choose')) }}
                    {{ Form::password('password', [
                                      'placeholder' => Lang::get('password/reset.password'),
                                      'class' => 'form-control'])}}
                    {{ $errors->first('invalid_password', '<p class="help-block">:message</p>') }}                                      
                   </div>
                   
                   <div class="form-group{{ $errors->has('invalid_password') ? ' has-error' : '' }}">
                    {{ Form::label('password_confirmation', Lang::get('password/reset.password_retype')) }}
                    {{ Form::password('password_confirmation', [
                                      'placeholder' => Lang::get('password/reset.password'),
                                      'class' => 'form-control'])}}
                    {{ $errors->first('invalid_password', '<p class="help-block">:message</p>') }}
                                      
                  </div>
                  <!--
                     {{ Form::submit(ucfirst(Lang::get('password/reset.password_change')), array('class' => 'btn btn-success')) }}
                   -->
                   
                  <div class="form-group">
                     <section class="progress-button">
                       <button type="submit"
                               class="btn btn-success ladda-button"
                               data-style="expand-right">
                          <span class="ladda-label">{{ ucfirst(Lang::get('password/reset.password_change')) }}</span>                    	
                       </button>
                    </section>

                     {{ Form::close() }}
                  </div>
                     <div class="form-group{{ $errors->has('invalid_token') ? ' has-error' : '' }}">                	
                	       {{ $errors->first('invalid_token', '<p class="help-block">:message</p>') }}
                     </div>  
                  @else
                  <div class="form-group">
                     <p>{{ $success }}</p>
                     <p><a href="{{{ URL::to('login') }}}">{{{ Lang::get('common.to_login') }}}</a></p>   
                  </div>                    
                  @endif               	

            </div>
        </div>
    </div>
</div>

@stop
