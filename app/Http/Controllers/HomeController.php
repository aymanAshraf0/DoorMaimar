<?php

namespace App\Http\Controllers;

use App\Models\Admin\RealEstate2;
use App\Models\Admin\Slider;
use App\Models\User;
use App\Notifications\ChatNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliderimage=Slider::all();
        $realEstate2=RealEstate2::all();
        $realEstate2P = RealEstate2::paginate(10);
        return view('user.index',compact('sliderimage','realEstate2','realEstate2P'));
    
    }

    public function showDetails($id){
        $data=RealEstate2::find($id);
        return view('user.showDetails',compact('data'));
    }


}




