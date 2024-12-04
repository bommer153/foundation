<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use Illuminate\Http\Request;
use App\Models\round;
use App\Models\category;
use App\Models\score;
use App\Models\activerd;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function partialCandidate($id)
    {
        $candidate = candidate::where('ordered',$id)->first();

        $round = round::first()->round;
       

        $previous = candidate::where('ordered','<',$id)->where('active','=',$round)->max('ordered');
        $next = candidate::where('ordered','>',$id)->where('active','=',$round)->min('ordered');
        $max = candidate::latest('ordered')->where('active','=',$round)->first();
        $min = candidate::orderBy('ordered','asc')->where('active','=',$round)->first();
        
        //dd($max);   
         if($previous == NULL){
            $previous = $max->ordered;
        }else if($next == NULL){
            $next = $min->ordered;
        }else{
            
        }

        
        return view('template.candidate', compact('candidate','previous','next'));
    }

    public function single(){
        $round = round::first()->round;
        $candidateListM = candidate::where('active',$round)->where('Gender','Mr')->get();
        $candidateListF = candidate::where('active',$round)->where('Gender','Ms')->get();

        return view('template.single', compact('candidateListM','candidateListF'));
    }

    public function singleForm($id){
        $round = round::get();
        $round = $round[0]->round;
        $category = category::where('type',$round)->orderBy('status','desc')->get();
        $candidate = candidate::where('ordered',$id)->first();

       
        $nid = $candidate->id;
        $judge = auth::user()->id;
        

        $score1 = score::where('category','1')->where('candidate',$nid)->where('judge',$judge)->get();
        $score2 = score::where('category','2')->where('candidate',$nid)->where('judge',$judge)->get();
        $score3 = score::where('category','3')->where('candidate',$nid)->where('judge',$judge)->get();
        $score4  = score::where('category','4')->where('candidate',$nid)->where('judge',$judge)->get();
        $score5  = score::where('category','5')->where('candidate',$nid)->where('judge','1')->get();
        $score6  = score::where('category','6')->where('candidate',$nid)->where('judge',$judge)->get();
        $score7  = score::where('category','7')->where('candidate',$nid)->where('judge',$judge)->get();
        $score8  = score::where('category','8')->where('candidate',$nid)->where('judge',$judge)->get();
        
        $score = array($score1,$score2,$score3,$score4,$score5,$score6,$score7,$score8);

        return view('template.formSingle', compact('score','category','candidate','round'));
    }

    public function dualCandidate($id)
    {
        
        $round = round::first()->round;
        $category = category::where('type',$round)->orderBy('status','desc')->get();
        $candidate = candidate::where('no',$id)->get();       
        $judge = auth::user()->id;
        $score = array();
        
        //dd($candidate);
        foreach($candidate as $can){
            $score1 = score::where('category','1')->where('candidate',$can->id)->where('judge',$judge)->get();
            $score2 = score::where('category','2')->where('candidate',$can->id)->where('judge',$judge)->get();
            $score3 = score::where('category','3')->where('candidate',$can->id)->where('judge',$judge)->get();
            $score4  = score::where('category','4')->where('candidate',$can->id)->where('judge',$judge)->get();
            $score5  = score::where('category','5')->where('candidate',$can->id)->where('judge','1')->get();
            $score6  = score::where('category','6')->where('candidate',$can->id)->where('judge',$judge)->get();
            $score7  = score::where('category','7')->where('candidate',$can->id)->where('judge',$judge)->get();
            $score8  = score::where('category','8')->where('candidate',$can->id)->where('judge',$judge)->get();
            
            array_push($score,$score1,$score2,$score3,$score4,$score5,$score6,$score7,$score8);
           
        }
        //dd($score);

            $previous = candidate::where('no','<',$id)->where('active','=',$round)->max('no');
            $next = candidate::where('no','>',$id)->where('active','=',$round)->min('no');
            $max = candidate::latest('no')->where('active','=',$round)->first();
            $min = candidate::orderBy('no')->where('active','=',$round)->first();
        
       if($previous == NULL){
            $previous = $max->no;
        }else if($next == NULL){
            $next = $min->no;
        }else{

        }
        //dd($score);
        $activerd = activerd::first();

        
        return view('template.dualCandidate', compact('category','previous','next','candidate','score','activerd','round'));
    }

    public function dual(){
        $round = round::first()->round;       
        $candidateList = candidate::where('active',$round)->where('Gender','Ms')->get();

        return view('template.dual', compact('candidateList'));
    }

    public function candidate (){
        return view('candidate.candidate');
    }

    public function candidateList (){
        $candidates = candidate::get();
        return view('template.candidateList', compact('candidates'));
    }
    
    public function candidateShow ($id){
        $candidate = candidate::findOrFail($id);
        return view('candidate.show', compact('candidate'));
    }

    public function candidateUpdate($id,Request $request){
        $validate = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required',
            'no' => 'required',
            'college' => 'required',
            'ordered' => 'required',
        ]);

        candidate::find($id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'college' => $request->college,
            'no' => $request->no,
            'ordered' => $request->ordered,
        ]);

        return redirect()->back()->with('success','Details Updated');
    }

    public function candidateImage($id,Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file
        ]);

        $destinationPath = public_path('images/mrmstcu');
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $fileName);

        candidate::find($id)->update([
            'img' => $fileName,           
        ]);

        return redirect()->back()->with('success','Image Updated');
    }
}