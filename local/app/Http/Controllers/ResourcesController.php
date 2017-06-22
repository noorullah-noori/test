<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resources;
use Illuminate\Support\Facades\Input;
class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources=Resources::all();
        return view('admin.resources')->with('resources',$resources);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_resource');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resources = new Resources();
        $resources->title = $request->input('title');
        $resources->description = $request->input('description');

        $max = $resources->id;
        $pdfName = $max.'.'.Input::file('pdf')->getClientOriginalExtension();
        Input::file('pdf')->move('reports',$pdfName);
        $resources->pdf = $pdfName;
        $resources->save();
        return Redirect()->route('resources.index');
        /*

        $max = News::max('id');
        $max +=1;
        $imageName = $max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('news', $imageName);
        $news->image = $imageName;
        $news->save();
        return Redirect()->route('news.index');

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
        $resources = Resources::findOrFail($id);
        return view('admin.edit_resources')->with('resources',$resources);
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
        $resources=Resources::findOrFail($id);
        $resources->title = $request->input('title');
        $resources->description = $request->input('description');
        $resources->pdf = $request->input('pdf');
        $resources->type = $request->input('type');
        $resources->save();
        return Redirect()->route('resources.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resources = Resources::findOrFail($id);
        $resources->delete();
        return Redirect()->route('resources.index');
        //
    }
}
