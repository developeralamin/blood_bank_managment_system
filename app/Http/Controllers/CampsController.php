<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\Camp;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CampRequest;


class CampsController extends Controller
{
    //  public function __construct()
    // {
    //     parent::__construct();
    //     $this->data['main_menu']    = 'all_camp';
    //     $this->data['sub_menu']     = 'sub_camp';
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $this->data ['camps']    = Camp::all();

         return view('camp.camp',$this->data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
         $this->data['mode']            = 'Create';
        $this->data['state']            = State::arrayForSelect();
        $this->data['city']             = City::arrayForSelectCity();
        return view('camp.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampRequest $request)
    {
        $formdata         = $request->all();
        if(Camp::create($formdata) ){

            Session::flash('message','Camp Add Successfully');
        }

        return redirect()->to('camp');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $this->data['camp']   = Camp::find($id);

       return view('camp.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $this->data['mode']            = 'Edit';
        $this->data['state']            = State::arrayForSelect();
        $this->data['city']             = City::arrayForSelectCity();
        $this->data['camp']             = Camp::findOrFail($id);

        return view('camp.create',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CampRequest $request, $id)
    {
         $data                       = $request->all();

         $camp                       = Camp::find($id);

         $camp->camp_title           = $data['camp_title'];
         $camp->state_id             = $data['state_id'];
         $camp->city_id              = $data['city_id'];
         $camp->organized_by         = $data['organized_by'];
         $camp->details              = $data['details'];

         if($camp->save() ){
            Session::flash('message','Camp Update Successfully');
         }

         return redirect()->to('camp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if(Camp::find($id)->delete() ) {
            Session::flash('message','Camp Delete Successfully');
         }
         return redirect()->to('camp');
    }
}
