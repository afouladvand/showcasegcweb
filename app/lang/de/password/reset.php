<?php
/**
 * Created by PhpStorm.
 * User: ChanD
 * Date: 06.10.14
 * Time: 12:09
 */

return array(

    //Allgemeines
    'email'            => 'E-Mail',
    'password'         => 'Passwort',
    
	//Reset-Mail Anforderungsseite
	'remind_title'     => 'Passwort zurücksetzen',
	'remind_text'      => 'Falls Sie Ihr Passwort verloren haben können Sie hier einen Link zum Zurücksetzen des Passworts anfordern. Tragen Sie dazu Ihre E-Mail-Adresse in das folgende Feld ein und klicken Sie auf "E-Mail anfordern". Danach prüfen Sie Ihr Postfach und folgen den Anweisungen in der E-Mail.',
	'sendmail'         => 'E-Mail anfordern',
	'mailsent'         => 'Die E-Mail zum Zurücksetzen des Passworts wurde an <b> :email </b> gesendet.',
    
	//reset Seite
	'reset_title'      => 'Passwort zurücksetzen',
	'reset_text'       => 'Bitte geben Sie Ihre E-Mail Adresse an um zu verifizieren, dass sie der Inhaber des Benutzerkontos sind. Danach wählen Sie bitte ein neues Passwort aus und bestätigen dieses.',
    'password_choose'  => 'Neues Passwort wählen',
    'password_retype'  => 'Neues Passwort bestätigen',
    'password_change'  => 'Passwort ändern',
    'password_success' => 'Sie haben Ihr Passwort erfolgreich geändert und können sich nun anmelden.',
    
    //fehlermeldungen
    "invalid_password" => "Passwörter müssen mindestens 6 Zeichen lang sein und korrekt bestätigt werden.",
    "invalid_user"     => "Wir konnten leider keinen Nutzer mit dieser E-Mail Adresse finden.",
    "invalid_token"    => "Der Passwort-Wiederherstellungs-Schlüssel ist ungültig oder abgelaufen."

);