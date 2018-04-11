<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Menu;

class MenuController extends Controller
{
    public function index() {
		$obj = new Menu();
		$dataMenu = $obj::all();
		
		return view('header', ['dataMenu' => $dataMenu]);
	}
}
