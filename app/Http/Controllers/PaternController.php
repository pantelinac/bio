<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Patern;
use Session;

class PaternController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $paterns = Patern::all();



        return view('patern.index')->withPaterns($paterns);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $patern = Patern::find($id);

        return view('patern.edit')->withPatern($patern);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, array(
            'ultrasonographic_finding' => 'sometimes|max:255',
            'speculators_finding' => 'sometimes|max:255',
            'gin_palp_finding' => 'sometimes|max:255',
            'diagnosis' => 'sometimes|max:255',
            'therapy' => 'sometimes|max:255',
        ));

        //store in the database
        $patern = Patern::find($id);

        $patern->ultrasonographic_finding = $request->ultrasonographic_finding;
        $patern->speculators_finding = $request->speculators_finding;
        $patern->gin_palp_finding = $request->gin_palp_finding;
        $patern->diagnosis = $request->diagnosis;
        $patern->therapy = $request->therapy;

        $patern->save();

        Session::flash('success', 'Podaci uspešno sačuvani!');

        return redirect()->route('patern.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
