<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agendas;

class AgendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agendas::all();
        return view('admin.agendas')->with('agendas',$agendas);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_agenda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agendas = new Agendas();
        $agendas->time = $request->input('time');
        $agendas->date_en = $request->input('date');
        $agendas->agenda_en = $request->input('agenda');

        $agendas->date_dr = $request->input('date_dr');
        $agendas->date_pa = $request->input('date_dr');
        $agendas->agenda_dr = $request->input('agenda_dr');

        $agendas->agenda_pa = $request->input('agenda_pa');

        $agendas->save();
        return Redirect()->route('agendas.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agendas = Agendas::findOrFail($id);
        return view('admin.edit_agenda')->with('agendas',$agendas);
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
        $agendas=Agendas::findOrFail($id);
         $agendas->time = $request->input('time');
        $agendas->date_en = $request->input('date');
        $agendas->agenda_en = $request->input('agenda');

        $agendas->date_dr = $request->input('date_dr');
        $agendas->agenda_dr = $request->input('agenda_dr');

        $agendas->agenda_pa = $request->input('agenda_pa');
        $agendas->date_pa = $request->input('date_dr');
        $agendas->save();
        return Redirect()->route('agendas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agendas = Agendas::findOrFail($id);
        $agendas->delete();
        return Redirect()->route('agendas.index');
    }
}
