<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use File;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        
        $news->title_en = $request->input('title');
        $news->created_date_en = $request->input('date');
        $news->short_desc_en = $request->input('short_desc');
        $news->description_en = $request->input('description');

        $news->title_dr = $request->input('title_dr');
        $news->created_date_dr = substr($request->input('date_dr'),0,10);
        $news->created_date_pa = substr($request->input('date_dr'),0,10);
        $news->short_desc_dr = substr($request->input('short_desc_dr'),0,150)."...";
        print_r($request->input('short_desc_dr'));exit;

        $news->description_dr = $request->input('description_dr');
        
        $news->title_pa = $request->input('title_pa');
        $news->short_desc_pa = $request->input('short_desc_pa');
        $news->description_pa = $request->input('description_pa');

        $imageName = '';
        if($request->image == null){
            $imageName = 'default.png';
        }
        else{
        
        $max = News::max('id');
        $max +=1;
        $imageName = $max.'.'.$request->image->getClientOriginalExtension();
        $request->image->move('uploads/news_img', $imageName);
        
        }
        
        $news->image = $imageName;
        $news->save();
        return Redirect()->route('news.index');
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
        $news = News::findOrFail($id);
        return view('admin.edit_news')->with('news',$news);
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
       $news = News::findOrFail($id);
        $news->title_en = $request->input('title');
        $news->created_date_en = $request->input('date');
        $news->short_desc_en = $request->input('short_desc');
        $news->description_en = $request->input('description');

        $news->title_dr = $request->input('title_dr');
        $news->created_date_dr = $request->input('date_dr');
        $news->short_desc_dr = substr($request->input('short_desc_dr'),0,300);
        $news->description_dr = $request->input('description_dr');
        $news->created_date_pa = $request->input('date_dr');
        $news->title_pa = $request->input('title_pa');
        $news->short_desc_pa = substr($request->input('short_desc_pa'),0,300);
        $news->description_pa = $request->input('description_pa');
        print_r($news->short_desc_dr);exit;

        $max = $news->id;
        $imageName = '';
        if($request->image ==null){
            $imageName = $news->image;
        }
        else{
             $imageName = $max.'.'.$request->image->getClientOriginalExtension();
             $request->image->move('uploads/news', $imageName);
        }
        
        $news->image = $imageName;
        $news->save();
        return Redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        File::delete('../uploads//news/'.public_path().''.$news->image);
        $news->delete();
        return Redirect()->route('news.index');
    }
}
