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

Route::get('/', function () {
    return view('testt');
});

Route::get('/recoveraccount.html', function () {
    return view('recoveraccount');
});

Route::post('/accountverification.php', function () {
    return view('accountverification');
});

Route::get('/resendotp.php', function () {
    return view('resendotp');
});

Route::get('/views.php', function () {
    return view('views');
});


Route::get('/linkupdates.php', function () {
    return view('linkupdates');
});

Route::get('/linkupdates2.php', function () {
    return view('linkupdates2');
});

Route::get('/linkups.php', function () {
    return view('linkups');
});

Route::get('/linkedup.php', function () {
    return view('linkedup');
});

Route::get('/linkedup1.php', function () {
    return view('linkedup1');
});

Route::get('/linkups1.php', function () {
    return view('linkups1');
});

Route::get('/push.php', function () {
    return view('push');
});

Route::post('/otpauth.php', function () {
    return view('otpauth');
});

Route::get('/fetch2.php', function () {
    return view('fetch2');
});

Route::get('/reset.php', function () {
    return view('reset');
});

Route::get('/formvalidation.php', function () {
    return view('formvalidation');
});

Route::post('/accountrecovery.php', function () {
    return view('accountrecovery');
});

Route::get('/consolemanager/', function () {
    return view('consolemanager.log in');
});

Route::get('/consolemanager/linkup.php', function () {
    return view('consolemanager.linkup');
});

Route::post('/new 3.php', function () {
    return view('new 3');
});

Route::post('/consolemanager/remarks.php', function () {
    return view('consolemanager.remarks');
});

Route::get('/consolemanager', function () {
    return view('consolemanager.testt');
});

Route::get('/consolemanager/remark.php', function () {
    return view('consolemanager.remark');
});

Route::get('/consolemanager/find.php', function () {
    return view('consolemanager.find');
});

Route::get('/consolemanager/log in.php', function () {
    return view('consolemanager.log in');
});

Route::get('/consolemanager/testt.php', function () {
    return view('consolemanager.testt');
});

Route::get('/consolemanager/testt2.php', function () {
    return view('consolemanager.testt2');
});

Route::get('/consolemanager/testt22.php', function () {
    return view('consolemanager.testt22');
});

Route::get('/consolemanager/delete.php', function () {
    return view('consolemanager.delete');
});

Route::get('/consolemanager/delete2.php', function () {
    return view('consolemanager.delete2');
});

Route::get('/consolemanager/featured.php', function () {
    return view('consolemanager.featured');
});

Route::get('/consolemanager/featured1.php', function () {
    return view('consolemanager.featured1');
});

Route::get('/consolemanager/featured11.php', function () {
    return view('consolemanager.featured11');
});

Route::get('/consolemanager/reporting.php', function () {
    return view('consolemanager.reporting');
});

Route::get('/consolemanager/reporting2.php', function () {
    return view('consolemanager.reporting2');
});

Route::get('/consolemanager/reporting22.php', function () {
    return view('consolemanager.reporting22');
});

Route::get('/consolemanager/search.php', function () {
    return view('consolemanager.search');
});

Route::get('/consolemanager/search1.php', function () {
    return view('consolemanager.search1');
});

Route::get('/consolemanager/help.php', function () {
    return view('consolemanager.help');
});

Route::get('/consolemanager/help1.php', function () {
    return view('consolemanager.help1');
});

Route::get('/consolemanager/help2.php', function () {
    return view('consolemanager.help2');
});

Route::get('/consolemanager/log out.php', function () {
    return view('consolemanager.log out');
});

Route::get('/consolemanager/log in.html', function () {
    return view('consolemanager.log in');
});

Route::post('/consolemanager/login.php', function () {
    return view('consolemanager.login');
});

Route::get('/testt.php', function () {
    return view('testt');
});

Route::get('/awarded.php', function () {
    return view('awarded');
});

Route::get('/testt2.php', function () {
    return view('testt2');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/database.php', function () {
    return view('database');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index.php', function () {
    return view('index');
});

Route::get('/log in.html', function () {
    return view('log in');
});

