<?php
$formData = Session::get('sessionForm');
$formart = Session::get('formart');
//var_dump($formData);
//var_dump($formData['step3']);
$kdnOnly = array_key_exists('EigtPlz', $formData['step3']) ? FALSE : TRUE;
$kdnPrivate = array_key_exists('KdnFirmenNam', $formData['step3']) ? FALSE : TRUE;
if (!$kdnOnly) {
    $eigtPrivate = array_key_exists('EigtFirmenNam', $formData['step3']) ? FALSE : TRUE;
}
$activityText = array(
    'ansch' => Lang::get('forms/' . $formart . '.step4_act_opt_connect'),
    'aende' => Lang::get('forms/' . $formart . '.step4_act_opt_edit'),
    'trenn' => Lang::get('forms/' . $formart . '.step4_act_opt_disco'));
$stromArtText = array(
    'WS' => Lang::get('forms/' . $formart . '.step4_spar1_typ1'),
    'DS' => Lang::get('forms/' . $formart . '.step4_spar1_typ2'),
    'MZ' => Lang::get('forms/' . $formart . '.step4_spar1_typ3'),
    'LZ' => Lang::get('forms/' . $formart . '.step4_spar1_typ4'),
    'MW' => Lang::get('forms/' . $formart . '.step4_spar1_typ5'),
    'TSG' => Lang::get('forms/' . $formart . '.step4_spar1_typ6')
);

$spartenSize = (5 < count($formData['step5']) && count($formData['step5']) < 8) ? 'col-md-6' : 'col-md-12';



?>

<br>
<legend>{{{ Lang::get('forms/'.$formart.'.step2_title') }}}</legend>
{{ $kdnOnly ? '
<div class="col-md-12">' : '
<div class="col-md-6">'}}
    <h4>{{{ Lang::get('forms/'.$formart.'.step2_section1_title') }}}</h4>
    <table class="table">
        <tr>
            <td>{{$kdnPrivate ? Lang::get('common.fullname'): Lang::get('common.company') }}</td>
            <td>
                <?php
                if ($kdnPrivate) {
                    echo $formData['step3']['KdnVorNam'] . ' ' . $formData['step3']['KdnNachNam'];
                } else {
                    echo $formData['step3']['KdnFirmenNam'];
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>{{Lang::get('common.plz_city')}}</td>
            <td>{{{ $formData['step3']['KdnPlz'].' '.$formData['step3']['KdnOrt']}}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('common.street')}}</td>
            <td>{{{ $formData['step3']['KdnStr'].' '.$formData['step3']['KdnHausNr']}}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('common.tel')}}</td>
            <td>{{{ $formData['step3']['KdnTel']}}}</td>
        </tr>
    </table>
</div>
@if (!$kdnOnly)
<div class="col-md-6">
    <h4> {{{ Lang::get('forms/'.$formart.'.step2_section2_title') }}}</h4>
    <table class="table">
        <tr>
            <td>{{$eigtPrivate ? Lang::get('common.fullname'): Lang::get('common.company') }}</td>
            <td>
                <?php
                if ($eigtPrivate) {
                    echo $formData['step3']['EigtVorNam'] . ' ' . $formData['step3']['EigtNachNam'];
                } else {
                    echo $formData['step3']['EigtFirmenNam'];
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>{{Lang::get('common.plz_city')}}</td>
            <td>{{{ $formData['step3']['EigtPlz'].' '.$formData['step3']['EigtOrt']}}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('common.street')}}</td>
            <td>{{{ $formData['step3']['EigtStr'].' '.$formData['step3']['EigtHausNr']}}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('common.tel')}}</td>
            <td>{{{ $formData['step3']['EigtTel']}}}</td>
        </tr>
    </table>
</div>
@endif
<legend>{{{ Lang::get('forms/'.$formart.'.step3_title') }}}</legend>
<div class="col-md-12">
    <table class="table">
        <tr>
            <td>{{{Lang::get('forms/'.$formart.'.step3_custType')}}}</td>
            <td>
                <?php if ($formData['step4']['bedarfsart']) {
                    echo Lang::get('forms/' . $formart . '.step3_home');
                } else {
                    echo Lang::get('forms/' . $formart . '.step3_commerce');
                };?>
            </td>
        </tr>
        <tr>
            <td>{{Lang::get('common.plz_city')}}</td>
            <td>{{{ $formData['step4']['ObjAdrPlz'].' '.$formData['step4']['ObjAdrOrt']}}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('common.street')}}</td>
            <td>{{{ $formData['step4']['ObjAdrStr'].' '.$formData['step4']['ObjAdrNr']}}}</td>
        </tr>
        <tr>
            <td>{{{ Lang::get('forms/'.$formart.'.step3_flur').':'}}}</td>
            <td>{{{ $formData['step4']['ObjAdrFlur']}}}</td>
        </tr>
        <tr>
            <td>{{{ Lang::get('forms/'.$formart.'.step3_flurStk').':'}}}</td>
            <td></td>
        </tr>
        <tr>
            <td>{{{ Lang::get('forms/'.$formart.'.step3_we').':'}}}</td>
            <td>{{{ $formData['step4']['ObjAdrWe']}}}</td>
        </tr>
    </table>
