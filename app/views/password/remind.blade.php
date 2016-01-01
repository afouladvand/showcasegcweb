@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="well">
               
                  <legend>
                     {{ Lang::get('password/reset.remind_title') }}
                  </legend>
                  
                  <div class="form-group">
                  	 {{ Lang::get('password/reset.remind_text') }}
                  </div>
                  
                  @if(!isset($status))
                  <div class="form-group">
                     {{ Form::open(array('url' => 'reminder')) }}
                     {{ Form::label('email', Lang::get('password/reset.email')) }}
                     {{ Form::text('email', null,[
                                   'placeholder' => Lang::get('password/reset.email'),
                                   'class'       => 'form-control'
                    ])}}
                  </div>
 
                  	<!--
                  	  Ursprünglicher non-Ladda Button:
                     {{ Form::submit(ucfirst(Lang::get('password/reset.sendmail')), array('class' => 'btn btn-success')) }}
                    -->
                    <div class="form-group">
                       <section class="progress-button">
                          <button type="submit"
                                  class="btn btn-success ladda-button"
                                  data-style="expand-right">
                          <span class="ladda-label">{{ ucfirst(Lang::get('password/reset.sendmail')) }}</span>                    	
                          </button>
                       </section>
                       {{ Form::close() }}
                    </div>          
                  
                  @else
                  <div class="form-group">
                     <p>{{$status}}</p>
   
                  </div>
                  @endif
            </div>
        </div>
    </div>
</div>

@stop
