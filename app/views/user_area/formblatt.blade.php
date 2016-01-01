@extends('layouts.master')
@section('head')
{{ HTML::style('css/custom.css') }}
{{ HTML::script('js/custom_formblatt.js') }}
@section('content')
<div class="container">
    @include('includes.formNavProgress')
</div>

<div class="container" id="formblatt">
    <div id="sessionMessage" class="custmessagebox alert alert-warning col-xs-12 collapse" role="alert">
        <p><strong>{{{ucfirst(Lang::get('common.warning'))}}}</strong></p>

        <p>
            {{{Lang::get('common.sessionLost')}}}
        </p>

        <p>
            {{ Form::button(ucfirst(Lang::get('common.cancel')), array('onclick' => "javascript:
            $('#sessionMessage').toggleClass('in',false);", 'id' => 'seMeCancel','class' => 'btn btn-success custmessagebox')) }}
            <a href="" id="seMeDelete" class="btn btn-danger" role="button"> {{{
                ucfirst(Lang::get('common.delete'))}}}</a></p>
    </div>
    <div id="errorMessageBox" class="custmessagebox alert alert-danger col-xs-12 collapse " role="alert">
        <p><strong>{{{ucfirst(Lang::get('common.failure'))}}}</strong></p>
        <ul>
            @if($errors->has())
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            @endif
        </ul>
    </div>
    <!-- Steps Progress and Details - START -->
    <div class="formsections  collapse in" id="step-1">
        @include('forms.installateur')
        @include('forms.fachkraft')
        @include($form[0])
        <div class="row">
            {{ Form::button('<i class="glyphicon glyphicon-arrow-right"></i>', array(
            'id'=>'FormBtn_1','class' =>'btn btn-success custmessagebox btn-lg col-xs-6 col-sm-4 col-md-2 pull-right',
            'data-loading-text'=>"<i class='fa fa-cog fa-spin'></i>", 'autocomplete'=>'off','onclick' => "javascript:
            clickOnDiv('btnStep-2');"
            )) }}
        </div>
    </div>
    {{ Form::open(array('url' => 'formSubmit','files' => true, 'id' => 'formsubmitid')) }}
    {{ Form::text('formularArt', $formart,['class' => 'hidden postinput','disabled']) }}
    <div class="formsections  collapse" id="step-2">
        @include($form[1])
        <div class="row">
            {{ Form::button('<i class="glyphicon glyphicon-arrow-right"></i>', array(
            'id'=>'FormBtn_2','class' =>'btn btn-success custmessagebox btn-lg col-xs-6 col-sm-4 col-md-2 pull-right',
            'data-loading-text'=>"<i class='fa fa-cog fa-spin'></i>", 'autocomplete'=>'off','onclick' => "javascript:
            clickOnDiv('btnStep-3');"
            )) }}
        </div>
    </div>
    <div class="formsections   collapse" id="step-3">
        @include($form[2])
        <div class="row">
            {{ Form::button('<i class="glyphicon glyphicon-arrow-right"></i>', array(
            'id'=>'FormBtn_3','class' =>'btn btn-success custmessagebox btn-lg col-xs-6 col-sm-4 col-md-2 pull-right',
            'data-loading-text'=>"<i class='fa fa-cog fa-spin'></i>", 'autocomplete'=>'off','onclick' => "javascript:
            clickOnDiv('btnStep-4');"
            )) }}
        </div>
    </div>
    <div class="formsections  collapse" id="step-4">
        @include($form[3])
        <div class="row">
            {{ Form::button('<i class="glyphicon glyphicon-arrow-right"></i>', array(
            'id'=>'FormBtn_4','class' =>'btn btn-success custmessagebox btn-lg col-xs-6 col-sm-4 col-md-2 pull-right',
            'data-loading-text'=>"<i class='fa fa-cog fa-spin'></i>", 'autocomplete'=>'off','onclick' => "javascript:
            clickOnDiv('btnStep-5');"
            )) }}
        </div>
    </div>
    <div class="formsections collapse" id="step-5">
        @include($form[4])
        <div class="row">
            {{ Form::button('<i class="glyphicon glyphicon-arrow-right"></i>', array(
            'id'=>'FormBtn_5','class' =>'btn btn-success custmessagebox btn-lg col-xs-6 col-sm-4 col-md-2 pull-right',
            'data-loading-text'=>"<i class='fa fa-cog fa-spin'></i>", 'autocomplete'=>'off','onclick' => "javascript:
            clickOnDiv('btnStep-6');"
            )) }}
        </div>
    </div>

    <div class=" formsections collapse " id="step-6">
        @include($form[5])
        <div class='pull-right'>
          {{ HTML::link('zwischenspeichern', ucfirst(Lang::get('common.saving')),['class' => 'btn btn-success custmessagebox btn-lg']) }}
          {{ Form::submit(ucfirst(Lang::get('common.sending')), array('class' => 'btn btn-success custmessagebox btn-lg')) }}
        </div>
        
    </div>
    {{ Form::close() }}
</div>
<!-- Steps Progress and Details - END -->
@stop