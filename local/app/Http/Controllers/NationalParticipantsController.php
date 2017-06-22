<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NationalParticipants;
use Illuminate\Support\Facades\Input;
class NationalParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $national_participants = NationalParticipants::all();
        return view('admin.national_participants')->with('national_participants',$national_participants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_national_participant');
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
        $national_participants = new NationalParticipants();
        $national_participants->name = $request->input('name');
        $national_participants->member_since = $request->input('member_since');
        $national_participants->email = $request->input('email');
        $national_participants->details = $request->input('details');

        $max = NationalParticipants::max('id');
        $max += 1;

        $imageName = $max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('n_participants',$imageName);
        $national_participants->image = $imageName;
        $national_participants->save();
        return Redirect()->route('national_participants.index');
        //
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
        $national_participants=NationalParticipants::findOrFail($id);
        return view('admin.edit_national_participant')->with('national_participants',$national_participants);
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
        $national_participants = NationalParticipants::findOrFail($id);
        $national_participants->name = $request->input('name');
        $national_participants->member_since = $request->input('member_since');
        $national_participants->email = $request->input('email');
        $national_participants->details = $request->input('details');

        $max = $national_participants->id;

        $imageName = $max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('n_participants',$imageName);
        $national_participants->image = $imageName;
        $national_participants->save();
        return Redirect()->route('national_participants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $national_participants = NationalParticipants::findOrFail($id);
        $national_participants->delete();
        return Redirect()->route('national_participants.index');
    }
}
