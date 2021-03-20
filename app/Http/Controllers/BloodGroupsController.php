<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodGroup;
use App\Http\Requests\BloodGroupRequest;


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
         $this->data['mode']           ='create';
        return view('blood.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BloodGroupRequest $request)
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
        $this->data['mode']           ='Edit';
        $this->data['blood']          = BloodGroup::findOrFail($id);

        return view('blood.create',$this->data);
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
         $data                        = $request->all();

         $blood                       = BloodGroup::find($id);


         $blood->blood_name           = $data['blood_name'];
         $blood->give_blood           = $data['give_blood'];
         $blood->receive_blood        = $data['receive_blood'];

         $blood->save();

         return redirect()->to('blood');
    }

}
