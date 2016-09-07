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

class GraphController extends Controller 
{
	public function graph_chartjs() 
	{
		return View::make('admin.graph.graph_chartjs');
	}

	public function graph_flot() 
	{
		return View::make('admin.graph.graph_flot');
	}

	public function graph_morris() 
	{
		return View::make('admin.graph.graph_morris');
	}

	public function graph_peity() 
	{
		return View::make('admin.graph.graph_peity');
	}

	public function graph_rickshaw() 
	{
		return View::make('admin.graph.graph_rickshaw');
	}

	public function graph_sparkline() 
	{
		return View::make('admin.graph.graph_sparkline');
	}
}