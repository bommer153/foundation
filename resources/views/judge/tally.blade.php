@extends('layouts.app', ['activePage' => 'judge', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">  
        Judge Tally <hr>        
        <div class="row">
                @foreach($judge as $judge)
                        <div class="col-md-12">
                            <p id="click{{$judge->id}}">{{ $judge->name }}</p><hr>
                            <div class="row" id="flip{{$judge->id}}" style='display:none;'>
                            @foreach($category as $cat)  

                                        <div class="col-md-6">
                                            <div class="card ">
                                                <div class="card-header ">
                                                    <h4>{{ $cat->category }} Male</i></h4>
                                                </div>
                                                <div class="card-body ">
                                                    @php
                                                         $male = \App\Models\candidate::where('gender','=','Mr')->get(); 
                                                        
                                                    @endphp

                                                    <table class='table' id='table'>
                                                        <thead><tr>
                                                            <th>No</th>   
                                                            <th>College</th>
                                                            <th>Score</th>
                                                        </tr>
                                                    </thead>                                     
                                                        <tbody>
                                                            
                                                            @foreach($male as $m)
                                                            <tr>
                                                                <td>{{$m->no}}</td>
                                                                <td>{{$m->college}}</td>
                                                                @php 
                                                                    $score = \App\Models\score::where('candidate','=', $m->id)->where('category','=', $cat->id)->where('judge','=', $judge->id)->get(); 
                                                                @endphp

                                                                @if(empty($score[0]))
                                                                    @php $score = 0; @endphp
                                                                @else
                                                                    @php $score = $score[0]->score; @endphp
                                                                @endif

                                                                <td>{{$score}}</td>
                                                            </tr>
                                                            @endforeach
                                                            
                                                        </tbody>
                                                    </table>                                        
                                                </div>                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="card ">
                                                <div class="card-header ">
                                                    <h4>{{$cat->category}} Female</i></h4>
                                                </div>
                                                <div class="card-body ">
                                                    @php
                                                         $female = \App\Models\candidate::where('gender','=','Ms')->get(); 
                                                        
                                                    @endphp
                                                    <table class='table' id='table'>
                                                        <thead><tr>
                                                            <th>No</th>   
                                                            <th>College</th>
                                                            <th>Score</th>
                                                        </tr>
                                                    </thead>                                     
                                                        <tbody>
                                                            @foreach($female as $f)
                                                                <tr>
                                                                    <td>{{$f->no}}</td>
                                                                    <td>{{$f->college}}</td>
                                                                    @php 
                                                                        $score = \App\Models\score::where('candidate','=', $f->id)->where('category','=', $cat->id)->where('judge','=', $judge->id)->get(); 
                                                                    @endphp

                                                                    @if(empty($score[0]))
                                                                        @php $score = 0; @endphp
                                                                    @else
                                                                        @php $score = $score[0]->score; @endphp
                                                                    @endif

                                                                    <td>{{$score}}</td>
                                                                </tr>
                                                            @endforeach
                                                            
                                                        </tbody>
                                                    </table>                                        
                                                </div>                                
                                            </div>
                                        </div>
                                   
                                @endforeach   
                             </div>
                        </div>   

                        <script>
                            $('#click{{$judge->id}}').click(function(){
                                $('#flip{{$judge->id}}').slideToggle();
                            })
                        </script>
                @endforeach
            </div>
        </div>
    </div>
   
    <script>
        $('.table').dataTable( {
            "searching": false,
            "paging": false,
            "aaSorting": [[2,'desc']],
            "info":     false,
           
        });
    </script>
@endsection
