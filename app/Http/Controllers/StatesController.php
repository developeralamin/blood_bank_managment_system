<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Http\Requests\StateRequest;
use Illuminate\Support\Facades\Session;

class StatesController extends Controller
{
    

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->data['main_menu']    = 'state';
    //     $this->data['sub_menu']     = 'state';
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['states']      = State::all(); 
        return view('state.state',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('state.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StateRequest $request)
    {
          $formdata     = $request->all();

         if(State::create($formdata)) {
            Session::flash('message','Sate Added Successfully');
         }
         return redirect()->to('state');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(State::find($id)->delete() ) {

        Session::flash('message','State Delete Successfully');

        }
        return redirect()->to('state');
    }
}
