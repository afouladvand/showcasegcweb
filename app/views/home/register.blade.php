@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="well">
                <legend>{{Lang::get('register.registerMessage')}}</legend>
                {{ Form::open(array('url' => 'register')) }}
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    {{ Form::label('username', Lang::get('common.username')) }}
                    {{ Form::text('username', null,[
                    'placeholder' => Lang::get('common.username'),
                    'class' => 'form-control'
                    ])}}
                    {{ $errors->first('username', '<p class="help-block">:message</p>') }}
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {{ Form::label('email', Lang::get('common.email')) }}
                    {{ Form::text('email', null,[
                    'placeholder' => Lang::get('common.email'),
                    'class' => 'form-control'
                    ])}}
                    {{ $errors->first('email', '<p class="help-block">:message</p>') }}
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {{ Form::label('password', Lang::get('common.password')) }}
                    {{ Form::password('password', [
                    'placeholder' => Lang::get('common.password'),
                    'class'=>'form-control'
                    ])}}
                    {{ $errors->first('password', '<p class="help-block">:message</p>') }}
                </div>
                {{ Form::submit(ucfirst(Lang::get('common.register')),['class' => 'btn btn-success']) }}
                {{ HTML::link('/', ucfirst(Lang::get('common.cancel')), ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>
@stop