<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Patient;
use App\Examination;
use Session;

class ExaminationController extends Controller {

    /**
     * Show the form for creating a new OP.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($patient_id) {
        $patient = Patient::find($patient_id);
        return view('examination.create')->withPatient($patient);
    }

    /**
     * Store a newly created OP in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $patient_id) {
        //validate the data
        $this->validate($request, array(
            'ultrasonographic_finding' => 'sometimes|max:255',
            'speculators_finding' => 'sometimes|max:255',
            'gin_palp_finding' => 'sometimes|max:255',
            'diagnosis' => 'sometimes|max:255',
            'therapy' => 'sometimes|max:255',
            'note' => 'sometimes|max:255',
        ));

        // Type of exam ( OP, CA1 or CA2 )
        $exam_type = "OP";

        $patient = Patient::find($patient_id);

        // Store in the db
        $examination = new Examination;

        $examination->ultrasonographic_finding = $request->ultrasonographic_finding;
        $examination->speculators_finding = $request->speculators_finding;
        $examination->gin_palp_finding = $request->gin_palp_finding;
        $examination->diagnosis = $request->diagnosis;
        $examination->therapy = $request->therapy;
        $examination->note = $request->note;
        $examination->Exam_type = $exam_type;
        $examination->patient()->associate($patient);

        $examination->save();

        Session::flash('success', 'Izveštaj uspešno sačuvan!');

        return redirect()->route('patient.show', $patient->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $examination = Examination::find($id);
            
        $patient= $examination->patient->id;
        
        return view('examination.show')->withExamination($examination);
        

        
//        return redirect()->route('patient.show', $patient_id);
    }
    
    public function showca1($id) {
        $examination = Examination::find($id);
            
        $patient= $examination->patient->id;
        
        return view('examination.showca1')->withExamination($examination);

    }
    
    public function showca2($id) {
        $examination = Examination::find($id);                    
        
        return view('examination.showca2')->withExamination($examination);
           

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $examination = Examination::find($id);      
        $patient_id = $examination->patient->id;
        
        $examination->delete();
        

        Session::flash('success', 'Podaci pregleda uspešno izbrisani!');
        return redirect()->route('patient.show', $patient_id);
    }

    /**
     * Show the form for creating a new CA1.
     *
     * @return \Illuminate\Http\Response
     */
    public function createca1($patient_id) {
        $patient = Patient::find($patient_id);
        return view('examination.createca1')->withPatient($patient);
    }

    /**
     * Store a newly created CA1 in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeca1(Request $request, $patient_id) {
        $this->validate($request, array(
            'CRL' => 'sometimes|numeric',
            'BPD' => 'sometimes|numeric',
            'Hem' => 'sometimes|numeric',
            'OFD' => 'sometimes|numeric',
            'HC' => 'sometimes|numeric',
            'FL' => 'sometimes|numeric',
            'AC' => 'sometimes|numeric',
            'TM' => 'sometimes|numeric',
            'NT' => 'sometimes|numeric',
            'NB' => 'sometimes|numeric',
            'FMU' => 'sometimes|numeric',
            'PKDV' => 'sometimes|max:255',
            'TSR' => 'sometimes|max:100',
            'FHR' => 'sometimes|numeric',
            'AFI' => 'sometimes|numeric',
            'Ins_tro' => 'sometimes|max:255',
            'FD' => 'sometimes|max:255',
            'AK_PAL' => 'sometimes|max:100',
            'diagnosis' => 'sometimes|max:255',
            'therapy' => 'sometimes|max:255',
            'note' => 'sometimes|max:255'
        ));

        // Type of exam ( OP, CA1 or CA2 )
        $exam_type = "CA1";

        $patient = Patient::find($patient_id);

        // Store in the db
        $examination = new Examination;

        $examination->CRL = $request->CRL;
        $examination->BPD = $request->BPD;
        $examination->Hem = $request->Hem;
        $examination->OFD = $request->OFD;
        $examination->HC = $request->HC;
        $examination->FL = $request->FL;
        $examination->AC = $request->AC;
        $examination->TM = $request->TM;
        $examination->NT = $request->NT;
        $examination->NB = $request->NB;
        $examination->FMU = $request->FMU;
        $examination->PKDV = $request->PKDV;
        $examination->TSR = $request->TSR;
        $examination->FHR = $request->FHR;
        $examination->AFI = $request->AFI;
        $examination->Ins_tro = $request->Ins_tro;
        $examination->FD = $request->FD;
        $examination->AK_PAL = $request->AK_PAL;
        $examination->diagnosis = $request->diagnosis;
        $examination->therapy = $request->therapy;
        $examination->note = $request->note;
        $examination->Exam_type = $exam_type;
        $examination->patient()->associate($patient);

        $examination->save();

        Session::flash('success', 'Izveštaj uspešno sačuvan!');

        return redirect()->route('patient.show', $patient->id);
    }

    /**
     * Show the form for creating a new CA1.
     *
     * @return \Illuminate\Http\Response
     */
    public function createca2($patient_id) {
        $patient = Patient::find($patient_id);
        return view('examination.createca2')->withPatient($patient);
    }

