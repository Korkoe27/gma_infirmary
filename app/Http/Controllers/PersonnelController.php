<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PersonnelInfo;
use App\Models\MedicalRecord;
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
        $cadets = PersonnelInfo::latest()->paginate(50);
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

        $data = new PersonnelInfo();

        if($request->hasFile('cadet_image')){
            $file = $request->file('cadet_image');
                $ext = $file->getClientOriginalExtension();
                $filename = $request->service_number. '-' . $request->surname . '-' . $request->first_name . '.' . $ext;
                $file->move('images', $filename);
                $data->cadet_image = $filename;

        }
        

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
     
        $data -> save();


        return redirect(route('dashboard'));

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $showCadet = PersonnelInfo::with('record')->where('service_number', $id)->first();
        return view('view-cadet-report',compact('showCadet'));
        // return dd($id);
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
