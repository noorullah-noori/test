<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stories;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Stories::all();
        return view('admin.stories')->with('stories',$stories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_stories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stories = new Stories();
        $stories->title = $request->input('title');
        $stories->description = $request->input('description');
        $stories->author = $request->input('author');
        $stories->date = $request->input('date');
        $stories->save();

        return Redirect()->route('stories.index');
        
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
        $stories = Stories::findOrFail($id);
        return view('admin.edit_stories')->with('stories',$stories);
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
        $stories=Stories::findOrFail($id);
        $stories->title = $request->input('title');
        $stories->description = $request->input('description');
        $stories->author = $request->input('author');
        $stories->date = $request->input('date');
        $stories->save();
        return Redirect()->route('stories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stories = Stories::findOrFail($id);
        $stories->delete();
        return Redirect()->route('stories.index');
        //
    }
}
