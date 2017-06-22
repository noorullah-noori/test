<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contacts;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.contacts')->with('contacts',$contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.create_contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts = new Contacts();
        $contacts->address = $request->input('address');
        $contacts->fb = $request->input('fb');
        $contacts->twitter = $request->input('twitter');
        $contacts->g_plus = $request->input('g_plus');
        $contacts->phone = $request->input('phone');
        $contacts->fax = $request->input('fax');

        $contacts->save();
        return Redirect()->route('contacts.index');
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
        $contacts = Contacts::findOrFail($id);
        return view('admin.edit_contact')->with('contacts',$contacts);    }

    /**     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $news = News::findOrFail($id);
        // $news->title = $request->input('title');
        // $news->created_date = $request->input('date');
        // $news->short_desc = $request->input('short_desc');
        // $news->description = $request->input('description');
        // $news->save();
        // return Redirect()->route('news.index');
        $contacts = Contacts::findOrFail($id);
        $contacts->address = $request->input('address');
        $contacts->fb = $request->input('fb');
        $contacts->twitter = $request->input('twitter');
        $contacts->g_plus = $request->input('g_plus');
        $contacts->phone = $request->input('phone');
        $contacts->fax = $request->input('fax');
        $contacts->save();
        return Redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts=Contacts::findOrFail($id);
        $contacts->delete();
        return Redirect()->route('contacts.index');
        //
    }
}