    /**
     * Store a newly created CA2 in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeca2(Request $request, $patient_id) {

        $this->validate($request, array(
            'Biometry' => 'sometimes|numeric',
            'BPD' => 'sometimes|numeric',
            'Hem' => 'sometimes|numeric',
            'OFD' => 'sometimes|numeric',
            'HC' => 'sometimes|numeric',
            'Va' => 'sometimes|numeric',
            'Vp' => 'sometimes|numeric',
            'IOD' => 'sometimes|numeric',
            'TCD' => 'sometimes|numeric',
            'CM' => 'sometimes|numeric',
            'NN' => 'sometimes|numeric',
            'NB' => 'sometimes|numeric',
            'HL' => 'sometimes|numeric',
            'FL' => 'sometimes|numeric',
            'AC' => 'sometimes|numeric',
            'TM' => 'sometimes|numeric',
            'FHR' => 'sometimes|numeric',
            'cerviks' => 'sometimes|numeric',
            'Ins_pos' => 'sometimes|max:255',
            'AFI' => 'sometimes|numeric',
            'Pupil' => 'sometimes|max:255',
            'FD' => 'sometimes|max:255',
            'Ex_Fe_Ha' => 'sometimes|max:255',
            'Width_of_aorta' => 'sometimes|numeric',
            'Pul_tree' => 'sometimes|numeric',
            'AK_PAL' => 'sometimes|max:100',
            'diagnosis' => 'sometimes|max:255',
            'therapy' => 'sometimes|max:255',
            'note' => 'sometimes|max:255'
        ));

        // Type of exam ( OP, CA1 or CA2 )
        $exam_type = "CA2";

        $patient = Patient::find($patient_id);

        // Store in the db
        $examination = new Examination;

        $examination->Biometry = $request->Biometry;
        $examination->BPD = $request->BPD;
        $examination->Hem = $request->Hem;
        $examination->OFD = $request->OFD;
        $examination->HC = $request->HC;
        $examination->Va = $request->Va;
        $examination->Vp = $request->Vp;
        $examination->IOD = $request->IOD;
        $examination->TCD = $request->TCD;
        $examination->CM = $request->CM;
        $examination->NN = $request->NN;
        $examination->NB = $request->NB;
        $examination->HL = $request->HL;
        $examination->FL = $request->FL;
        $examination->AC = $request->AC;
        $examination->TM = $request->TM;
        $examination->FHR = $request->FHR;
        $examination->cerviks = $request->cerviks;
        $examination->Ins_pos = $request->Ins_pos;
        $examination->AFI = $request->AFI;
        $examination->Pupil = $request->Pupil;
        $examination->FD = $request->FD;
        $examination->Ex_Fe_Ha = $request->Ex_Fe_Ha;
        $examination->Width_of_aorta = $request->Width_of_aorta;
        $examination->Pul_tree = $request->Pul_tree;
        $examination->AK_PAL = $request->AK_PAL;
        $examination->diagnosis = $request->diagnosis;
        $examination->therapy = $request->therapy;
        $examination->note = $request->note;
        $examination->Exam_type = $exam_type;
        $examination->patient()->associate($patient);

        $examination->save();
        
        Session::flash('success', 'Izveštaj uspešno sačuvan!');

        return redirect()->route('patient.show', $patient->id);
    }

}
