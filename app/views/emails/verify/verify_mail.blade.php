<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>{{Lang::get('emails/verify.headline')}}</h2>

        <div>
            {{Lang::get('emails/verify.content', 
                  array('url' => URL::to('register/verify/' . $confirmation_code)))}}
        </div>

    </body>
</html>