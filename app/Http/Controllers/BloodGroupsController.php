<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodGroup;

class BloodGroupsController extends Controller
{

   // public function __construct()
   //  {
   //      parent::__construct();
   //      $this->data['main_menu']    = 'all_blood';
   //      $this->data['sub_menu']     = 'add_blood';
   //  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $this->data['bloods'] = BloodGroup::all();

         return view('blood.blood',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formdata = $request->all();

        BloodGroup::create($formdata);

        return redirect()->to('blood');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['blood']       = BloodGroup::find($id);

        return view('blood.show',$this->data);
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
       if(BloodGroup::find($id)->delete() ) {
         Session::flash('message','B');
       }
    }
}
