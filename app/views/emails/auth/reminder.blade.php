<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>{{Lang::get('emails/password_reset.headline')}}</h2>

		<div>
			{{ Lang::get('emails/password_reset.content', array('url'    => URL::to('password/reset', array($token)),
			                                                    'expire' => Config::get('auth.reminder.expire', 60))) }}

		</div>
	</body>
</html>
