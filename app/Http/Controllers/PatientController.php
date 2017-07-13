<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Patient;
use App\Examination;
use Session;
use Purifier;
use DB;


class PatientController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $patients = Patient::orderBy('id', 'desc')->paginate(10);

        return view('patient.index')->withPatients($patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //validate the data
        $this->validate($request, array(
            'name' => 'required|max:50',
            'date_of_birth' => 'required|max:25',
            'address' => 'required|max:50',
            'place' => 'required|max:30',
            'phone' => 'required|max:30',
            'profession' => 'required|max:50',
            'drug_susceptibility' => 'required|max:255',
            'personal_anament' => 'required|max:255',
            'family_anament' => 'required|max:255',
            'date_last_period' => 'required|max:25',
            'blood_type' => 'required|max:2',
            'rh' => 'required|max:2',
            'childbirth' => 'required|max:30|numeric',
            'abortion' => 'required|max:30|numeric'
        ));

        //store in the database slug
        $slug = str_slug(time() . '_' . $request->name);

        //store in the database
        $patient = new Patient;

        $patient->name                = $request->name;
        $patient->date_of_birth       = $request->date_of_birth;
        $patient->address             = $request->address;
        $patient->place               = $request->place;
        $patient->phone               = $request->phone;
        $patient->profession          = $request->profession;
        $patient->drug_susceptibility = $request->drug_susceptibility;
        $patient->personal_anament    = $request->personal_anament;
        $patient->family_anament      = $request->family_anament;
        $patient->date_last_period    = $request->date_last_period;
        $patient->blood_type          = $request->blood_type;
        $patient->rh                  = $request->rh;
        $patient->childbirth          = $request->childbirth;
        $patient->abortion            = $request->abortion;
        $patient->slug                = $slug;

        $patient->save();

        Session::flash('success', 'Podaci pacijenta uspešno sačuvani!');

        //redirect to patient/{id}
        return redirect()->route('patient.show', $patient->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $patient = Patient::find($id);
        return view('patient.show')->withPatient($patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $patient = Patient::find($id);

        return view('patient.edit')->withPatient($patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //validate
        $this->validate($request, array(
            'name' => 'required|max:50',
            'date_of_birth' => 'required|max:25',
            'address' => 'required|max:50',
            'place' => 'required|max:30',
            'phone' => 'required|max:30',
            'profession' => 'required|max:50',
            'drug_susceptibility' => 'required|max:255',
            'personal_anament' => 'required|max:255',
            'family_anament' => 'required|max:255',
            'date_last_period' => 'required|max:25',
            'blood_type' => 'required|max:2',
            'rh' => 'required|max:2',
            'childbirth' => 'required|max:30|numeric',
            'abortion' => 'required|max:30|numeric'
        ));
        
        
        
        //save
        $slug = str_slug(time() . '_' . $request->name);
        $patient = Patient::find($id);
        
        $patient->name = $request->name;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->address = $request->address;
        $patient->place = $request->place;
        $patient->phone = $request->phone;
        $patient->profession = $request->profession;
        $patient->drug_susceptibility = $request->drug_susceptibility;
        $patient->personal_anament = $request->personal_anament;
        $patient->family_anament = $request->family_anament;
        $patient->date_last_period = $request->date_last_period;
        $patient->blood_type = $request->blood_type;
        $patient->rh = $request->rh;
        $patient->childbirth = $request->childbirth;
        $patient->abortion = $request->abortion;
        $patient->slug = $slug;

        $patient->save();

        Session::flash('success', 'Podaci pacijenta uspešno izmenjeni!');
        
        return redirect()->route('patient.show', $patient->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $patient = Patient::find($id);        
        
        $patient->delete();

        Session::flash('success', 'Podaci pacijenta uspešno izbrisani!');
        return redirect()->route('patient.index');
    }

    public function search_name(Request $request) {
        //
        $search = $request->search_name;
//        $patient = Patient::
        $patients = DB::table('patients')->where('name', 'like', "%$search%")->get();
        return view('patient.index', compact('patients'));
    }

}
