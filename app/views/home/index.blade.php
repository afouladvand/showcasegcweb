@extends('layouts.master')
@section('content')
<div class="container">
    <h4>Willkommen im go <i>connect!</i>@web</h4>



    Sie können sich {{ HTML::link('login', 'anmelden') }} <br>
    oder wenn sie noch keinen Benutzernamen haben, können Sie sich auch {{ HTML::link('register', 'hier') }} regstrieren.
</div>
@stop