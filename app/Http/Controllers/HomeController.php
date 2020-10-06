<?php

namespace App\Http\Controllers;

use App\Models\Locations\District;
use App\Models\Locations\Province;
use App\Models\Locations\Regencie;
use App\Models\Locations\Village;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $province;
    public $regencie;
    public $district;
    public $village;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->province = Province::All()->count();
        $this->regencie = Regencie::All()->count();
        $this->district = District::All()->count();
        $this->village = Village::All()->count();
        return view('dashboard',[
            'province'=> $this->province,
            'regencie' => $this->regencie,
            'district' => $this->district,
            'village' => $this->village,
            ]);
    }
}
