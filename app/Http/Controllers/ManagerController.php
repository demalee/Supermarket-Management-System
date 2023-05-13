<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Supermarket;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //all managers
        $managers = Manager::all();
        return  view('kurasa_managers',compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Supermarket $supermarket)
    {
        //
        // Display a form to create a new manager
//        dd($supermarket);
        return view('add_manager', compact('supermarket'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Store a new manager in the database
    public function store(Request $request, Supermarket $supermarket)
    {
        //
        $data = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email|unique:managers,email',
        ]);
        $manager = new Manager($data);
        $manager->supermarket()->associate($supermarket);
//      dd($supermarket);
        try {
            $manager->save();
            return redirect()->route('kurasa_supermarket', $supermarket)->with('success', 'Manager created successfully.');

        }
        catch (\Exception $e){
            return redirect()->back()->with('error','Error while adding Manager');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(Manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        //
    }
}
