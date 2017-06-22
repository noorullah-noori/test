<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events;
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Events::all();
        return view('admin.events')->with('events',$events);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_event');

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
        $events = new Events();
        $events->title = $request->input('title');
        $events->description = $request->input('description');
        $events->type = $request->input('type');
        /*
        $max = News::max('id');
        $max +=1;
        $imageName = $max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('news', $imageName);
        $news->image = $imageName;
        $news->save();
        return Redirect()->route('news.index');

        */
        $max=Events::max('id');
        $max += 1;
        $imageName=$max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('events',$imageName);
        $events->image = $imageName;
        $events->save();
        return Redirect()->route('events.index');
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
        $events=Events::findOrFail($id);
        return view('admin.edit_event')->with('events',$events);
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
        $events=Events::findOrFail($id);
        $events->title = $request->input('title');
        $events->description = $request->input('description');
        $events->type = $request->input('type');
        
        $max=$events->id;
        $imageName=$max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('events&seminars',$imageName);
        $events->image = $imageName;
        $events->save();
        return Redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Events::findOrFail($id);
        $events->delete();
        return Redirect()->route('events.index');
    }
}
