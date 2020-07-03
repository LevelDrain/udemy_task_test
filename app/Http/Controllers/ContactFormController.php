<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Eloquent ORマッパー
        //$contacts=ContactForm::all();
        //dd($contacts);

        //クエリビルダ
        $contacts=DB::table('contact_forms')
        ->select('id', 'your_name')
        ->get();

        dd($contacts);

        //書き出し先
        return view('contact.index', compact('contacts'));//$←コレ要らない
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new ContactForm;
        //DI $requestインスタンスが引数
        $contact->your_name=$request->input('your_name');
        $contact->title=$request->input('title');
        $contact->email=$request->input('email');
        $contact->url=$request->input('url');
        $contact->gender=$request->input('gender');
        $contact->age=$request->input('age');
        $contact->contact=$request->input('contact');

        $contact->save();
        return redirect('contact/index');

        //全て一括でとってくることもできる
        //$input=$request->all();
        //dd($your_name);
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
        //
    }
}
