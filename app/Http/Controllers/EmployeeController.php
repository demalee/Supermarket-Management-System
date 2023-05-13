<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Manager;
use App\Models\Supermarket;
use Illuminate\Http\Request;
use App\Jobs\ImportCsvJob;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
 //lets import employees
    public function import(Request $request,Manager $manager)
    {
       //for queeing
        dispatch(new importCsvJob());

        if ($request->hasFile('file')) {
            $file = $request->file('file');
//            dd($file);
            $csvData = file_get_contents($file);
            $rows = array_map("str_getcsv", explode("\n", $csvData));
            $header = array_shift($rows);
            foreach ($rows as $row) {
                $data = array_combine($header, $row);
                $employee = new Employee();
                $employee->name = $data['name'];
                $employee->type = $data['type']  === 'backoffice' ?: 'cashier';
                $employee->gender = $data['gender'];
                $employee->manager()->associate($manager);
                $employee->save();
            }
            return redirect()->back()->with('success', 'Employees imported successfully.');
        } else {
            return redirect()->back()->with('error', 'Please select a CSV file to import.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
