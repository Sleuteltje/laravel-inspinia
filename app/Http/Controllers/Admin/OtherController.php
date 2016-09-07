<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;

class OtherController extends Controller 
{
	public function search_results() 
	{
		return View::make('admin.other.search_results');
	}

	public function lockscreen() 
	{
		return View::make('admin.other.lockscreen');
	}

	public function invoice() 
	{
		return View::make('admin.other.invoice');
	}

	public function login() 
	{
		return View::make('admin.other.login');
	}

	public function login_two_columns() 
	{
		return View::make('admin.other.login_two_columns');
	}

	public function register() 
	{
		return View::make('admin.other.register');
	}

	public function error404() 
	{
		return View::make('admin.other.404');
	}

	public function error500() 
	{
		return View::make('admin.other.500');
	}

	public function empty_page() 
	{
		return View::make('admin.other.empty_page');
	}  
}