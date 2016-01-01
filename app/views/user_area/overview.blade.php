@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h3>&Uuml;bersicht der Antr&auml;ge von {{ ucwords(Auth::user()->username) }}:</h3>
    </div>
    <div class="row">
        <h4>Gespeicherte Antr&auml;ge</h4>
    </div>
    <table class="table table-hover">
        <tr>
            <th class="col-xs-1 "></th>
            <th class="col-xs-2">Datum</th>
            <th class="col-xs-7 col-md-8">Anschlussadresse</th>
            <th class="col-xs-2 col-md-1"></th>
        </tr>
        <tr>
            <td class="text-right"><span class="fa fa-save"></span></td>
            <td>26.09.2014</td>
            <td>Stresemannstraße 120, 22769 Hamburg</td>
            <td><button type="button" class="btn btn-default btn-block"><span class="fa fa-pencil-square-o"></span></button></td>
        </tr>
        <tr>
            <td class="text-right"><span class="fa fa-save"></span></td>
            <td>24.09.2014</td>
            <td>Max-Brauer-Allee 114, 22765 Hamburg</td>
            <td><button type="button" class="btn btn-default btn-block"><span class="fa fa-pencil-square-o"></span></button></td>
        </tr>
        <tr>
            <td class="text-right"><span class="fa fa-save"></span></td>
            <td>22.09.2014</td>
            <td>Paulsenplatz 5, 22767 Hamburg</td>
            <td><button type="button" class="btn btn-default btn-block"><span class="fa fa-pencil-square-o"></span></button></td>
        </tr>
    </table>

    <div class="row">
        <h4>Abgeschickte Antr&auml;ge</h4>
    </div>
    <table class="table table-hover">
        <tr>
            <th class="col-xs-1"></th>
            <th class="col-xs-2">Datum</th>
            <th class="col-xs-7 col-md-8">Anschlussadresse</th>
            <th class="col-xs-2 col-md-1"></th>
        </tr>
        <tr>
            <td class="text-right"><span class="fa fa-envelope-o"></td>
            <td>26.09.2014</td>
            <td>Stresemannstraße 60, 22769 Hamburg</td>
            <td><button type="button" class="btn btn-default btn-block"><span class="fa fa-eye"></span></button></td>
        </tr>
        <tr>
            <td class="text-right"><span class="fa fa-envelope-o"></td>
            <td>1.08.2014</td>
            <td>An der Verbindungsbahn 8, 20146 Hamburg</td>
            <td><button type="button" class="btn btn-default btn-block"><span class="fa fa-eye"></span></button></td>
        </tr>
        <tr>
            <td class="text-right"><span class="fa fa-envelope-o"></td>
            <td>5.07.2014</td>
            <td>Rothenbaumschaussee 79, 20148 Hamburg</td>
            <td><button type="button" class="btn btn-default btn-block"><span class="fa fa-eye"></span></button></td>
        </tr>
    </table>
</div>


@stop