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

class TableController extends Controller 
{
	public function table_basic() 
	{
		return View::make('admin.table.table_basic');
	}

	public function table_data_tables() 
	{
		return View::make('admin.table.table_data_tables');
	}

	public function jq_grid() 
	{
		return View::make('admin.table.jq_grid');
	}	
}