<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('index', 'IndexController@home');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	//
});

/*Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);*/

/*=============================================
=            Foobar Route Laravel             =
=============================================*/

/*----------  Check Version Laravel  ----------*/

Route::get('check-phpinfo', function() {
	return phpinfo();
});

/*----------  Check Version Laravel  ----------*/

Route::get('check-version', function() {
	$laravel = app();
	return "Your Laravel version is ".$laravel::VERSION;
});

/*----------  Check Connect Database  ----------*/

Route::get('check-database',function() {
	if (DB::connection('mysql')->getDatabaseName()) {
		return "Connection successful to the DB: " . DB::connection('mysql')->getDatabaseName();
	} else {
		return 'Connection failed !!';
	}
});

Route::get('check-database2',function() {
	if (DB::connection('mysql2')->getDatabaseName()) {
		return "Connection successful to the DB: " . DB::connection('mysql2')->getDatabaseName();
	} else {
		return 'Connection failed !!';
	}
});

Route::get('query', function() {
	$query = DB::connection('mysql')->select('select * from user where user_id = 3');
	return $query;
});

/*----------  Check Public Path  ----------*/

Route::get('check-public', function() {
	return public_path();
});

/*----------  Check Timezone  ----------*/

Route::get('check-time', function() {
	$time = time();
	return "Your Time is ".$time;
});

/*----------  Check Session  ----------*/

Route::get('check-session', function() {
	return Session::all();
});

/*----------  Check Session Destroy  ----------*/

Route::get('session-destroy', function() {
	Session::flush();
	return Session::all();
});

/*----------  Check Model  ----------*/

Route::get('check-model','ProfileController@getIndex');

/*=====  End of Foobar  ======*/





/*================================
=            Back-End            =
================================*/

/*----------  Login  ----------*/

Route::get('admin/login','Admin\LoginController@login');
Route::get('admin/login/logout','Admin\LoginController@logout');
Route::post('admin/login/check','Admin\LoginController@check');

/*----------  Dashboard  ----------*/

Route::get('admin/index','Admin\IndexController@index');
Route::get('admin/index2','Admin\IndexController@index2');
Route::get('admin/index3','Admin\IndexController@index3');
Route::get('admin/index4','Admin\IndexController@index4');

/*----------  Graph  ----------*/

Route::get('admin/graph_chartjs','Admin\GraphController@graph_chartjs');
Route::get('admin/graph_flot','Admin\GraphController@graph_flot');
Route::get('admin/graph_morris','Admin\GraphController@graph_morris');
Route::get('admin/graph_peity','Admin\GraphController@graph_peity');
Route::get('admin/graph_rickshaw','Admin\GraphController@graph_rickshaw');
Route::get('admin/graph_sparkline','Admin\GraphController@graph_sparkline');

/*----------  Mailbox  ----------*/

Route::get('admin/mailbox','Admin\EmailController@mailbox');
Route::get('admin/mail_detail','Admin\EmailController@mail_detail');
Route::get('admin/mail_compose','Admin\EmailController@mail_compose');
Route::get('admin/email_template','Admin\EmailController@email_template');

/*----------  Widgets  ----------*/

Route::get('admin/widgets','Admin\WidgetController@widgets');

/*----------  Forms  ----------*/

Route::get('admin/form_advanced','Admin\FormController@form_advanced');
Route::get('admin/form_basic','Admin\FormController@form_basic');
Route::get('admin/form_editors','Admin\FormController@form_editors');
Route::get('admin/form_file_upload','Admin\FormController@form_file_upload');
Route::get('admin/form_insert','Admin\FormController@form_insert');
Route::get('admin/form_wizard','Admin\FormController@form_wizard');

/*----------  App Views  ----------*/

Route::get('admin/contacts','Admin\AppController@contacts');
Route::get('admin/projects','Admin\AppController@projects');
Route::get('admin/project_detail','Admin\AppController@project_detail');
Route::get('admin/file_manager','Admin\AppController@file_manager');
Route::get('admin/calendar','Admin\AppController@calendar');
Route::get('admin/timeline','Admin\AppController@timeline');
Route::get('admin/pin_board','Admin\AppController@pin_board');

/*----------  Other Pages  ----------*/

Route::get('admin/search_results','Admin\OtherController@search_results');
Route::get('admin/invoice','Admin\OtherController@invoice');
// Route::get('admin/login','Admin\OtherController@login');
Route::get('admin/login_two_columns','Admin\OtherController@login_two_columns');
Route::get('admin/register','Admin\OtherController@register');
Route::post('admin/register/check/username','Admin\OtherController@check_username');
Route::get('admin/error404','Admin\OtherController@error404');
Route::get('admin/error500','Admin\OtherController@error500');
Route::get('admin/empty_page','Admin\OtherController@empty_page');

/*----------  Miscellaneous  ----------*/

Route::get('admin/toastr_notifications','Admin\MiscellaneousController@toastr_notifications');
Route::get('admin/nestable_list','Admin\MiscellaneousController@nestable_list');
Route::get('admin/forum_main','Admin\MiscellaneousController@forum_main');
Route::get('admin/google_maps','Admin\MiscellaneousController@google_maps');
Route::get('admin/code_editor','Admin\MiscellaneousController@code_editor');
Route::get('admin/modal_window','Admin\MiscellaneousController@modal_window');
Route::get('admin/validation','Admin\MiscellaneousController@validation');
Route::get('admin/tree_view','Admin\MiscellaneousController@tree_view');
Route::get('admin/chat_view','Admin\MiscellaneousController@chat_view');

/*----------  UI Elements  ----------*/

Route::get('admin/typography','Admin\UIController@typography');
Route::get('admin/icons','Admin\UIController@icons');
Route::get('admin/draggable_panels','Admin\UIController@draggable_panels');
Route::get('admin/buttons','Admin\UIController@buttons');
Route::get('admin/video','Admin\UIController@video');
Route::get('admin/tabs_panels','Admin\UIController@tabs_panels');
Route::get('admin/notifications','Admin\UIController@notifications');
Route::get('admin/badges_labels','Admin\UIController@badges_labels');

/*----------  Grid options  ----------*/

Route::get('admin/grid_options','Admin\GridController@grid_options');

/*----------  Tables  ----------*/

Route::get('admin/table_basic','Admin\TableController@table_basic');
Route::get('admin/table_data_tables','Admin\TableController@table_data_tables');
Route::get('admin/jq_grid','Admin\TableController@jq_grid'); /********************/

/*----------  Gallery  ----------*/

Route::get('admin/basic_gallery','Admin\GalleryController@basic_gallery');
Route::get('admin/carousel','Admin\GalleryController@carousel');

/*----------  CSS Animations  ----------*/

Route::get('admin/css_animation','Admin\CSSController@css_animation');

/*----------  Landing Page  ----------*/

Route::get('admin/css_animation','Admin\CSSController@css_animation');

/*----------  Package  ----------*/

Route::get('admin/package','Admin\PackageController@package');

/*----------  Profile  ----------*/

Route::get('admin/profile','Admin\ProfileController@profile');
Route::get('admin/profile/edit','Admin\ProfileController@edit_profile');
Route::get('admin/lockscreen','Admin\ProfileController@lockscreen');
Route::post('admin/edit/password','Admin\ProfileController@change_password');
Route::get('admin/mail','Admin\ProfileController@mail');

/*=====  End of Back-End  ======*/