<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Inserting of records
     *
     * @param Request $request
     * @return void
     */
    function store(Request $request) 
    {
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->age = $request->age;

        $employee->save();

        return $employee;
    }

    /**
     * Showing all values
     *
     * @return void
     */
    function index() 
    {
        //Select * from employee
        return Employee::all();
    }

    /**
     * Update function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $employee->name = $request->name;
        $employee->age = $request->age;

        $employee->save();

        return $employee;
    }

    /**
     * Deleting a record
     *
     * @param [type] $id
     * @return void
     */
    function destroy($id)
    {
        //Delete from Employee where id = $id
        $employee = Employee::find($id);

        $employee->delete();

        return "Deleted an employee";
    }

    /**
     * Showing 1 record
     *
     * @param [type] $id
     * @return void
     */
    function show($id)
    {
        //Select * from employee where id = $id
        return Employee::find($id);
    }

    function thisIsMyTestFunction(Request $request, $name, $age, $gender)
    {
        return $name . " - ". $age . " - " . $gender;
        //return ($request->age < 18) ? "Minor " . $request->name : "not minor";
    }
}
