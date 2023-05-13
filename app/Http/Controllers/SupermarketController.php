<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Manager;
use App\Models\Supermarket;
use App\Models\Supplier;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class SupermarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $supermarkets = Supermarket::orderBy('name', 'asc')->paginate(10);
        $view = $request->input('view', 'list');
        $managers =Manager::count();
        $employees =Employee::count();
        $suppliers = Supplier::count();
        $superCount = Supermarket::count();

        return  view('welcome',compact(
            'supermarkets',
            'view',
            'superCount',
            'managers',
            'suppliers',
            'employees'
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_kurasa_supermarket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //lets get inputted data
        $request->validate([
            'name'=>'required',
            'location'=>'required',
        ]);
        //we can use this
        //$supermarket = Supermarket::create($request);

         //or use this
        $supermaket = new Supermarket();
        $supermaket-> name=$request->get('name');
        $supermaket ->location=$request->get('location');
        try {
            $supermaket->save();
            $supermaket = $request->get('name');
            $message = 'You have successfully added ' .''   . ''.   $supermaket. '.'.'   '.' Supermarket';
            return redirect()->back()->with('success',$message);
        }
        catch (\Exception $e){
            return redirect()->back()->with('error','we couldnt save supermarket currently, please try again later');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function show(Supermarket $supermarket,$supermarket_id)
    {
        //
        $supermarket = Supermarket::findorFail($supermarket_id);
        $managers = Manager::where('supermarket_id', $supermarket_id)->get();
        return view('kurasa_supermarket',compact('supermarket','managers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function edit(Supermarket $supermarket,$id)
    {
        //
        $supermarket = Supermarket::findorFail($id);
//        dd($supermarket);
        return view('update_supermarket',compact('supermarket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supermarket $supermarket,$id)
    {
        //
        $request->validate([
            'name' => 'required|max:255|unique:supermarkets,name,'.$id,
            'location' => 'required|max:255',
        ]);
        $supermarket = Supermarket::findOrFail($id);
        $supermarket->name = $request->get('name');
        $supermarket->location = $request->get('location');
//        dd($supermarket);
        try {
            $supermarket->save();
            //$supermarket->save();
            return redirect()->back()->with('success', ' Supermarket  Updated successfully');
        }
        catch (\Exception $e){
            return redirect()->back()->with('error','Error while adding supermarket');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supermarket $supermarket,$id)
    {
        //
        $supermarket = Supermarket::findorFail($id);
        $supermarket->delete();
        return redirect()->back()->with('success','Supermarket deleted successfully');

    }

}
