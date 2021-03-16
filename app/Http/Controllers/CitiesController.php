<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CityRequest;


class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['cities']        = City::all();
        return view('city.city',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['states']            = State::arrayForSelect();
           $this->data['mode']           = 'Create';
        return view('city.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $request)
    {
       $formdata   = $request->all();

       if(City::create($formdata)) {
         Session::flash('message','City Added Successfully');
       }
       return redirect()->to('city');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['city']     = City::find($id);
        return view('city.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['states']         = State::arrayForSelect();
        $this->data['city']           = City::findOrFail($id);
        $this->data['mode']           = 'Edit';
        return view('city.create',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, $id)
    {
        $data                      = $request->all();
        
        $city                      = City::find($id);
        $city->city_name           = $data['city_name'];
        $city->pin_code            = $data['pin_code'];
        $city->district            = $data['district'];
        $city->state_id            = $data['state_id'];
       

        if( $city->save() ) {
            Session::flash('message', 'City Updated Successfully');
        }
        
        return redirect()->to('city');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(City::find($id)->delete() ){
        Session::flash('message','City Deleted Successfully');
       }

       return redirect()->to('city');
    }
}
