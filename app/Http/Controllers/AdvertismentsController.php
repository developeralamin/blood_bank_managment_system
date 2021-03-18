<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisment;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AdvertismentRequest;


class AdvertismentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['advertisment'] = Advertisment::all();

        return view('advertisment.advertisment',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['mode']   = 'create';

        return view('advertisment.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertismentRequest $request)
    {
        $formdata = $request->all();

        if(Advertisment::create($formdata) ) {
            Session::flash('message','Advertisment Added Successfully');
        }

        return redirect()->to('advertisment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $this->data['advertisment'] = Advertisment::find($id);


         return view('advertisment.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['mode']        = 'Edit';

        $this->data['advertisment'] = Advertisment::findOrFail($id);

        return view('advertisment.create',$this->data);
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
        $data  = $request->all();


        $advertisment                    = Advertisment::find($id);

        $advertisment->advertisment_name  = $data['advertisment_name'];


        if($advertisment->save() ) {
            Session::flash('message','Advertisment Update Successfully');
        }

        return redirect()->to('advertisment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(Advertisment::find($id)->delete() ) {
            Session::flash('message','Advertisment Delete Successfully');
         }
         return redirect()->to('advertisment');
    }
}
