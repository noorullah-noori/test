<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
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
        $resources->title_en = $request->input('title');
        $resources->description_en = $request->input('description');
        $resources->title_dr = $request->input('title_dr');
        $resources->description_dr = $request->input('description_dr');
        $resources->title_pa = $request->input('title_pa');
        $resources->description_pa = $request->input('description_pa');
        $resources->date_dr = $request->input('date');
        $resources->date_dr = $request->input('date_dr');
        $resources->date_pa = $request->input('date_dr');
        $resources->type=$request->input('type');
        $resources->date_en=$request->input('date');
        $resources->date_dr=$request->input('date_dr');

        $max = Resources::max('id');
        $max+=1;
        $pdfName = $max.'.'.$request->file('pdf')->getClientOriginalExtension();

        $request->file('pdf')->move('reports_en',$pdfName);

        $pdfName_dr = $max.'.'.$request->file('pdf_dr')->getClientOriginalExtension();
        $request->file('pdf_dr')->move('reports_dr',$pdfName_dr);

        $pdfName_pa = $max.'.'.$request->file('pdf_pa')->getClientOriginalExtension();
        $request->file('pdf_pa')->move('reports_pa',$pdfName_pa);
        
        
        $resources->pdf_en = $pdfName;
        $resources->pdf_dr = $pdfName_dr;
        $resources->pdf_pa = $pdfName_pa;
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
        $resources->title_en = $request->input('title');
        $resources->description_en = $request->input('description');
        $resources->title_dr = $request->input('title_dr');
        $resources->description_dr = $request->input('description_dr');
        $resources->title_pa = $request->input('title_pa');
        $resources->description_pa = $request->input('description_pa');
        $resources->date_dr = $request->input('date');
        $resources->date_dr = $request->input('date_dr');
        $resources->date_pa = $request->input('date_dr');
        $resources->type=$request->input('type');
        $resources->date_en=$request->input('date');
        $resources->date_dr=$request->input('date_dr');

        $max = Resources::max('id');
        
         $pdfName = '';
         $pdfName_dr = '';
         $pdfName_pa = '';

        if($request->file('pdf') ==null){
            $pdfName = $resources->pdf;
        }
        else{
            File::delete('../reports_en/'.public_path().''.$resources->pdf_en);
            $pdfName = $max.'.'.$request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->move('reports_en',$pdfName);
        }
        if($request->file('pdf_dr') ==null){
                $pdfName_dr = $resources->pdf_dr;
        }
        else{
            File::delete('../reports_dr/'.public_path().''.$resources->pdf_dr);
            $pdfName_dr = $max.'.'.$request->file('pdf_dr')->getClientOriginalExtension();
            $request->file('pdf_dr')->move('reports_dr',$pdfName_dr);
        }
        if($request->file('pdf_pa') ==null){
            $pdfName_pa = $resources->pdf_pa;
        }
        else{
            File::delete('../reports_pa/'.public_path().''.$resources->pdf_pa);
            $pdfName_pa = $max.'.'.$request->file('pdf_pa')->getClientOriginalExtension();
            $request->file('pdf_pa')->move('reports_pa',$pdfName_pa);
        }
        
        $resources->pdf_en = $pdfName;
        $resources->pdf_dr = $pdfName_dr;
        $resources->pdf_pa = $pdfName_pa;
        $resources->save();
        return Redirect()->route('resources.index');
        /*
        *$max = $news->id;
        $imageName = $max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('news', $imageName);
        $news->image = $imageName;
        $news->save();
        return Redirect()->route('news.index');
        */
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
        File::delete('../reports_en/'.public_path().''.$resources->pdf_en);
        File::delete('../reports_dr/'.public_path().''.$resources->pdf_dr);
        File::delete('../reports_pa/'.public_path().''.$resources->pdf_pa);
        $resources->delete();
        return Redirect()->route('resources.index');
        //
    }
}
