<?php
/**
 * Created by PhpStorm.
 * User: ChanD
 * Date: 06.10.14
 * Time: 10:31
 */

class HomeLoginController extends BaseController {
    public function getLogin()
    {
        return View::make('home.login');
    }

    public function postLogin()
    {
        $input = Input::all();
        $rules = array('email' => 'required', 'password' => 'required');
        $v = Validator::make($input, $rules);
        if ($v->fails()) {
            return Redirect::to('login')->withErrors($v);
        } else {
            $credentials = array('email'    => $input['email'],
                                 'password' => $input['password']
								 );
			//Check ob Logindaten korrekt					 
            if (Auth::validate($credentials)) {
            	//Wenn Logindaten korrekt: Check ob Konto aktiviert
				$credentials = array('email'     => $input['email'],
                                     'password'  => $input['password'],
                                     'confirmed' => 1);								 
				if(Auth::validate($credentials)){
				   //Falls Logindaten korrekt und Konto aktiviert: User Einloggen
				   Auth::attempt($credentials);
				   
				   //Daten aus SAP ziehen
		           $pispdm = array(
		             'ROLLFKT'    => 'INST',
		             'PARTID'     => '10000',
				     'TITLE'      => '',
				     'NAME1'      => '',
				     'NAME2'      => '',
				     'POSTCODE1'  => '',
				     'CITY1'      => '',
				     'CITY2'      => '',
				     'STREET'     => '',
				     'HOUSENUM1'  => '',
				     'TELNUMBER1' => '',
				     'MOBNUMBER1' => '',
				     'SMTPADDR'   => '',
				     'ZULNR'      => '',
				     'ZUDATB'     => '',
				     'ZUERNA'     => '',
				     'INSTBART'   => '',
				     'FKTITLE'    => '',
				     'FKNAM'      => '',
				     'FKVNM'      => ''				     
		           );				   
				   $params = array(
                      				'PI_ACTVT'  => '03',
		             			'PI_ASART'  => 'IAB1',
		             			'PI_S_PD_M' => $pispdm
				   );
				   //$sapresult = App::make('SoapSapController')->callWebserviceRead($params);
				   //Session::put('sapdata', $sapresult);
				   
				   return Redirect::to('/');
				} else {
				   	//Falls Logindaten korrekt aber Konto nicht aktiviert:
                   			 	 //Redirekt auf Verify Seite mit Option, sich die VerifyMail nochmal schicken zu lassen
				   	$user = User::findByEmailOrFail($input['email']);
			       	   	$toMail = array('email'             => $user->email,
			                       		    	 'username'          => $user->username,
				                   	    	 'confirmation_code' => $user->confirmation_code,
						    	 'login'             => true);
                   				return View::make('home.verify')->with('toMail', $toMail);
				}                
            } else {
            	//Falls Logindaten falsch
                return Redirect::to('login')->withErrors(['credentials' => 'Benutzername oder Passwort ungültig.']);
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
} 