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

class EmailController extends Controller 
{
	public function mailbox() 
	{
		return View::make('admin.email.mailbox');
	}

	public function mail_detail() 
	{
		return View::make('admin.email.mail_detail');
	}

	public function mail_compose() 
	{
		return View::make('admin.email.mail_compose');
	}

	public function email_template() 
	{
		return View::make('admin.email.email_template');
	}
}