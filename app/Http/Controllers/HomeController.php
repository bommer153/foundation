<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\candidate;
use App\Models\score;
use App\Models\round;
use App\Models\dualVer;
use App\Models\activerd;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('login');
    }

    public function indexI()
    {
        $round = round::get();
        $round = $round[0]->round;
        $start = candidate::orderBy('id')->where('active','=',$round)->first();
        return view('judge.home',[
            'start' => $start,
        ]);
    }
    public function indexJ($id)
    {
        $dual = dualVer::first();
        
        if($dual->dual == 2){
            return redirect()->route('home.judgeDual', ['no' => 1]);
        }
        
        $candidate = candidate::where('ordered',$id)->first();
        
        //dd($candidate);
           
        //dd($score);
        $activerd = activerd::first();
                //'next' => $next,
                //'prev' => $previous,
                //'candidateListM' => $candidateListM,
                //'candidateListF' => $candidateListF,
                //'score' => $score,     
                //'category'=>$category,           
                //'round' => $round,
        return view('judge.index',[
               
                'candidate'=>$candidate,              
                'activerd' => $activerd,
               
        ]);
    }


    public function dual($no)
    {

        $dual = dualVer::first();

        if($dual->dual == 1){
            return redirect()->route('home.judge', ['id' => 1]);
        }
        $candidate = candidate::where('no',$no)->get(); 
        $activerd = activerd::first();

                //'category'=>$category,
                //'candidate'=>$candidate,
                //'score' => $score,
                //'next' => $next,
                //'prev' => $previous,
                //'round' => $round,
                //'activerd' => $activerd,
        return view('judge.dual',[
                'candidate'=>$candidate,            
        ]);
    }
}
