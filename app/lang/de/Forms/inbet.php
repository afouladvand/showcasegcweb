<?php


$step1 = array(
    'step1_installnr' => 'Installateurnr:',
    'step1_title' => 'Installateurdaten',
    'step1_employee' => 'Fachkraft:'
);

$step2 = array(
    'step2_title' => 'Kundendaten',
    'step2_section1_title' => 'Kundenadresse',
    'step2_section2_title' => 'Eigentümeradresse',
    'step2_newAddress' => 'Eigentümeradresse identisch?',
);

$step3 = array(
    'step3_title' => 'Objektdaten',
    'step3_custType' => 'Bedarfsart:',
    'step3_commerce' => 'Gewerbe',
    'step3_home' => 'Haushalt',
    'step3_section1_title'=>'Verbraucherstellen Adresse',
    'step3_flur_we' => 'Flur und Wohneinheiten:',
    'step3_flur' => 'Flur',
    'step3_flurStk' => 'Flurstück',
    'step3_we' => 'Wohneinheiten'
);

$step4 = array(
    'step4_title' => 'Sparten',
    'step4_spar1' => 'Storm',
    'step4_spar2' => 'Wasser',
    'step4_spar3' => 'Gas',
    'step4_activity' => 'Vorhaben:',
    'step4_act_opt_default' => 'Auswahl treffen',
    'step4_act_opt_connect' => 'Anschluss',
    'step4_act_opt_edit' => 'Änderung',
    'step4_act_opt_disco' => 'Trennung',
    'step4_spar1_count' => 'Anzahl Stromzähler:',
    'step4_spar1_count_placeholder' => 'z.B. 1',
    'step4_spar1_type' => 'Stormzähler Typ',
    'step4_spar1_typ1' => 'Wechselstromzähler',
    'step4_spar1_typ2' => 'Drehstromzähler',
    'step4_spar1_typ3' => 'Mehrtarifzähler',
    'step4_spar1_typ4' => 'Leistungszähler',
    'step4_spar1_typ5' => 'Messwandler',
    'step4_spar1_typ6' => 'Tarifschaltgerät',
    'step4_spar1_gesamt' => 'Gesamtleistung in Kw:',
    'step4_spar1_gesamt_placeholder' => 'z.B. 123',
    'step4_spar2_count' => 'Anzahl Wasserzähler:',
    'step4_spar2_count_placeholder' => 'z.B. 1',
    'step4_spar2_gesamt' => 'Gesamtleistung in m3:',
    'step4_spar2_gesamt_placeholder' => 'z.B. 123',
    'step4_spar3_count' => 'Anzahl Gaszähler:',
    'step4_spar3_count_placeholder' => 'z.B. 1',
    'step4_spar3_gesamt' => 'Gesamtleistung in Kw:',
    'step4_spar3_gesamt_placeholder' => 'z.B. 123',
);

$step5= array(
    'step5_title' => 'Anlagen',
    'step5_file1' =>'Eigentümererklärung hochladen:',
    'step5_file2' =>'Amtlicher Lageplan hochladen:',
    'step5_file3' =>'Grundriss hochladen:',
    'step5_txtarea' =>'Zusätzliche Bemerkungen:',
);

$step6 = array(
    'step6_title' => 'Überprüfen'


);

$common = array(
    'private' => 'Person',
    'commercial' => 'Firma',
);

return $step1 + $step2 + $step3 + $step4 +$step5 + $step6 +$common;