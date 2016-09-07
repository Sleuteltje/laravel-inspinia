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

class MiscellaneousController extends Controller 
{
	public function toastr_notifications() 
	{
		return View::make('admin.miscellaneous.toastr_notifications');
	}

	public function nestable_list() 
	{
		return View::make('admin.miscellaneous.nestable_list');
	}

	public function timeline_2() 
	{
		return View::make('admin.miscellaneous.timeline_2');
	}

	public function forum_main() 
	{
		return View::make('admin.miscellaneous.forum_main');
	}

	public function google_maps() 
	{
		return View::make('admin.miscellaneous.google_maps');
	}

	public function code_editor() 
	{
		return View::make('admin.miscellaneous.code_editor');
	}

	public function modal_window() 
	{
		return View::make('admin.miscellaneous.modal_window');
	}

	public function validation() 
	{
		return View::make('admin.miscellaneous.validation');
	}

	public function tree_view() 
	{
		return View::make('admin.miscellaneous.tree_view');
	}

	public function chat_view() 
	{
		return View::make('admin.miscellaneous.chat_view');
	}

	public function forum_post() 
	{
		return View::make('admin.miscellaneous.forum_post');
	}	
}