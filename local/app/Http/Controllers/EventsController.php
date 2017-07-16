<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
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
        $events->title_en = $request->input('title');
        $events->date_en = $request->input('date');
        $events->description_en = $request->input('description');
        
        $events->title_dr = $request->input('title_dr');
        $events->description_dr = $request->input('description_dr');
        $events->date_dr = $request->input('date_dr');
        $events->date_pa = $request->input('date_dr');
        $events->title_pa = $request->input('title_pa');
        $events->description_pa = $request->input('description_pa');
        $events->type = $request->input('type');
        
        $imageName = '';
        if($request->image == null){
            $imageName = 'default.png';
        }
        else{
        
        $max=Events::max('id');
        $max += 1;
        $imageName=$max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('uploads/events&seminars',$imageName);
            
        }
        
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
         $events->title_en = $request->input('title');
        $events->date_en = $request->input('date');
        $events->description_en = $request->input('description');
        
        $events->title_dr = $request->input('title_dr');
        $events->description_dr = $request->input('description_dr');
        $events->date_dr = $request->input('date_dr');
        $events->date_pa = $request->input('date_dr');
        $events->title_pa = $request->input('title_pa');
        $events->description_pa = $request->input('description_pa');
        
        $events->type = $request->input('type');
        
        $max=$events->id;
        $imageName = '';
        if($request->image ==null){
            $imageName = $events->image;
        }
        else{
            File::delete('../uploads//events&seminars/'.public_path().''.$events->image);
            $imageName=$max.'.'.$request->image->getClientOriginalExtension();
            $request->image->move('uploads/events&seminars',$imageName);
        }

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
        File::delete('../uploads//events&seminars/'.public_path().''.$events->image);
        $events->delete();
        return Redirect()->route('events.index');
    }
}
