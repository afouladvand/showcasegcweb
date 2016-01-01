<?php

class RemindersController extends BaseController {

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('password.remind');
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
	    $response = Password::remind(Input::only('email'), function($message){
				$message->subject(Lang::get('emails/password_reset.subject')); 
			});
		switch ($response)
		{
		
			/**
			 * Mailversand-Meldung kommt auch wenn Mailadresse nicht in DB, verhindert systematisches
			 * Testen auf registrierte Mailadressen
			 */   
			case Password::INVALID_USER:
				//ursprünglich: return Redirect::back()->with('error', Lang::get($response));
				return View::make('password.remind')->with('status', Lang::get('password/reset.mailsent', array('email' => Input::get('email'))));

			case Password::REMINDER_SENT:
				//ursprünglich: return View::make('password.remind')->with('status', Lang::get($response));
				return View::make('password.remind')->with('status', Lang::get('password/reset.mailsent', array('email' => '<b>'. Input::get('email'). '</b>')));


		}
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('password.reset')->with('token', $token);
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);
		


		$response = Password::reset($credentials, function($user, $password)
		{
			
			$user->password = Hash::make($password);
			$user->save();
			
		});


		switch ($response)
		{
			case Password::INVALID_PASSWORD:
				return Redirect::back()->withErrors(['invalid_password' => Lang::get('password/reset.invalid_password')]);
			case Password::INVALID_TOKEN:               
                return Redirect::back()->withErrors(['invalid_token'    => Lang::get('password/reset.invalid_token')]);
			case Password::INVALID_USER:
				return Redirect::back()->withErrors(['invalid_user'     => Lang::get('password/reset.invalid_user')]);

			case Password::PASSWORD_RESET:
				return View::make('password.reset')->with(['success' => Lang::get('password/reset.password_success')]);
				//return Redirect::to('login');
		}
  

	}

}
