<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Models\Student;
use App\Http\Models\Menu;
class SampleController extends Controller
{
    public function index() {
    	$obj = new Student();
		$dataStudent = $obj::all();
		$obj1 = new Menu();
		$dataMenu = $obj1::all();
		$parents = $obj1->getParents();
		$parents = $obj1->getChilds($parents);
		$parents = $obj1->getChildsSub($parents);
		return view('sample.main',['dataStudent' => $dataStudent],['dataMenu' => $parents]);
	}
}
