<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\students;

class StudentController extends Controller
{
    public function index() {
		$obj = new students();
		$data = $obj::all();
		
		return view('student.index', ['data' => $data]);
	}
}
