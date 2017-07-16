<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Messages;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages=Messages::all();
        return view('admin.messages')->with('messages',$messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $messages = new Messages();
        $messages->name = $request->input('name');
        $messages->email = $request->input('email');
        $messages->subject = $request->input('subject');
        $messages->message = $request->input('message');
        $messages->save();
        return Redirect()->route('contacts');
        /*
         $job = new JOB();
        $job->title = $request->input('title');
        $job->expiry_date = $request->input('expiry_date');
        $job->description = $request->input('description');
        $job->save();
        return Redirect()->route('jobs.index');


        */
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
        $messages = Messages::findOrFail($id);
        $messages->delete();
        return Redirect()->route('messages.index');
    }
}