Route::get('/log in', function () {
    return view('log in');
});

Route::get('/log in.php', function () {
    return view('log in');
});

Route::get('/sign up.html', function () {
    return view('sign up');
});

Route::get('/sign up', function () {
    return view('sign up');
});

Route::get('/sign up.php', function () {
    return view('sign up');
});


Route::post('/signup.php', function () {
    return view('signup');
});

Route::post('/quickstart.php', function () {
    return view('quickstart');
});

Route::post('/login.php', function () {
    return view('login');
});

Route::get('/home.php', function () {
    return view('home');
});

Route::post('/home1.php', function () {
    return view('home1');
});

Route::get('/account.php', function () {
    return view('account');
});

Route::get('/search.php', function () {
    return view('search');
});

Route::get('/search1.php', function () {
    return view('search1');
});

Route::get('/notifs.php', function () {
    return view('notifs');
});

Route::get('/notifs1.php', function () {
    return view('notifs1');
});

Route::get('/notis.php', function () {
    return view('notis');
});

Route::get('/testt3.php', function () {
    return view('testt3');
});

Route::get('/timeline.php', function () {
    return view('timeline');
});

Route::post('/status.php', function () {
    return view('status');
});

Route::get('/delete.php', function () {
    return view('delete');
});

Route::get('/delete2.php', function () {
    return view('delete2');
});


Route::get('/linkupdateimage.php', function () {
    return view('linkupdateimage');
});

Route::post('/linkupdate image.php', function () {
    return view('linkupdate image');
});

Route::get('/linkupdateaudio.php', function () {
    return view('linkupdateaudio');
});

Route::post('/linkupdate audio.php', function () {
    return view('linkupdate audio');
});

Route::get('/documents.php', function () {
    return view('documents');
});

Route::post('/document.php', function () {
    return view('document');
});

Route::get('/linkupdatevideo.php', function () {
    return view('linkupdatevideo');
});

Route::post('/linkupdate video.php', function () {
    return view('linkupdate video');
});

Route::get('/info.php', function () {
    return view('info');
});

Route::get('/info2.php', function () {
    return view('info2');
});

Route::get('/log out.php', function () {
    return view('log out');
});

Route::get('/autosearch.php', function () {
    return view('autosearch');
});

Route::get('/fetch.php', function () {
    return view('fetch');
});

Route::get('/likes.php', function () {
    return view('likes');
});

Route::get('/liked.php', function () {
    return view('liked');
});

Route::get('/allphotos.php', function () {
    return view('allphotos');
});

Route::get('/remarks.php', function () {
    return view('remarks');
});

Route::get('/stars.php', function () {
    return view('stars');
});

Route::get('/remark.php', function () {
    return view('remark');
});

Route::post('/remark.php', function () {
    return view('remark');
});

Route::get('/replytextarea.php', function () {
    return view('replytextarea');
});

Route::get('/replies.php', function () {
    return view('replies');
});

Route::get('/remarks2.php', function () {
    return view('remarks2');
});

Route::get('/activate.php', function () {
    return view('activate');
});

Route::get('/explore.php', function () {
    return view('explore');
});

Route::get('/report.php', function () {
    return view('report');
});

Route::post('/reported.php', function () {
    return view('reported');
});

Route::get('/edit profile.php', function () {
    return view('edit profile');
});

Route::post('/edit profile2.php', function () {
    return view('edit profile2');
});

Route::get('/wallet.php', function () {
    return view('wallet');
});

Route::get('/gp.php', function () {
    return view('gp');
});

Route::get('/verificationapplication.php', function () {
    return view('verificationapplication');
});


Route::post('/verificationapply.php', function () {
    return view('verificationapply');
});

Route::get('/mode.php', function () {
    return view('mode');
});

Route::get('/changepassword.php', function () {
    return view('changepassword');
});

Route::post('/change password.php', function () {
    return view('change password');
});

Route::get('/about.html', function () {
    return view('about');
});

Route::get('/linkup.php', function () {
    return view('linkup');
});

Route::get('/mylinkups.php', function () {
    return view('mylinkups');
});

Route::get('/story.php', function () {
    return view('story');
});


