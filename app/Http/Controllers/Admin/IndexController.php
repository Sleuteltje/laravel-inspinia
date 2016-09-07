<?php 

namespace App\Http\Controllers\Admin;

use Redis;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;

class IndexController extends Controller 
{
	public function index() 
	{
		return View::make('admin.dashboard.index');
	}

	public function index2() 
	{
		return View::make('admin.dashboard.index2');
	}

	public function index3() 
	{
		return View::make('admin.dashboard.index3');
	}

	public function index4() 
	{
		return View::make('admin.dashboard.index4');
	}
}