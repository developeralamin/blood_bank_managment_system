<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\NewsRequest;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $this->data['news']  = News::all();

         return view('news.news',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['mode']  = 'create';
        return view('news.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $formdata  = $request->all();

        if(News::create($formdata) ) {
            Session::flash('message','News Added Successfully');
        }

        return redirect()->to('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['news']  = News::find($id);

        return view('news.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $this->data['mode']  = 'Edit';
         $this->data['news']  = News::findOrFail($id);
         return view('news.create',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
         $data              = $request->all();


         $news              = News::find($id);

         $news->news_title  = $data['news_title'];
         $news->details     = $data['details'];

         if($news->save() ) {
            Session::flash('message','Update News');
         }

         return redirect()->to('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if(News::find($id)->delete() ) {
            Session::flash('message','News Delete Successfully');
         }
         return redirect()->to('news');
    }
}
