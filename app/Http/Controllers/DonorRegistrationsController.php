<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\BloodGroup;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DonorRequest;
use App\Http\Requests\UpdateDonorRequest;


class DonorRegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $this->data['donors']   = Donor::all();

         return view('donor.donor',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['mode']            ='Create';
        $this->data['blood_group']     = BloodGroup::arrayForSelectBlood();

        return view('donor.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonorRequest $request)
    {
         $formdata  = $request->all();

         if(Donor::create($formdata) ) {
            Session::flash('message','Donor Registration Successfully');
         }
         return redirect()->to('donor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['donor'] = Donor::find($id);

        return view('donor.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $this->data['mode']            ='Edit';
         $this->data['donor']           = Donor::findOrFail($id);
         $this->data['blood_group']     = BloodGroup::arrayForSelectBlood();

         return view('donor.create',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonorRequest $request, $id)
    {
          $data                            = $request->all();


          $donor                           = Donor::find($id);

          $donor->name                     =$data['name'];
          $donor->gender                   =$data['gender'];
          $donor->age                      =$data['age'];
          $donor->phone                    =$data['phone'];
          $donor->email                    =$data['email'];
          $donor->blood_group_id           =$data['blood_group_id'];

          if($donor->save() ) {
            Session::flash('message','Donor Update Successfully');
          }
          return redirect()->to('donor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Donor::find($id)->delete() ) {
            Session::flash('message','Donor Delete Successfully');
         }
         return redirect()->to('donor');
    }
}
