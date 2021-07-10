<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('user/sign-up');
});
*/

    /////////////////////////login route and home page /////////////////////////////////////
    /////////////////////////login route and home page /////////////////////////////////////
    Route::get('/loginUser' ,'AuthController@showLogin')->name('login.page');
    Route::post('post-login', 'AuthController@postLogin');
    Route::get('registration', 'AuthController@showregistration')->name('signUP.page');
    Route::post('post-registration', 'AuthController@postRegistration');
    Route::get('/', 'AuthController@home')->name('HomePage');
    ///////////////////////// end login route and home page /////////////////////////////////////

    ///////////////////// login with Soical ////////////////////////////////
    Route::get('sign_up/github' , 'AuthWithController@github');
    Route::get('sign_up/github/redirect' , 'AuthWithController@githubRedirect');
    Route::get('sign_up/google' , 'AuthWithController@google');
    Route::get('sign_up/google/redirect' , 'AuthWithController@googleRedirect');
    Route::get('sign_up/facebook' , 'AuthWithController@facebook');
    Route::get('sign_up/facebook/redirect' , 'AuthWithController@facebookRedirect');
    ///////////////////// end login with Soical ////////////////////////////////






Route::group(['middleware' => 'auth'] , function (){
     ////////////////  logout route //////////////////// ///////////////////////////////
          Route::get('logout', 'AuthController@logout');
     ///////////////////// end logout route ///////////// ////////////////////////////

     /////////////// privacy routes ///////////////////////////////
     Route::get('/privacy/{id}','PrivacyController@index')->name('privacy');
     Route::get('showName', 'PrivacyController@changeshowName');
     Route::get('showMail', 'PrivacyController@changeshowMail');
     Route::get('HelpUsers', 'PrivacyController@updateHelpPeople');
     Route::get('notifyMe', 'PrivacyController@notifyMe');
    ///////////////////end privacy routes//////////////////////////////////


     ///////// route  doctors and nurses //////////////
     Route::get('/make-doctor','DoctorController@showMakeMeDoctor')->name('show.makeMeDoctor');
     Route::post('/store-doctor','DoctorController@storeDoctor')->name('store.doctor');
     Route::get('/make-nurse','NurseController@showMakeMeNurse');
     Route::post('/makeMeNurse','NurseController@makeMeNurse')->name('makeMeNurse');
     ////////////////////////////////////////////////////////////////////////

     //////////view page doctors and nurses ///////////////////////////////
     Route::get('/view-helpers','ViewDoctorsController@index');
     Route::get('/nurse/{id}','NurseController@showNurse')->name('showNerse');
     Route::get('/doctor/{id}','DoctorController@showDoctor')->name('showDoctor');
     ///////// end route show  doctor and nurse ////////////////////////////

     ////////////////////// profile route ///////////////////////////////
     Route::get('profile/{id}','ProfileController@showProfile');
     ////////////////////// end profile route ///////////////////////////

    /////////////////////// posts Route ////////////////////////////////
    Route::get('/add-post','PostsController@addPost')->name('get_AddPost');
    Route::post('/save-post','PostsController@storePost')->name('StorePost');

    ///////////////////////////////////////////////////////////////////

    ///////////////////////// forget password /////////////////////////
//    Route::get('/forget-password','ForgetPasswordController@index');
    Route::get('/veirfy-password','VerifyController@GetVerify')->name('verify.page');
    Route::post('/veirfied_email','VerifyController@verifiedEmail');

    /////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////

});

Route::get('/reset','ResetController@index');
Route::get('/reset-success','ResetSuccessController@index');
Route::get('/news','NewsController@index');


Route::get('/chat','ChatController@index');
Route::get('/hospital','HospitalController@index');
Route::get('/people','PeopleController@index');
Route::get('/show-news','ShowNewsController@index');


Route::get('/change-language','ChangeLanguageController@index');
Route::get('/contact-us','ContactUsController@index');
Route::get('/about-us','AboutUsController@index');
Route::get('/have-covid-report','IHaveCovid19ReportController@index');
Route::get('/iam-susbected','IamSusbectedController@index');
Route::get('/has-symptoms','HasSymptomsController@index');
Route::get('/edit-account','EditAccountController@index');
Route::get('/change-password','ChangePasswordController@index');
Route::get('/notification','NotificationController@index');

