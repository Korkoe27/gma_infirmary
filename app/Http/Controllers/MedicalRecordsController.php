<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\medical_records;
use App\Models\personnel_info;

class MedicalRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cadets= personnel_info::all();
        return view('add-Cadet-Records',compact('cadets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        
        $medical_records = new medical_records();
           
        $medical_records -> service_number = $request -> input('service_number');
        $medical_records -> presenting_complaint = $request -> input('presenting_complaint');
        $medical_records -> history_presenting_complaint = $request -> input('history_presenting_complaint');
        $medical_records -> on_direct_questioning = $request -> input('on_direct_questioning');
        $medical_records -> past_medical_history = $request -> input('past_medical_history');
        $medical_records -> drug_history = $request -> input('drug_history');
        $medical_records -> family_history = $request -> input('family_history');
        $medical_records -> social_history = $request -> input('social_history');
        $medical_records -> on_examination = $request -> input('on_examination');
        $medical_records -> cardiovascular_system = $request -> input('cardiovascular_system');
        $medical_records -> respiratory_system = $request -> input('respiratory_system');
        $medical_records -> abdominal_system = $request -> input('abdominal_system');
        $medical_records -> central_nervous_system = $request -> input('central_nervous_system');
        $medical_records -> musculoskeletal_system = $request -> input('musculoskeletal_system');
        $medical_records -> diagnosis = $request -> input('diagnosis');
        $medical_records -> treatment = $request -> input('treatment');
        $medical_records -> referral = $request -> input('referral');
        $medical_records -> excuse_physical_training = $request -> input('excuse_physical_training');
        $medical_records -> excuse_duty = $request -> input('excuse_duty');
        $medical_records -> excuse_riffle_drill = $request -> input('excuse_riffle_drill');
        $medical_records -> excuse_boot = $request -> input('excuse_boot');
        $medical_records -> excuse_shaving = $request -> input('excuse_shaving');
        $medical_records -> summary = $request -> input('summary');

        
        $medical_records -> save();


        
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
