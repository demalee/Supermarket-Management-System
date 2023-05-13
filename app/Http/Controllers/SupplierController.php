<?php

namespace App\Http\Controllers;

use App\Models\Supermarket;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
    public function import(Request $request,Supermarket $supermarket)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
//            dd($file);
            $csvData = file_get_contents($file);
            $rows = array_map("str_getcsv", explode("\n", $csvData));
            $header = array_shift($rows);
            foreach ($rows as $row) {
                $data = array_combine($header, $row);
                $supplier = new Supplier();
                $supplier->name = $data['name'];
                $supplier->type = $data['phone'];
                $supplier->gender = $data['location '];
                $supplier->supermarket()->associate($supermarket);
                $supplier->save();
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
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
