<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Patient;
use App\Examination;
use Session;


class ExaminationController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($patient_id)
    {
        $patient=Patient::find($patient_id);
        return view('examination.create')->withPatient($patient);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$patient_id)
    {
        //validate the data
        $this->validate($request, array(
            'ultrasonographic_finding' => 'sometimes|max:255',
            'speculators_finding'      => 'sometimes|max:255',
            'gin_palp_finding'         => 'sometimes|max:255',
            'diagnosis'                => 'sometimes|max:255',
            'therapy'                  => 'sometimes|max:255',
            'note'                     => 'sometimes|max:255',
            ));
        
        // Type of exam ( OP, CA1 or CA2 )
        $exam_type="OP";
        
        $patient = Patient::find($patient_id);
        
        // Store in the dbid
        $examination = new Examination;
        
        $examination->ultrasonographic_finding = $request->ultrasonographic_finding;
        $examination->speculators_finding      = $request->speculators_finding;
        $examination->gin_palp_finding         = $request->gin_palp_finding;
        $examination->diagnosis                = $request->diagnosis;
        $examination->therapy                  = $request->therapy;
        $examination->note                     = $request->note;
        $examination->Exam_type                = $exam_type;
        $examination->patient()->associate($patient);
        
        $examination->save();
        
        Session::flash('success', 'Izveštaj uspešno sačuvan!');
        
        return redirect()->route('patient.show',$patient->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    
    public function createca1($patient_id)
    {
        $patient=Patient::find($patient_id);
        return view('examination.createca1')->withPatient($patient);
    }
    
    public function storeca1($patient_id)
    {
        $patient=Patient::find($patient_id);
        return view('examination.createca1')->withPatient($patient);
    }
    
    
        public function createca2($patient_id)
    {
        $patient=Patient::find($patient_id);
        return view('examination.createca2')->withPatient($patient);
    }
    
    public function storeca2($patient_id)
    {
        $patient=Patient::find($patient_id);
        return view('examination.createca2')->withPatient($patient);
    }
}
