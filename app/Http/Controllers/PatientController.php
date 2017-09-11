<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\Patient;
use App\Examination;
use Session;
use Purifier;
use DB;
use TeamTNT\TNTSearch\TNTSearch;
use Config;
use App\Console\Commands;
use Artisan;

class PatientController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = Auth::id();
        $patients = Patient::where('user_id', '=',$user)->orderBy('id', 'desc')->paginate(15);
//        $patients = Patient::orderBy('id', 'desc')->paginate(10);
        

          
return view('patient.index')->withPatients($patients);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $user = Auth::id();
        return view('patient.create')->withUser($user);
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
            'date_of_birth' => 'sometimes|max:25',
            'address' => 'sometimes|max:50',
            'place' => 'sometimes|max:30',
            'phone' => 'sometimes|max:30',
            'profession' => 'sometimes|max:50',
            'drug_susceptibility' => 'sometimes|max:255',
            'personal_anament' => 'sometimes|max:255',
            'family_anament' => 'sometimes|max:255',
            'date_last_period' => 'sometimes|max:25',
            'blood_type' => 'sometimes|max:2',
            'rh' => 'sometimes|max:2',
            'childbirth' => 'sometimes|max:30|numeric',
            'abortion' => 'sometimes|max:30|numeric'
        ));

        $user = Auth::id();

        //store in the database
        $patient = new Patient;

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
        $patient->blood_type = strtoupper($request->blood_type);
        $patient->rh = $request->rh;
        $patient->childbirth = $request->childbirth;
        $patient->abortion = $request->abortion;
        $patient->user()->associate($user);

        $patient->save();

        Session::flash('success', 'Podaci pacijenta uspešno sačuvani!');

        // Calling artisan comand for updating search index of patients
        $tnt = new TNTSearch;

        $tnt->loadConfig([
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'biovita',
            'username' => 'root',
            'password' => 'milica',
            'storage' => storage_path(),
        ]);

        $tnt->selectIndex("patients.index");
        
        $index = $tnt->getIndex();
        
        $index->insert(['id' => $patient->id,
            'name'    => $patient->name, 
            'address' => $patient->address,
            'place'   => $patient->place,
            'phone'   => $patient->phone,
            ]);


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

        $patient->save();

        Session::flash('success', 'Podaci pacijenta uspešno izmenjeni!');
        
        // Calling artisan comand for updating search index of patients
 
        $tnt = new TNTSearch;

        $tnt->loadConfig([
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'biovita',
            'username' => 'root',
            'password' => 'milica',
            'storage' => storage_path(),
        ]);

        $tnt->selectIndex("patients.index");
        
        $index = $tnt->getIndex();
       $index->update($id, ['id' => $patient->id,
            'name'    => $patient->name, 
            'address' => $patient->address,
            'place'   => $patient->place,
            'phone'   => $patient->phone,
            ]);

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

        // Calling artisan comand for updating search index of patients 
        $tnt = new TNTSearch;
        $tnt->loadConfig([
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'biovita',
            'username' => 'root',
            'password' => 'milica',
            'storage' => storage_path(),
        ]);

        $tnt->selectIndex("patients.index");        
        $index = $tnt->getIndex();
        $index->delete($id);
        
        // Delite patient
        $patient->delete();

        Session::flash('success', 'Podaci pacijenta uspešno izbrisani!');
        
        return redirect()->route('patient.index');
    }

    public function search_name(Request $request) {




        $tnt = new TNTSearch;

        $tnt->loadConfig([
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'biovita',
            'username' => 'root',
            'password' => 'milica',
            'storage' => storage_path(),
        ]);

        $tnt->selectIndex("patients.index");

        $res = $tnt->searchBoolean($request->input('search_name'), 1000);
        $patients = Patient::whereIn('id', $res['ids'])->paginate(50);
        return view('patient.index', compact('patients'));
    }

}
