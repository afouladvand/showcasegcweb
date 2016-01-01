<h3>{{{Lang::get('forms/ansch.step1_title')}}}</h3>
<table class="table">
    <tr>
        <td>{{{Lang::get('common.instanr')}}}</td>
        <td>{{{ $inst->installNr }}}</td>
    </tr>
    <tr>
        <td>{{{Lang::get('common.company')}}}</td>
        <td>{{{ $inst->firmenName }}}</td>
    </tr>
    <tr>
        <td>{{{Lang::get('common.street')}}}</td>
        <td>{{{ $inst->strasse }}} {{{ $inst->strNr }}}</td>
    </tr>
    <tr>
        <td>{{{Lang::get('common.plz_city')}}}</td>
        <td>{{{ $inst->plz }}} {{{ $inst->ort }}}</td>
    </tr>
    <tr>
        <td>{{{Lang::get('common.tel')}}}</td>
        <td>{{{ $inst->telefon }}}</td>
    </tr>
    <tr>
        <td>{{{Lang::get('common.fax')}}}</td>
        <td>{{{ $inst->fax }}}</td>
    </tr>
    <tr>
        <td>{{{Lang::get('common.specemployee')}}}</td>
        <td>{{{ $inst->fachkraft->vorname }}} {{{ $inst->fachkraft->nachname }}}</td>
    </tr>
</table>
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#instModal">{{{ucfirst(Lang::get('common.edit'))}}}</button>
{{HTML::popoverinfo(Lang::get('popoverinfo.installateur') )}}


