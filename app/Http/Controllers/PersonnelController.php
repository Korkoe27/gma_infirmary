<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\personnel_info;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cadets = personnel_info::all();
        return view('cadets',compact('cadets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('add-cadet');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = new personnel_info();


        $request->validate([

            'image_path' => "required|mimes:png,jpg"
            
        ]);


        $data -> service_number = $request -> input('service_number');
        $data -> rank = $request -> input('rank');
        $data -> surname = $request -> input('surname');
        $data -> first_name = $request -> input('first_name');
        $data -> other_name = $request -> input('other_name');
        $data -> gender = $request -> input('gender');
        $data -> date_of_birth = $request -> input('date_of_birth');
        $data -> platoon = $request -> input('platoon');
        $data -> company = $request -> input('company');
        $data -> intake = $request -> input('intake');
        $data -> image_path = $request -> input('image_path');


     
        $data -> save();


        return redirect(route('dashboard'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
