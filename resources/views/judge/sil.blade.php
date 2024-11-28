@extends('layouts.app', ['activePage' => 'silouette', 'title' => '', 'navName' => 'silouette', 'activeButton' => ''])

@section('content')

    
    <div class="content">
        <div class="container-fluid">  
                    <!--swimwear-->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header" >
                                    <h4 id="swm" style='cursor:pointer;'>Thematic Wear Male</h4>
                                </div>
                                <div class="card-body" id="swmb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate1M)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate1M->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score1M[$i]/$judgeCount;
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score1M[$i]/$judgeCount,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>                                        
                                </div>                                
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="swf" style='cursor:pointer;'>Thematic Wear Female</h4>
                                </div>
                                <div class="card-body " id="swfb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateF as $candidate1F)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate1F->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s1f = $score1F[$i]/$judgeCount;
                                                            $ss1f = $s1f*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss1f}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score1F[$i]/$judgeCount,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>     
                                </div>                                
                            </div>
                        </div>               
                    </div>

                    <!-- Thematic -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="twm" style='cursor:pointer;'>Summer Wear Male </h4>
                                </div>
                                <div class="card-body " id="twmb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate2M)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate2M->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score2M[$i]/7;
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score2M[$i]/$judgeCount,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>                                      
                                </div>                                
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="twf" style='cursor:pointer;'>Summer Wear Female </i></h4>
                                </div>
                                <div class="card-body " id="twfb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateF as $candidate2F)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate2F->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score2F[$i]/7;
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score2F[$i]/$judgeCount,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>  
                                </div>                                
                            </div>
                        </div>               
                    </div>

                     <!-- Formal -->
                     <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="fwm" style='cursor:pointer;'>Evening Wear Male </i></h4>
                                </div>
                                <div class="card-body " id="fwmb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate3M)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate3M->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score3M[$i]/7;
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score3M[$i]/7,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>                                    
                                </div>                                
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="fwf" style='cursor:pointer;'>Evening Wear Female </i></h4>
                                </div>
                                <div class="card-body " id="fwfb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateF as $candidate3F)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate3F->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score3F[$i]/7;
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score3F[$i]/7,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>     
                                </div>                                
                            </div>
                        </div>               
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="bwm" style='cursor:pointer;'>Beauty of Face, Poise, Bearing and Personality Male </i></h4>
                                </div>
                                <div class="card-body " id="bwmb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate4M)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate4M->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score4M[$i]/7;
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score4M[$i]/7,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>                                        
                                </div>                                
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="bwf" style='cursor:pointer;'>Beauty of Face, Poise, Bearing and Persinality Female </i></h4>
                                </div>
                                <div class="card-body " id="bwfb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateF as $candidate4F)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate4F->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score4F[$i]/7;
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score4F[$i]/7,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>       
                                </div>                                
                            </div>
                        </div>               
                    </div>

                      <!-- Talent -->
                      <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="tm" style='cursor:pointer;'>Talent</i></h4>
                                </div>
                                <div class="card-body " id="tmb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate5M)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                  <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate5M->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score5M[$i];
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score5M[$i],2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>                                        
                                </div>                                
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="tf" style='cursor:pointer;'>Talent Female </i></h4>
                                </div>
                                <div class="card-body " id="tfb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateF as $candidate5F)
                                            <tr>
                                                <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>                                                
                                                 <!--<td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidate5F->img }}" width="100" height="150"></td>    -->    
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = $score5F[$i];
                                                            $ss = $s*5;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($score5F[$i],2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>       
                                </div>                                
                            </div>
                        </div>               
                    </div>


                     <!-- Round 1 -->
                     <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="rm" style='cursor:pointer;'>Round 1 Male </i></h4>
                                </div>
                                <div class="card-body " id="rmb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidateRM)
                                            @php 
                                               $scoreT = \App\Models\score::where('candidate','=',$candidateRM->id)->where('category','=','5')->where('judge','=','1')->get(); 
                                               $scoreT = $scoreT[0]->score;
                                            @endphp
                                            <tr>
                                                 <!-- <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>     -->                                              
                                               <td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidateRM->img }}" width="100" height="150"></td>     
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = ($scoreRM[$i]/$judgeCount) + $scoreT;
                                                            $ss = $s;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($s,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>                                        
                                </div>                                
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="rf" style='cursor:pointer;'>Round 1 Female </i></h4>
                                </div>
                                <div class="card-body " id="rfb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateF as $candidateRF)
                                            @php 
                                               $scoreT = \App\Models\score::where('candidate','=',$candidateRF->id)->where('category','=','5')->where('judge','=','1')->get(); 
                                               $scoreT =  $scoreT[0]->score;
                                            @endphp
                                            <tr>
                                                <!-- <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>   --> 
                                                 <td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidateRF->img }}" width="100" height="150"></td>                                            
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = ($scoreRF[$i]/$judgeCount) + $scoreT;
                                                            $ss = $s;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($s,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>      
                                </div>                                
                            </div>
                        </div>               
                    </div>


                      <!-- Round 2 -->
                      <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="lm" style='cursor:pointer;'>Round 2 (QnA) Male </i></h4>
                                </div>
                                <div class="card-body " id="lmb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateLM as $candidateLM)
                                            
                                            <tr>
                                                <!-- <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>      -->                                               
                                                  <td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidateLM->img }}" width="100" height="150"></td>   
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = ($scoreLM[$i]/$judgeCount);
                                                            $ss = $s;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($s,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>                                         
                                </div>                                
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 id="lf" style='cursor:pointer;'>Round 2 (QnA) Female </i></h4>
                                </div>
                                <div class="card-body " id="lfb" style='display:none;'>
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th></th>   
                                            <th></th>                                         
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateLF as $candidateLF)
                                            
                                            <tr>
                                                <!-- <td style='width:20%'><img src="{{ asset('light-bootstrap') }}/img/question.png" width="50" height="50"></td>   -->                                               
                                                  <td style='width:20%'><img src="{{ asset('storage') }}/mrmstcu2023/{{ $candidateLF->img }}" width="100" height="150"></td>      
                                                <td style='width:60%'>                                                    
                                                    <div class="progress">
                                                        @php 
                                                            $s = ($scoreLF[$i]/$judgeCount);
                                                            $ss = $s;
                                                        @endphp
                                                        <div class="progress-bar" role="progressbar" style="width: {{$ss}}%" ></div>
                                                    </div>                                                    
                                                </td>
                                                <td style='width:20%'>{{ number_format($s,2,'.','') }}</td>
                                            </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>       
                                </div>                                
                            </div>
                        </div>               
                    </div>
        </div>
    </div>
    <script>
        $('#swm').click(function(){           
            $('#swmb').slideToggle();
        })
        $('#swf').click(function(){           
            $('#swfb').slideToggle();
        })

        $('#twm').click(function(){           
            $('#twmb').slideToggle();
        })
        $('#twf').click(function(){           
            $('#twfb').slideToggle();
        })

        $('#fwm').click(function(){           
            $('#fwmb').slideToggle();
        })
        $('#fwf').click(function(){           
            $('#fwfb').slideToggle();
        })

        $('#bwm').click(function(){           
            $('#bwmb').slideToggle();
        })
        $('#bwf').click(function(){           
            $('#bwfb').slideToggle();
        })

        $('#tm').click(function(){           
            $('#tmb').slideToggle();
        })
        $('#tf').click(function(){           
            $('#tfb').slideToggle();
        })

        $('#rm').click(function(){           
            $('#rmb').slideToggle();
        })
        $('#rf').click(function(){           
            $('#rfb').slideToggle();
        })

        $('#lm').click(function(){           
            $('#lmb').slideToggle();
        })
        $('#lf').click(function(){           
            $('#lfb').slideToggle();
        })


    </script>
    <script>
        $('.table').dataTable( {
            "searching": false,
            "paging": false,
            "aaSorting": [[2,'desc']],
            "info":     false,
           
        });
    </script>
@endsection
