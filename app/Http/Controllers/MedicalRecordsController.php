<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;
use App\Models\PersonnelInfo;

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
        $cadets= PersonnelInfo::all();
        return view('add-Cadet-Records',compact('cadets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'service_number' => 'required',
            'presenting_complaint' => 'required',
            'history_presenting_complaint' => 'required',
            'on_direct_questioning' => 'required',
            'past_medical_history' => 'required',
            'drug_history' => 'required',
            'family_history' => 'required',
            'social_history' => 'required',
            'on_examination' => 'required',
            'cardiovascular_system' => 'required',
            'respiratory_system' => 'required',
            'abdominal_system' => 'required',
            'central_nervous_system' => 'required',
            'musculoskeletal_system' => 'required',
            'diagnosis' => 'required',
            'treatment' => 'required',
            'referral' => 'required',
            'excuse_physical_training' => 'required',
            'excuse_duty' => 'required',
            'excuse_riffle_drill' => 'required',
            'excuse_boot' => 'required',
            'excuse_shaving' => 'required',
            'summary' => 'required'
        ]);

        $saveRecords = MedicalRecord::create($validatedData);
        

        
        return redirect(route('dashboard'));

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // //
        // $showMedRecords = medical_records::all();
        // return view('view-cadet-report',compact('showMedRecords'));

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
