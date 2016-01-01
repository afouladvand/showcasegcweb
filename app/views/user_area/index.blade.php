@extends('layouts.master')
@section('content')
<div class="container">
    @if($errors->has())
    @include($modal)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger col-xs-12" role="alert">{{ $error }}</div>
    @endforeach
    @endif

    <h4>Willkommen {{ ucwords(Auth::user()->username) }} im internen Bereich</h4>
    @if ($errors->has('installateur'))
    <p>Klicken Sie auf den Button "Anlegen" um einen neuen Installateur zu erstellen</p>
    @elseif ($errors->has('fachkraft'))
    <p>Klicken Sie auf den Button "Anlegen" um eine neue Fachkraft zu erstellen</p>
    @else
    <p> Sie finden eine im Bereich {{ HTML::link('#', '&Uuml;bersicht') }} alle gespeicherten und abgeschickten Antr&auml;ge.</p>

    <p>Neue Anträge für Hauanschl&uuml;sse finden sie {{ HTML::link('hausanschluss', 'hier') }}.</p>

    <p>Antrag auf Inbetriebenahme k&ouml;nnen sie {{ HTML::link('inbetriebnahme', 'hier') }} stellen</p>
    @endif
    <br>

    <p>Folgen sie diesen {{ HTML::link('logout', 'Link') }} um sich abzumelden.</p>
</div>
@stop