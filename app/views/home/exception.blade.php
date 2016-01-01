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
               </div>
               <br />
               <p>
                  {{ link_to(URL::previous(), 'Zur&uuml;ck', ['class' => 'btn btn-danger']) }}	
               </p>               
            </div>
        </div>
    </div>
</div>

@stop
