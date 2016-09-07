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

class UIController extends Controller 
{
	public function typography() 
	{
		return View::make('admin.ui.typography');
	}

	public function icons() 
	{
		return View::make('admin.ui.icons');
	}

	public function draggable_panels() 
	{
		return View::make('admin.ui.draggable_panels');
	}

	public function buttons() 
	{
		return View::make('admin.ui.buttons');
	}

	public function video() 
	{
		return View::make('admin.ui.video');
	}

	public function tabs_panels() 
	{
		return View::make('admin.ui.tabs_panels');
	}

	public function notifications() 
	{
		return View::make('admin.ui.notifications');
	}

	public function badges_labels() 
	{
		return View::make('admin.ui.badges_labels');
	}	
}