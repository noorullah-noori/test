<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Meetings;
use App\Agendas;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings=Meetings::all();
        return view('admin.meetings')->with('meetings',$meetings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agendas = Agendas::all();
        return view('admin.create_meeting')->with('agendas',$agendas);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meetings= new Meetings();
        $meetings->time = $request->input('time');
        $meetings->date_en = $request->input('date');
        $meetings->meeting_title_en = $request->input('meeting_title');

        $meetings->date_dr = $request->input('date_dr');
        $meetings->date_pa = $request->input('date_dr');
        $meetings->meeting_title_dr = $request->input('meeting_title_dr');

        $meetings->meeting_title_pa = $request->input('meeting_title_pa');

        $meetings->agenda = $request->input('agenda');
        
        $meetings->type = $request->input('type');
        $meetings->save();
        return Redirect()->route('meetings.index');
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
        $meetings = Meetings::findorFail($id);
        $agendas = Agendas::all();
        return view('admin.edit_meeting')->with(['meetings'=>$meetings,'agendas'=>$agendas]);

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
        $meetings=Meetings::findOrFail($id);
        $meetings->time = $request->input('time');
        $meetings->date_en = $request->input('date');
        $meetings->meeting_title_en = $request->input('meeting_title');

        $meetings->date_dr = $request->input('date_dr');
        $meetings->date_pa = $request->input('date_dr');
        $meetings->meeting_title_dr = $request->input('meeting_title_dr');

        $meetings->meeting_title_pa = $request->input('meeting_title_pa');

        $meetings->agenda = $request->input('agenda');
        $meetings->type = $request->input('type');
        $meetings->save();
        return Redirect()->route('meetings.index');
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
        $meetings = Meetings::findorFail($id);
        $meetings->delete();
        return Redirect()->route('meetings.index');
    }
}
