<?php

namespace App\Http\Controllers;

use App\Models\score;
use App\Models\candidate;
use App\Models\user;
use App\Models\category;
use App\Models\round;
use App\Models\dualVer;
use App\Models\activerd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function score(Request $request,$id)
    {
        if($request->ajax()){
            $category = $request->get('category');
            $score = $request->get('score');
            $judge = auth::user()->id;
            
            if($score == 0){
                $score = 1;
            }
            
            score::insert([
                'score' => $score,
                'category' => $category,
                'judge' => $judge,
                'candidate' => $id,
            ]);

            $data = "Hello";

            echo json_encode($data);
        }
    }

    public function r1()
    {      
        candidate::where('active','!=','1')->update(array('active' => '1'));
        round::where('id','=','1')->update(['round' => '1']);
        return redirect('/home');
    }

    
    public function r2()
    {       

        $judgeCount = user::where('role','=','1')->count();
        
        $scoreM = candidate::where("gender",'=','Mr')->with('score')->whereHas('score',function ($query){
            $query->whereBetween('category',['1','4']);
        })->get();

        $scoreF = candidate::where("gender",'=','Ms')->with('score')->whereHas('score',function ($query){
            $query->whereBetween('category',['1','4']);
        })->get();

        $i = 0;
      
       $maleTotal = array();
       $femaleTotal = array();
       foreach($scoreM as $can){
            //$tlmscore = score::where('category','=','5')->where('candidate','=',$can->id)->get();           
            $sscore = 0;
            foreach($can->score as $scoretm){               
                $sscore = $sscore + $scoretm->score;                           
            }   
            
            
            
            $ovmscore = ($sscore/$judgeCount);
           
            array_push($maleTotal,array(['score' => $ovmscore, 'candidate'=> $can->id]));
            rsort($maleTotal); 
        }
       
        
        //dd($maleTotal);

        foreach($scoreF as $canf){
            $tlfscore = score::where('category','=','5')->where('candidate','=',$canf->id)->get();           
            $ssfcore = 0;
            foreach($canf->score as $scoretf){               
                $ssfcore = $ssfcore + $scoretf->score;                           
            }   
            
            if(empty($tlfscore[0]->score)){
                $tlfscorez = 0;
            }else{
                $tlfscorez = $tlfscore[0]->score;
            }
            
            $ovfscore = ($ssfcore/$judgeCount) + $tlfscorez;

            array_push($femaleTotal,array(['score' => $ovfscore, 'candidate'=> $canf->id]));
            rsort($femaleTotal); 
        }
    
       
        for($x=0;$x<5;$x++){
            candidate::where('id','=',$maleTotal[$x][0]['candidate'])->update(['active' => '2']);
        }

        //dd($femaleTotal);

        for($xx=0;$xx<5;$xx++){
            
            candidate::where('id','=',$femaleTotal[$xx][0]['candidate'])->update(['active' => '2']);
        }

        round::where('id','=','1')->update(['round' => '2']);        
        return redirect('/home');
        
       
    }

    public function dualChange(Request $request)
    {   
       dualVer::where('id',1)->update([
            'dual' => $request->dual
       ]);
       return redirect('/home');
    }

    public function catChange(Request $request)
    {   

        category::where('status','1')->update([
            'status' =>'0'
        ]);

        if($request->category != '0'){
            category::where('id',$request->category)->update([
                'status' => '1'
            ]);
        }else{

        }
       

      
       return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */

    public function scoreRank()
    {
        $candidateM = candidate::where('gender','=','Mr')->get();    
        $candidateF = candidate::where('gender','=','Ms')->get();       

        $candidateLM = candidate::where('gender','=','Mr')->where('active','=','2')->get();    
        $candidateLF = candidate::where('gender','=','Ms')->where('active','=','2')->get();   

        $judgeCount = user::where('role','=','1')->count();
        $score1ms = array(); 
        $score1fs = array(); 

        $score2ms = array(); 
        $score2fs = array(); 

        $score3ms = array(); 
        $score3fs = array(); 
        
        $score4ms = array(); 
        $score4fs = array(); 

        $score5ms = array(); 
        $score5fs = array(); 

        $scorerms = array(); 
        $scorerfs = array(); 

        $scorelms = array(); 
        $scorelfs = array(); 


        foreach($candidateM as $can){
            $score1M = score::where('candidate','=',$can->id)->where('category','=','1')->sum('score');
            array_push($score1ms, $score1M);

            $score2M = score::where('candidate','=',$can->id)->where('category','=','2')->sum('score');
            array_push($score2ms, $score2M);

            $score3M = score::where('candidate','=',$can->id)->where('category','=','3')->sum('score');
            array_push($score3ms, $score3M);
            
            $score4M = score::where('candidate','=',$can->id)->where('category','=','4')->sum('score');
            array_push($score4ms, $score4M);

            $score5M = score::where('candidate','=',$can->id)->where('category','=','5')->sum('score');
            array_push($score5ms, $score5M);

            $scoreRM =  score::where('candidate','=',$can->id)->whereBetween('category',['1','5'])->sum('score');

            $roundoneTotalmale = $score1M + $score2M + $score3M + $score4M;

            array_push($scorerms, $roundoneTotalmale);  
        }

       

        foreach($candidateF as $canf){
            $score1F = score::where('candidate','=',$canf->id)->where('category','=','1')->sum('score');
            array_push($score1fs, $score1F);

            $score2F = score::where('candidate','=',$canf->id)->where('category','=','2')->sum('score');
            array_push($score2fs, $score2F);

            $score3F = score::where('candidate','=',$canf->id)->where('category','=','3')->sum('score');
            array_push($score3fs, $score3F);

            $score4F = score::where('candidate','=',$canf->id)->where('category','=','4')->sum('score');
            array_push($score4fs, $score4F);

            $score5F = score::where('candidate','=',$canf->id)->where('category','=','5')->sum('score');
            array_push($score5fs, $score5F);

            $scoreRF =  score::where('candidate','=',$canf->id)->whereBetween('category',['1','5'])->sum('score');

            $roundoneTotalfemale = $score1F + $score2F + $score3F + $score4F;
            array_push($scorerfs, $roundoneTotalfemale);

            
        }

        //dd($scorerms);

        foreach($candidateLM as $canlm){
            $scoreLM =  score::where('candidate','=',$canlm->id)->whereBetween('category',['6','7'])->sum('score');
            array_push($scorelms, $scoreLM);  
        }

        foreach($candidateLF as $canlf){
            $scoreLF =  score::where('candidate','=',$canlf->id)->whereBetween('category',['6','7'])->sum('score');
            array_push($scorelfs, $scoreLF);  
        }

        //dd($scorerfs);
             //$score1M = score::join('candidates', 'candidates.id' , '=' , 'scores.candidate')->where('category' , '=','1')->where('candidates.gender','=','Mr')->orderBy('score','desc')->get();
        
        //dd($candidateM);

        $display = dualVer::first();
        $displayActiveCat = category::where('status','1')->first();

     
        return view('dashboard',
            [
                'judgeCount' => $judgeCount,
                'display' => $display,
                'displayActiveCat' => $displayActiveCat,
                'candidateM' => $candidateM,
                'candidateF' => $candidateF,                
                'score1M' => $score1ms,
                'score1F' => $score1fs,

                'score2M' => $score2ms,
                'score2F' => $score2fs,

                'score3M' => $score3ms,
                'score3F' => $score3fs,

                'score4M' => $score4ms,
                'score4F' => $score4fs,

                'score5M' => $score5ms,
                'score5F' => $score5fs,

                'scoreRM' => $scorerms,
                'scoreRF' => $scorerfs,

                'candidateLM' => $candidateLM,
                'candidateLF' => $candidateLF,  

                'scoreLM' => $scorelms,
                'scoreLF' => $scorelfs,

            ]
        );
    }

    public function sil()
    {
        $candidateM = candidate::where('gender','=','Mr')->get();    
        $candidateF = candidate::where('gender','=','Ms')->get();       

        $candidateLM = candidate::where('gender','=','Mr')->where('active','=','2')->get();    
        $candidateLF = candidate::where('gender','=','Ms')->where('active','=','2')->get();   

        $judgeCount = user::where('role','=','1')->count();
        $score1ms = array(); 
        $score1fs = array(); 

        $score2ms = array(); 
        $score2fs = array(); 

        $score3ms = array(); 
        $score3fs = array(); 
        
        $score4ms = array(); 
        $score4fs = array(); 

        $score5ms = array(); 
        $score5fs = array(); 

        $scorerms = array(); 
        $scorerfs = array(); 

        $scorelms = array(); 
        $scorelfs = array(); 

        


        foreach($candidateM as $can){
            $score1M = score::where('candidate','=',$can->id)->where('category','=','1')->sum('score');
            array_push($score1ms, $score1M);

            $score2M = score::where('candidate','=',$can->id)->where('category','=','2')->sum('score');
            array_push($score2ms, $score2M);

            $score3M = score::where('candidate','=',$can->id)->where('category','=','3')->sum('score');
            array_push($score3ms, $score3M);
            
            $score4M = score::where('candidate','=',$can->id)->where('category','=','4')->sum('score');
            array_push($score4ms, $score4M);

            $score5M = score::where('candidate','=',$can->id)->where('category','=','5')->sum('score');
            array_push($score5ms, $score5M);

            $scoreRM =  score::where('candidate','=',$can->id)->whereBetween('category',['1','5'])->sum('score');
            //array_push($scorerms, $scoreRM);  

            $roundoneTotalmale = $score1M + $score2M + $score3M + $score4M;
            array_push($scorerms, $roundoneTotalmale);  
        }

       

        foreach($candidateF as $canf){
            $score1F = score::where('candidate','=',$canf->id)->where('category','=','1')->sum('score');
            array_push($score1fs, $score1F);
            
            $score2F = score::where('candidate','=',$canf->id)->where('category','=','2')->sum('score');
            array_push($score2fs, $score2F);


            $score3F = score::where('candidate','=',$canf->id)->where('category','=','3')->sum('score');
            array_push($score3fs, $score3F);

            $score4F = score::where('candidate','=',$canf->id)->where('category','=','4')->sum('score');
            array_push($score4fs, $score4F);

            $score5F = score::where('candidate','=',$canf->id)->where('category','=','5')->sum('score');
            array_push($score5fs, $score5F);


            $scoreRF =  score::where('candidate','=',$canf->id)->whereBetween('category',['1','5'])->sum('score');
            //array_push($scorerfs, $scoreRF);

            $roundoneTotalfemale = $score1F + $score2F + $score3F + $score4F;
            array_push($scorerfs, $roundoneTotalfemale);
        }

        foreach($candidateLM as $canlm){
            $scoreLM =  score::where('candidate','=',$canlm->id)->whereBetween('category',['6','7'])->sum('score');
            array_push($scorelms, $scoreLM);  
        }

        foreach($candidateLF as $canlf){
            $scoreLF =  score::where('candidate','=',$canlf->id)->whereBetween('category',['6','7'])->sum('score');
            array_push($scorelfs, $scoreLF);  
        }

        //dd($scorerfs);
             //$score1M = score::join('candidates', 'candidates.id' , '=' , 'scores.candidate')->where('category' , '=','1')->where('candidates.gender','=','Mr')->orderBy('score','desc')->get();
        
        //dd($candidateM);
        return view('judge.sil',
            [
                'judgeCount' => $judgeCount,

                'candidateM' => $candidateM,
                'candidateF' => $candidateF,                
                'score1M' => $score1ms,
                'score1F' => $score1fs,

                'score2M' => $score2ms,
                'score2F' => $score2fs,

                'score3M' => $score3ms,
                'score3F' => $score3fs,

                'score4M' => $score4ms,
                'score4F' => $score4fs,

                'score5M' => $score5ms,
                'score5F' => $score5fs,

                'scoreRM' => $scorerms,
                'scoreRF' => $scorerfs,

                'candidateLM' => $candidateLM,
                'candidateLF' => $candidateLF,  

                'scoreLM' => $scorelms,
                'scoreLF' => $scorelfs,

            ]
        );
    }

    public function judgeTally()
    {
        $category = category::get();
        $judge = user::where('role','=','1')->get();
        //dd($category);
        return view('judge.tally' , [
            'judge' => $judge,
            'category' => $category,
        ]);

    }

    public function show(score $score)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(score $score)
    {
        //
    }
}
