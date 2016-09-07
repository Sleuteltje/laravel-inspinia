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

class FormController extends Controller 
{
	public function form_advanced() 
	{
		return View::make('admin.form.form_advanced');
	}

	public function form_basic() 
	{
		return View::make('admin.form.form_basic');
	}

	public function form_editors() 
	{
		return View::make('admin.form.form_editors');
	}

	public function form_file_upload() 
	{
		return View::make('admin.form.form_file_upload');
	}

	public function form_insert() 
	{
		return View::make('admin.form.form_insert');
	}

	public function form_wizard() 
	{
		return View::make('admin.form.form_wizard');
	}	
}