</div>
<legend>{{{ Lang::get('forms/'.$formart.'.step4_title') }}}</legend>
<div class="col-md-12">
    @if (
    !array_key_exists('stromAktiv', $formData['step5']) &&
    !array_key_exists('gasAktiv', $formData['step5']) &&
    !array_key_exists('wasserAktiv', $formData['step5'])
    )
    <div class="alert alert-danger col-xs-12" role="alert">{{{Lang::get('common.missing_sp')}}}</div>
    @endif
    @if (array_key_exists('stromAktiv', $formData['step5']))
    <div class="{{$spartenSize}}">
        <table class="table ">
            <tr>
                <th colspan="2">
                    {{{Lang::get('forms/'.$formart.'.step4_spar1')}}}
                </th>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_activity')}}}</td>
                <td>{{{ $activityText[$formData['step5']['stromAktiv']]}}}</td>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_spar1_count')}}}</td>
                <td>{{{ $formData['step5']['stromAnzahlZaehler']}}}</td>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_spar1_type')}}}</td>
                <td>{{{ $stromArtText[$formData['step5']['stromArtZaehler']]}}}</td>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_spar1_gesamt')}}}</td>
                <td>{{{ $formData['step5']['stromGesamtleistung']}}}</td>
            </tr>
        </table>

    </div>
    @endif
    @if (array_key_exists('wasserAktiv', $formData['step5']))
    <div class="{{$spartenSize}}">

        <table class="table ">
            <tr>
                <th colspan="2">
                    {{{Lang::get('forms/'.$formart.'.step4_spar2')}}}
                </th>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_activity')}}}</td>
                <td>{{{ $activityText[$formData['step5']['wasserAktiv']]}}}</td>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_spar2_count')}}}</td>
                <td>{{{ $formData['step5']['wasserAnzahlZaehler']}}}</td>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_spar2_gesamt')}}}</td>
                <td>{{{ $formData['step5']['wasserGesamtleistung']}}}</td>
            </tr>

        </table>

    </div>
    @endif
    @if (array_key_exists('gasAktiv', $formData['step5']))
    <div class="{{$spartenSize}}">
        <table class="table ">
            <tr>
                <th colspan="2">
                    {{{Lang::get('forms/'.$formart.'.step4_spar3')}}}
                </th>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_activity')}}}</td>
                <td>{{{ $activityText[$formData['step5']['gasAktiv']]}}}</td>
            </tr>
            <tr>
                <td>{{{Lang::get('forms/'.$formart.'.step4_spar3_count')}}}</td>
                <td>{{{ $formData['step5']['gasAnzahlZaehler']}}}</td>
            </tr>
            <tr>
                <td>{{{ Lang::get('forms/'.$formart.'.step4_spar3_gesamt')}}}</td>
                <td>{{{ $formData['step5']['gasGesamtleistung']}}}</td>
            </tr>
        </table>
    </div>
    @endif
</div>
<legend>{{{ Lang::get('forms/'.$formart.'.step5_title') }}}</legend>
<div class="col-md-12">
    <table class="table">
        <tr>
            <td>{{{substr(Lang::get('forms/'.$formart.'.step5_file1'),0,-11)}}}</td>
            <td>{{("" != $formData['step6']['grundstEigErk'])? '<span class="fa fa-plus-circle"></span>' : '<span
                    class="fa fa-minus-circle"></span>'}}
            </td>
        </tr>
        <tr>
            <td>{{{substr(Lang::get('forms/'.$formart.'.step5_file2'),0,-11)}}}</td>
            <td>{{("" != $formData['step6']['lageplanAmt'])? '<span class="fa fa-plus-circle"></span>' : '<span
                    class="fa fa-minus-circle"></span>'}}
            </td>
        </tr>
        <tr>
            <td>{{{substr(Lang::get('forms/'.$formart.'.step5_file3'),0,-11)}}}</td>
            <td>{{("" != $formData['step6']['grundriss'])? '<span class="fa fa-plus-circle"></span>' : '<span
                    class="fa fa-minus-circle"></span>'}}
            </td>
        </tr>
        <tr>
            <td>{{{Lang::get('forms/'.$formart.'.step5_txtarea')}}}</td>
            <td>{{{$formData['step6']['bemerkungen']}}}</td>
        </tr>
    </table>
</div>




