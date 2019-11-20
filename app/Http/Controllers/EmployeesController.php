<?php 
namespace App\Http\Controllers;


class EmployeesController extends Controller
{
	public function index ()
	{
		return view('employees.index');
	}

	public function create()
	{
		return view('employees.create');
	}

	public function edit($id){

		return view('employees.edit');
	}
}