Route::get('/storyy.html', function () {
    return view('storyy');
});

Route::get('/viewers.php', function () {
    return view('viewers');
});


Route::get('/moment.php', function () {
    return view('moment');
});

Route::post('/moments.php', function () {
    return view('moments');
});

Route::get('/editpost.php', function () {
    return view('editpost');
});

Route::post('/editpost1.php', function () {
    return view('editpost1');
});

Route::get('/mylinkups1.php', function () {
    return view('mylinkups1');
});

Route::get('/hashtags.php', function () {
    return view('hashtags');
});

Route::get('/suggestions.php', function () {
    return view('suggestions');
});

Route::get('/featured.php', function () {
    return view('featured');
});

Route::get('/featured1.php', function () {
    return view('featured1');
});

Route::get('/featured11.php', function () {
    return view('featured11');
});

Route::get('/awards.php', function () {
    return view('awards');
});

Route::get('/awards1.php', function () {
    return view('awards1');
});

Route::get('/policy.html', function () {
    return view('policy');
});

Route::get('/tos.html', function () {
    return view('tos');
});

Route::get('/help.php', function () {
    return view('help');
});

Route::get('/help.html', function () {
    return view('help');
});

Route::post('/helping.php', function () {
    return view('helping');
});

Route::get('/help.html', function () {
    return view('help');
});

Route::get('/testt22.php', function () {
    return view('testt22');
});

Route::get('/calculate result5.php', function () {
    return view('calculate result5');
});

Route::get('/calculate result66.php', function () {
    return view('calculate result66');
});

Route::get('/calculate result77.php', function () {
    return view('calculate result77');
});

Route::get('/calculate result88.php', function () {
    return view('calculate result88');
});

Route::get('/calculate result99.php', function () {
    return view('calculate result99');
});

Route::get('/calculate result100.php', function () {
    return view('calculate result100');
});

Route::get('/calculate result111.php', function () {
    return view('calculate result111');
});

Route::get('/calculate result122.php', function () {
    return view('calculate result122');
});

Route::get('/calculate result133.php', function () {
    return view('calculate result133');
});

Route::get('/calculate result144.php', function () {
    return view('calculate result144');
});

Route::get('/calculate result155.php', function () {
    return view('calculate result155');
});

Route::get('/calculate result166.php', function () {
    return view('calculate result166');
});

Route::get('/calculate result177.php', function () {
    return view('calculate result177');
});

Route::get('/calculate result188.php', function () {
    return view('calculate result188');
});

Route::get('/calculate result199.php', function () {
    return view('calculate result199');
});

Route::get('/calculate result220.php', function () {
    return view('calculate result220');
});


Route::post('/calculate result.php', function () {
    return view('calculate result');
});

Route::post('/calculate result6.php', function () {
    return view('calculate result6');
});

Route::post('/calculate result7.php', function () {
    return view('calculate result7');
});

Route::post('/calculate result8.php', function () {
    return view('calculate result8');
});

Route::post('/calculate result9.php', function () {
    return view('calculate result9');
});

Route::post('/calculate result10.php', function () {
    return view('calculate result10');
});

Route::post('/calculate result11.php', function () {
    return view('calculate result11');
});

Route::post('/calculate result12.php', function () {
    return view('calculate result12');
});

Route::post('/calculate result13.php', function () {
    return view('calculate result13');
});

Route::post('/calculate result14.php', function () {
    return view('calculate result14');
});

Route::post('/calculate result15.php', function () {
    return view('calculate result15');
});

Route::post('/calculate result16.php', function () {
    return view('calculate result16');
});

Route::post('/calculate result17.php', function () {
    return view('calculate result17');
});

Route::post('/calculate result18.php', function () {
    return view('calculate result18');
});

Route::post('/calculate result19.php', function () {
    return view('calculate result19');
});

Route::post('/calculate result20.php', function () {
    return view('calculate result20');
});

Route::get('/quickstart.php', function () {
    return view('quickstart');
});


Route::get('/debug.php', function () {
    return view('debug');
});

Route::get('/confirmpay.php', function () {
    return view('confirmpay');
});