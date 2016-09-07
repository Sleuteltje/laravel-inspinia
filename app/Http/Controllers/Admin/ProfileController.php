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

class ProfileController extends Controller 
{
	public function profile() 
	{
		return View::make('admin.profile.profile');
	}

	public function lockscreen() 
	{
		return View::make('admin.profile.lockscreen');
	}
}