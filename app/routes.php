<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getIndex');
Route::get('login', 'HomeLoginController@getLogin');
Route::get('register', 'HomeRegisterController@getRegister');
Route::post('register', 'HomeRegisterController@postRegister');
Route::post('login', 'HomeLoginController@postLogin');
Route::get('logout', 'HomeLoginController@logout');
Route::get('verify', 'HomeRegisterController@verify');
Route::post('verify', 'HomeRegisterController@verify');

Route::get('zwischenspeichern', 'ZwischenspeichernController@zwischenspeichern');
Route::get('webserviceread', 'SoapSapController@callWebserviceRead');

Route::post('resendverify', 'HomeRegisterController@resendVerify');
Route::get('confirmation', 'HomeRegisterController@confirmation');
Route::post('confirmation', 'HomeRegisterController@confirmation');

Route::get('reminder', 'RemindersController@getRemind');
Route::post('reminder', 'RemindersController@postRemind');

Route::get('password/reset/{token}', [
           'as' => 'reset_path',
           'uses' => 'RemindersController@getReset'
]);
Route::post('reset', 'RemindersController@postReset');


Route::get('register/verify/{confirmationCode}', [
           'as' => 'confirmation_path',
           'uses' => 'HomeRegisterController@confirm'
]);

Route::group(array('before' => 'auth'), function () {
    Route::get('test','HomeController@getTest');
    Route::get('/', 'UserController@getIndex');
    Route::get('inbetriebnahme', 'UserFormController@getFormInbetrieb');
    Route::get('hausanschluss', 'UserFormController@getFormHausAn');
    Route::get('overview', 'UserController@getOverview');
    Route::post('installateur', 'UserFormController@postInstallateur');
    Route::post('fachkraft', 'UserFormController@postFachkraft');
    Route::post('partOfFormSubmit', 'UserFormController@postPartOfForm');
    Route::post('formSubmit', 'UserFormController@postForm');
    Route::get('getFormOverview',function(){
            return View::make('forms.overview');
        }
    );
});
