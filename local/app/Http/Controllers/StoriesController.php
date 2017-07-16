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
        $stories->title_en = $request->input('title');
        $stories->description_en = $request->input('description');
        $stories->author_en = $request->input('author');
        $stories->date_en = $request->input('date');

        $stories->title_dr = $request->input('title_dr');
        $stories->description_dr = $request->input('description_dr');
        $stories->author_dr = $request->input('author_dr');
        $stories->date_dr = $request->input('date_dr');
        $stories->date_pa = $request->input('date_dr');
        $stories->title_pa = $request->input('title_pa');
        $stories->description_pa = $request->input('description_pa');
        $stories->author_pa = $request->input('author_pa');
        
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
        $stories->title_en = $request->input('title');
        $stories->description_en = $request->input('description');
        $stories->author_en = $request->input('author');
        $stories->date_en = $request->input('date');

        $stories->title_dr = $request->input('title_dr');
        $stories->description_dr = $request->input('description_dr');
        $stories->author_dr = $request->input('author_dr');
        $stories->date_dr = $request->input('date_dr');
        $stories->date_pa = $request->input('date_dr');
        $stories->title_pa = $request->input('title_pa');
        $stories->description_pa = $request->input('description_pa');
        $stories->author_pa = $request->input('author_pa');
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
