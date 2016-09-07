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

class AppController extends Controller 
{
	public function contacts() 
	{
		return View::make('admin.app.contacts');
	}

	public function projects() 
	{
		return View::make('admin.app.projects');
	}

	public function project_detail() 
	{
		return View::make('admin.app.project_detail');
	}

	public function file_manager() 
	{
		return View::make('admin.app.file_manager');
	}

	public function calendar() 
	{
		return View::make('admin.app.calendar');
	}

	public function timeline() 
	{
		return View::make('admin.app.pin_board');
	}

	public function pin_board() 
	{
		return View::make('admin.app.pin_board');
	}   
}