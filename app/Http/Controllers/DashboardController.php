<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\Camp;
use App\Models\Donor;
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
        
         $this->data['totalDonor']          = Donor::count('id');
         $this->data['totalState']          = State::count('id');
         $this->data['totalBlood']          = BloodGroup::count('id');
         $this->data['totalCamp']           = Camp::count('id');
         $this->data['totalCity']           = City::count('id');
        
        return view('dashboard', $this->data);
    }
}
