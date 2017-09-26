<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\Patient;
use App\Examination;
use Session;
use App\Patern;

class ExaminationController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new OP.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($patient_id) {
        $patient = Patient::find($patient_id);

        $patern = Patern::where('id', 1)->first();
        $patern2 = Patern::where('id', 2)->first();
        $patern3 = Patern::where('id', 3)->first();
        $patern4 = Patern::where('id', 4)->first();
        $patern5 = Patern::where('id', 5)->first();



        return view('examination.create')->withPatient($patient)->withPatern($patern)
                        ->withPatern2($patern2)->withPatern3($patern3)->withPatern4($patern4)
                        ->withPatern5($patern5);
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
            'ultrasonographic_finding' => 'sometimes',
            'speculators_finding' => 'sometimes',
            'gin_palp_finding' => 'sometimes',
            'diagnosis' => 'sometimes|max:255',
            'therapy' => 'sometimes|max:255'
        ));

        $user = Auth::id();

        // Type of exam ( OP, EUZ1 or EUZ2 )
        $exam_type = "OP";

        $patient = Patient::find($patient_id);

        // Store in the db
        $examination = new Examination;

        $examination->ultrasonographic_finding = $request->ultrasonographic_finding;
        $examination->speculators_finding = $request->speculators_finding;
        $examination->gin_palp_finding = $request->gin_palp_finding;
        $examination->diagnosis = $request->diagnosis;
        $examination->therapy = $request->therapy;
        $examination->Exam_type = $exam_type;
        $examination->patient()->associate($patient);
        $examination->user()->associate($user);

        $examination->save();

        Session::flash('success', 'Izveštaj uspešno sačuvan!');

        return redirect()->route('patient.show', $patient->id);
//        return redirect()->route('examination.show', $examination->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $examination = Examination::find($id);

        $patient = $examination->patient->id;

        return view('examination.show')->withExamination($examination);
    }

    public function showca1($id) {
        $examination = Examination::find($id);

        $patient = $examination->patient->id;

        return view('examination.showca1')->withExamination($examination);
    }

    public function showca2($id) {
        $examination = Examination::find($id);

        return view('examination.showca2')->withExamination($examination);
    }

    public function showold($id) {
        $examination = Examination::find($id);

        $user = Auth::id();
        $patient = $examination->patient->id;

        return view('examination.showold')->withExamination($examination)->withUser($user);
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
            'CRL' => 'sometimes|max:50',
            'BPD' => 'sometimes|max:50',
            'Hem' => 'sometimes|max:50',
            'OFD' => 'sometimes|max:50',
            'HC' => 'sometimes|max:50',
            'FL' => 'sometimes|max:50',
            'AC' => 'sometimes|max:50',
            'TM' => 'sometimes|max:50',
            'NT' => 'sometimes|max:50',
            'NB' => 'sometimes|max:50',
            'FMU' => 'sometimes|max:100',
            'PKDV' => 'sometimes|max:100',
            'TSR' => 'sometimes|max:100',
            'FHR' => 'sometimes|numeric',
            'AFI' => 'sometimes|max:100',
            'Ins_tro' => 'sometimes|max:100',
            'FD' => 'sometimes|max:100',
            'Viewed' => 'sometimes',
            'Freetext' => 'sometimes|max:255',
            'AK_PAL' => 'sometimes|max:255',
            'diagnosis' => 'sometimes|max:255',
            'therapy' => 'sometimes|max:255'
        ));

        $user = Auth::id();

        // Type of exam ( OP, EUZ1 or EUZ2 )
        $exam_type = "EUZ1";

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
        $examination->Viewed = $request->Viewed;
        $examination->Freetext = $request->Freetext;
        $examination->AK_PAL = $request->AK_PAL;
        $examination->diagnosis = $request->diagnosis;
        $examination->therapy = $request->therapy;
        $examination->Exam_type = $exam_type;
        $examination->patient()->associate($patient);
        $examination->user()->associate($user);

        $examination->save();

        Session::flash('success', 'Izveštaj uspešno sačuvan!');

        return redirect()->route('patient.show', $patient->id);
//        return redirect()->route('examination.showca1', $examination->id);
    }

    /**
     * Show the form for creating a new CA2.
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
            'BPD' => 'sometimes|max:50',
            'Hem' => 'sometimes|max:50',
            'OFD' => 'sometimes|max:50',
            'HC' => 'sometimes|max:50',
            'Va' => 'sometimes|max:50',
            'Vp' => 'sometimes|max:50',
            'IOD' => 'sometimes|max:50',
            'TCD' => 'sometimes|max:50',
            'CM' => 'sometimes|max:50',
            'NN' => 'sometimes|max:50',
            'NB' => 'sometimes|max:50',
            'HL' => 'sometimes|max:50',
            'FL' => 'sometimes|max:50',
            'AC' => 'sometimes|max:50',
            'TM' => 'sometimes|max:50',
            'FHR' => 'sometimes|numeric',
            'cerviks' => 'sometimes|max:50',
            'Ins_pos' => 'sometimes|max:255',
            'AFI' => 'sometimes|max:100',
            'Pupil' => 'sometimes|max:255',
            'Fo' => 'sometimes|numeric',
            'FD' => 'sometimes|max:100',
            'Viewed' => 'sometimes',
            'Freetext' => 'sometimes|max:255',
            'Ex_Fe_Ha' => 'sometimes|max:255',
            'Width_of_aorta' => 'sometimes|numeric',
            'Pul_tree' => 'sometimes|numeric',
            'AK_PAL' => 'sometimes|max:255',
            'diagnosis' => 'sometimes|max:255',
            'therapy' => 'sometimes|max:255'
        ));
        $user = Auth::id();

        // Type of exam ( OP, EUZ1 or EUZ2 )
        $exam_type = "EUZ2";

        $patient = Patient::find($patient_id);

        // Store in the db
        $examination = new Examination;

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
        $examination->Fo = $request->Fo;
        $examination->FD = $request->FD;
        $examination->Viewed = $request->Viewed;
        $examination->Freetext = $request->Freetext;
        $examination->Ex_Fe_Ha = $request->Ex_Fe_Ha;
        $examination->Width_of_aorta = $request->Width_of_aorta;
        $examination->Pul_tree = $request->Pul_tree;
        $examination->AK_PAL = $request->AK_PAL;
        $examination->diagnosis = $request->diagnosis;
        $examination->therapy = $request->therapy;
        $examination->Exam_type = $exam_type;
        $examination->patient()->associate($patient);
        $examination->user()->associate($user);

        $examination->save();

        Session::flash('success', 'Izveštaj uspešno sačuvan!');

        return redirect()->route('patient.show', $patient->id);
//        return redirect()->route('examination.showca2', $examination->id);
    }

}
