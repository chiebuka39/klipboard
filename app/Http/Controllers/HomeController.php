<?php

namespace App\Http\Controllers;

use App\ShouldLoad;
use App\Employee;
use App\Jobs\LoadDataFromExcel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    	$loaded = ShouldLoad::firstOrCreate(['name' => 'klipboard']);

    	if($loaded->loaded == false){
    		$job = new LoadDataFromExcel;
    		$this->dispatch($job);
  			$loaded->loaded = true;
  			$loaded->save();
    	}
    	
    	$employees = Employee::paginate(20);
    	
    	return view('welcome', compact('employees'));
    }

    public function single(Employee $employee)
    {
    	return view('employee', compact('employee'));
    }
}
