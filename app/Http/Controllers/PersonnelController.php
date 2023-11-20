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
        // $c = PersonnelInfo::where('service_number', '522')->first();
        // dd($c->record);
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
     $upload = $request->file('cadet_image');

     $fileName = $request -> service_number . '-' . $request-> surname . '-' . $request->first_name . '.' . $upload->getClientOriginalExtension();

     $dir = public_path('images');

     $upload->move($dir, $fileName);

        $validateData = $request->validate([
            'service_number' => 'required',
            'rank' => 'required',
            'surname' => 'required',
            'first_name' => 'required',
            'other_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'platoon' => 'required',
            'company' => 'required',
            'intake' => 'required',
            'cadet_image' => 'required'
     ]);





    //  $photo = new PersonnelInfo();
    //     if($request->hasFile('cadet_image')){
    //         $file = $request->file('cadet_image');
    //             $ext = $file->getClientOriginalExtension();
    //             $filename = $request->service_number. '-' . $request->surname . '-' . $request->first_name . '.' . $ext;
    //             $file->move('images', $filename);
    //             $filename= $photo->cadet_image;
    //         $photo->save();
    //     }
        
   





        $saveCadet = PersonnelInfo::create($validateData);

        return redirect(route('patientRecords.index'));

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
