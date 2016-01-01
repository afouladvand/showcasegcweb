@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="well">
               <div>
                  <legend>
        	         @if(Session::has('title'))
                     {{ Session::get('title') }}
                     @else
                     {{ $title }}
                     @endif
                  </legend>

                  @if(Session::has('message'))
                  {{ Session::get('message') }}
                  @else
                  {{ $message }}
                  @endif
        
                  <p>
                     <a href="{{{ URL::to('login') }}}">{{{ Lang::get('common.to_login') }}}</a>
                  </p> 
               </div>
            </div>
        </div>
    </div>
</div>

@stop
