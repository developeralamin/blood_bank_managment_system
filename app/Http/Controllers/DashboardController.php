<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\BloodGroup;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->data['main_menu']    = 'Dashboard';
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $this->data['totalState']         = State::count('id');
        // $this->data['totalShaka']        = Shaka::count('id');
        // $this->data['totalCourse']       = Course::count('id');

        return view('dashboard', $this->data);
    }
}
