<?php
/**
 * Created by PhpStorm.
 * User: ChanD
 * Date: 06.10.14
 * Time: 10:35
 */

class HomeRegisterController extends BaseController {
    public function getRegister()
    {
        return View::make('home.register');
    }

    public function postRegister()
    {
        $input = Input::all();
        $rules = array('username' => 'required|unique:users', 'email' => 'required|unique:users|email', 'password' => 'required');
        $v = Validator::make($input, $rules);
        if ($v->passes()) {
            $password = $input['password'];
            $password = Hash::make($password);
            $user = new User();
            $user->username = $input['username'];
            $user->email = $input['email'];
            $user->password = $password;
			$user->confirmation_code = str_random(30);
			$email = $user->email;
			$confirmation_code = $user->confirmation_code;			
			$toMail2 = array(Input::all());
			$toMail = $toMail2[0];
			$toMail['confirmation_code'] = $user->confirmation_code;			
			
            $user->save();
            
			return Redirect::to('verify')->with('toMail', $toMail);
           
        } else {
            return Redirect::to('register')->withInput()->withErrors($v);            
        }
    }
	
	public function verify(){

		  $data = Session::get('toMail');
		  
		  if(!$data){
		  	throw new NotFoundException;
		  }

		  Mail::send('emails.verify.verify_mail', $data, function($message) {
		  	
            $message->to(Session::get('toMail')['email'], Session::get('toMail')['username'])
                    ->subject(Lang::get('emails/verify.subject'));
          }); 

        return View::make('home.verify')->with('toMail', Session::get('toMail'));	
	}
	
	public function resendVerify(){
		
		$toMail = Input::all();		
		return Redirect::to('verify')->with('toMail', $toMail);
	}
	
    public function confirm($confirmation_code){
        if(!$confirmation_code){
            throw new NotFoundException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if(!$user){
            throw new NotFoundException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        return View::make('home.confirmation')->with(['title'   => Lang::get('confirmation.title')])
                                              ->with(['message' => Lang::get('confirmation.message')]);
    }
	
} 