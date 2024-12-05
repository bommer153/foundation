@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">  
        Category Rank  
        <div class="row"> 
            <div class="col-md-6">
                    <form method="post" action="{{route('score.r2')}}">  
                        @csrf     
                        <button class='btn btn-primary btn-fill'>Set Round 2</button>
                    </form>

                    <form method="post" action="{{route('score.r1')}}">  
                        @csrf     
                        <button class='btn btn-primary btn-fill'>Set Round 1</button>
                    </form>
            </div>
            <div class="col-md-6">
                    {{ $display->dual }}
                    <form method="post" action="{{route('dual.change')}}">  
                        @csrf     
                        <div class="form-check">
                                <input class="form-check-input" type="radio" value='1' name="dual"> 1 Display                        
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value='2' name="dual"> 2 Display                        
                       
                         
                        </div> 
                        <button class='btn btn-primary btn-fill'>Change</button>                    
                    </form>
            </div>

            <div class="col-md-6">
                    @if($displayActiveCat == NULL)
                        NNNNN
                    @else
                        {{ $displayActiveCat->category }}
                    @endif
                   
                    <form method="post" action="{{route('cat.change')}}">  
                        @csrf     
                        <select class='form-control' name='category'>
                            <option value='0'>----CATEGORY----</option>
                            <option value='1'>Thematic Wear</option>
                            <option value='2'>Casual Wear</option>
                            <option value='3'>Formal Wear and Long Gown competition</option>
                            <option value='4'>Casual Interview</option>
                        </select>
                        <button class='btn btn-primary btn-fill'>Change</button>                    
                    </form>
            </div>

        </div>
                    <!-- thematic -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4>Thematic Male </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate1M)
                                            <tr>
                                                <td>{{ $candidate1M->no }}</td>
                                                <td>{{ $candidate1M->name }}</td>
                                                <td>{{ $candidate1M->cA }}</td>
                                                <td>{{ number_format($score1M[$i]/$judgeCount,2,'.','') }}</td>
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
                                    <h4>Thematic Female </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                            <thead><tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>College</th>
                                                <th>Score</th>
                                            </tr></thead>
                                            @php $i = 0; @endphp
                                            <tbody>
                                            @foreach ($candidateF as $candidate1F)
                                                <tr>
                                                    <td>{{ $candidate1F->no }}</td>
                                                    <td>{{ $candidate1F->name }}</td>
                                                    <td>{{ $candidate1F->cA }}</td>
                                                    <td>{{ number_format($score1F[$i]/$judgeCount,2,'.','') }}</td>
                                                </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                            </tbody>
                                        </table>       
                                </div>                                
                            </div>
                        </div>    
                        <div class="col-md-6">
                            <h5>Ferdinand Rubio</h5>
                            <h6>MIS, Director</h6>
                        </div>           
                    </div>

                    <!-- Casual -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4>Casual Wear Male </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate2M)
                                            <tr>
                                                <td>{{ $candidate2M->no }}</td>
                                                <td>{{ $candidate2M->name }}</td>
                                                <td>{{ $candidate2M->cA }}</td>
                                                <td>{{ number_format($score2M[$i]/$judgeCount,2,'.','') }}</td>
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
                                    <h4>Casual Wear Female </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                            <thead><tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>College</th>
                                                <th>Score</th>
                                            </tr></thead>
                                            @php $i = 0; @endphp
                                            <tbody>
                                            @foreach ($candidateF as $candidate2F)
                                                <tr>
                                                    <td>{{ $candidate2F->no }}</td>
                                                    <td>{{ $candidate2F->name }}</td>
                                                    <td>{{ $candidate2F->cA }}</td>
                                                    <td>{{ number_format($score2F[$i]/$judgeCount,2,'.','') }}</td>
                                                </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                            </tbody>
                                        </table>       
                                </div>                                
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <h5>Ferdinand Rubio</h5>
                            <h6>MIS, Director</h6>
                        </div>                
                    </div>

                     <!-- Formal -->
                     <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4>Formal Wear and Long Gown Male </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate3M)
                                            <tr>
                                                <td>{{ $candidate3M->no }}</td>
                                                <td>{{ $candidate3M->name }}</td>
                                                <td>{{ $candidate3M->cA }}</td>
                                                <td>{{ number_format($score3M[$i]/$judgeCount,2,'.','') }}</td>
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
                                    <h4>Formal Wear and Long Gown Female </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                            <thead><tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>College</th>
                                                <th>Score</th>
                                            </tr></thead>
                                            @php $i = 0; @endphp
                                            <tbody>
                                            @foreach ($candidateF as $candidate3F)
                                                <tr>
                                                    <td>{{ $candidate3F->no }}</td>
                                                    <td>{{ $candidate3F->name }}</td>
                                                    <td>{{ $candidate3F->cA }}</td>
                                                    <td>{{ number_format($score3F[$i]/$judgeCount,2,'.','') }}</td>
                                                </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                            </tbody>
                                        </table>       
                                </div>                                
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <h5>Ferdinand Rubio</h5>
                            <h6>MIS, Director</h6>
                        </div>               
                    </div>

                    <!-- Beauty -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4>Casual Interview Male </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate4M)
                                            <tr>
                                                <td>{{ $candidate4M->no }}</td>
                                                <td>{{ $candidate4M->name }}</td>
                                                <td>{{ $candidate4M->cA }}</td>
                                                <td>{{ number_format($score4M[$i]/$judgeCount,2,'.','') + $score8M[$i] }}</td>
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
                                    <h4>Casual Interview Female </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                            <thead><tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>College</th>
                                                <th>Score</th>
                                            </tr></thead>
                                            @php $i = 0; @endphp
                                            <tbody>
                                            @foreach ($candidateF as $candidate4F)
                                                <tr>
                                                    <td>{{ $candidate4F->no }}</td>
                                                    <td>{{ $candidate4F->name }}</td>
                                                    <td>{{ $candidate4F->cA }}</td>
                                                    <td>{{ number_format($score4F[$i]/$judgeCount,2,'.','') + $score8F[$i]}}</td>
                                                </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                            </tbody>
                                        </table>       
                                </div>                                
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <h5>Ferdinand Rubio</h5>
                            <h6>MIS, Director</h6>
                        </div>               
                    </div>

                   
                    <!-- talent -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4>Talent Male </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidate5M)
                                           
                                            <tr>
                                                <td>{{ $candidate5M->no }}</td>
                                                <td>{{ $candidate5M->name }}</td>
                                                <td>{{ $candidate5M->cA }}</td>
                                                <td>{{ number_format($score5M[$i],2,'.','') }}</td>
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
                                    <h4>Talent Female </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                            <thead><tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>College</th>
                                                <th>Score</th>
                                            </tr></thead>
                                            @php $i = 0; @endphp
                                            <tbody>
                                            @foreach ($candidateF as $candidate5F)
                                                <tr>
                                                    <td>{{ $candidate5F->no }}</td>
                                                    <td>{{ $candidate5F->name }}</td>
                                                    <td>{{ $candidate5F->cA }}</td>
                                                    <td>{{ number_format($score5F[$i],2,'.','') }}</td>
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
                                    <h4>Round 1 Male </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateM as $candidateRM)
                                            @php 
                                               $scoreT = \App\Models\score::where('candidate','=',$candidateRM->id)->where('category','=','5')->where('judge','=','1')->get(); 
                                               
                                               //$scoreT = 0;
                                               $scoreT = $scoreT[0]->score;
                                            @endphp
                                            <tr>
                                                        @php 
                                                            $s = ($scoreRM[$i]/$judgeCount) + $scoreT;
                                                           
                                                        @endphp
                                                <td>{{ $candidateRM->no }}</td>
                                                <td>{{ $candidateRM->name }}</td>
                                                <td>{{ $candidateRM->cA }}</td>
                                                <td>{{ number_format($s ,2,'.','') }}</td>
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
                                    <h4>Round 1 Female </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                            <thead><tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>College</th>
                                                <th>Score</th>
                                            </tr></thead>
                                            @php $i = 0; @endphp
                                            <tbody>
                                            @foreach ($candidateF as $candidateRF)
                                                @php 
                                                    $scoreT = \App\Models\score::where('candidate','=',$candidateRF->id)->where('category','=','5')->where('judge','=','1')->get(); 
                                                    //$scoreT = 0;
                                                    $scoreT = $scoreT[0]->score;
                                                @endphp
                                                <tr>
                                                        @php 
                                                            $s = ($scoreRF[$i]/$judgeCount) + $scoreT;
                                                            
                                                        @endphp

                                                    <td>{{ $candidateRF->no }}</td>
                                                    <td>{{ $candidateRF->name }}</td>
                                                    <td>{{ $candidateRF->cA }}</td>
                                                    <td>{{ number_format($s,2,'.','') }}</td>
                                                </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                            </tbody>
                                        </table>       
                                </div>                                
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <h5>Ferdinand Rubio</h5>
                            <h6>MIS, Director</h6>
                        </div>                 
                    </div>


                      <!-- Round 2 -->
                      <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4>Round 2 (Question and Answer) Male </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                        <thead><tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Score</th>
                                        </tr></thead>
                                        @php $i = 0; @endphp
                                        <tbody>
                                        @foreach ($candidateLM as $candidateLM)
                                            <tr>
                                                <td>{{ $candidateLM->no }}</td>
                                                <td>{{ $candidateLM->name }}</td>
                                                <td>{{ $candidateLM->cA }}</td>
                                                <td>{{ number_format($scoreLM[$i]/$judgeCount,2,'.','') }}</td>
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
                                    <h4>Round 2 (Question and Answer) Female </i></h4>
                                </div>
                                <div class="card-body ">
                                    <table class='table' id='table'>
                                            <thead><tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>College</th>
                                                <th>Score</th>
                                            </tr></thead>
                                            @php $i = 0; @endphp
                                            <tbody>
                                            @foreach ($candidateLF as $candidateLF)
                                                <tr>
                                                    <td>{{ $candidateLF->no }}</td>
                                                    <td>{{ $candidateLF->name }}</td>
                                                    <td>{{ $candidateLF->cA }}</td>
                                                    <td>{{ number_format($scoreLF[$i]/$judgeCount,2,'.','') }}</td>
                                                </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                            </tbody>
                                        </table>       
                                </div>                                
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <h5>Ferdinand Rubio</h5>
                            <h6>MIS, Director</h6>
                        </div>                
                    </div>
        </div>
    </div>
    <script>
        $('.table').dataTable( {
            "searching": false,
            "paging": false,
            "aaSorting": [[3,'desc']],
            "info":     false,
           
        });
    </script>
@endsection
