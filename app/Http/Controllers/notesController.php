<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use App\Models\class_matter;
use App\Models\student_class;
use Illuminate\Http\Request;
use App\Models\note;

class notesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('vstClassNotes.index');
    }
    public function info()
    {
        $clases = class_matter::all();
        $alumnos = alumno::all();
        return view('vstClassNotes.create', compact('clases', 'alumnos'));
    }
    public function class()
    {
        $clases = class_matter::all();
        return view('vstClassnotes.show', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        $clases = class_matter::all();
        $alumnos = alumno::all();
        return view('vstClassNotes.create', compact('clases', 'alumnos', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // request()->validate([
        //     'matters_id' => 'required',
        //     'IP' => 'required',
        //     'IIP' => 'required',
        //     'IIIP' => 'required',
        //     'IVP' => 'required'

        // ]);
        $students_id = request('students_id');
        $matters_id = request('matters_id');
        $IP = request("IP");
        $IIP = request("IIP");
        $IIIP = request("IIIP");
        $IVP = request("IVP");

        note::create([

            'matters_id' => $matters_id,
            'IP' => $IP,
            'IIP' => $IIP,
            'IIIP' => $IIIP,
            'IVP' => $IVP,
        ]);
        $maxValue = note::max('id');
        student_class::create([
            'students_id' => $students_id,
            'class_matters_id' => $matters_id,
            'notes_id' => $maxValue,
            'observations' => 1
        ]);

        return route('class-notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
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
        //
    }
}
