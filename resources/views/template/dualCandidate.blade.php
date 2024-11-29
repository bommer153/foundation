<div class="row">
                <div class="col-md-6">
                    <div class="card card-user">
                        <div class="card-body">
                            <div class="author">
                                <br><br><br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ asset('images/mrmstcu/'.$candidate[0]->img) }}"
                                            data-lightbox="example-1">
                                            <img class="thumnail"
                                                src="{{ asset('images/mrmstcu/'.$candidate[0]->img) }}"
                                                style='width:100%;box-shadow: 1px 1px 5px black;'>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <h2 class=''>{{ $candidate[0]->gender }}. {{ $candidate[0]->name }}</h2>
                                                <h5 class="description">
                                                    <b>{{ $candidate[0]->college }}</b>
                                                </h5>

                                            </div>

                                            <div class="col-md-6">
                                                <a href="{{route('home.judgeDual',['no'=>$previous])}}">
                                                    <button class='btn btn-primary btn-fill' style='float:right;'>
                                                        <i class='nc-icon nc-stre-left'></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-md-6">

                                                <a href="{{route('home.judgeDual',['no'=>$next])}}">
                                                    <button class='btn btn-primary btn-fill' style='float:left;'>
                                                        <i class='nc-icon nc-stre-right'></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>


                    <div class="card-body">
                        <style>
                        p {
                            font-size: 13px;
                        }
                        </style>
                        <div class="row">
                            @foreach($category as $category1)

                            @if( $category1->status == '1')
                            @php
                            $color = 'bg-success';
                            $border = 'border:1px solid green;';
                            $col = 'col-md-12';
                            @endphp

                            @else
                            @php
                            $color = 'bg-dark';
                            $border = 'border:1px solid';
                            $col = 'col-md-6';
                            @endphp
                            @endif

                            <div class="{{ $col }}">
                                <div class="content{{ $category1->id }}">

                                    <h4 style='font-size:15px;' class='card-header {{ $color }} text-white'>
                                        {{ $category1->category }} - <b>{{$category1->total}} pts </b>
                                        <span class='float-right badge badge-pill badge-success' style='cursor:pointer'
                                            id='shower{{$category1->id}}'>Hide</span>
                                    </h4>
                                    <div class="card-body" id='body{{$category1->id}}' style='{{ $border }}'>
                                        <div class="row">
                                            <div class="col-md-8">

                                                @if($round == 1)


                                                <p>{{$category1->criteria1}} - <b>{{$category1->pts1}} pts </b></p>
                                                <p>{{$category1->criteria2}} - <b>{{$category1->pts2}} pts </b></p>
                                                @endif

                                                @if(empty($score[$category1->id-1][0]->score))
                                                @php $nscore = 0;
                                                $disable = '';
                                                $check = '0';
                                                @endphp
                                                @else
                                                @php $nscore = $score[$category1->id-1][0]->score;
                                                $disable = 'disabled';
                                                $check = '1';
                                                @endphp
                                                @endif
                                                <input type="range" min='1' max='{{ $category1->total }}'
                                                    class="form-range" name='jscore{{$category1->id}}'
                                                    id="customRange{{$category1->id}}" style='width:100%'
                                                    value='{{ $nscore }}' {{$disable}}>
                                            </div>
                                            <div class="col-md-2">



                                                <h2 class="title" id='score{{$category1->id}}'>{{ $nscore }}</h2>

                                                <br>
                                                @if($check == 0)
                                                <button class='btn btn-primary btn-fill'
                                                    id='save{{$category1->id}}'>Save</button>
                                                <div class="badge badge-pill badge-success"
                                                    id='successCheck{{$category1->id}}' style='display:none;'>
                                                    <i class='nc-icon nc-check-2'></i>
                                                </div>
                                                @else
                                                <div class="badge badge-pill badge-success"
                                                    id='successCheck{{$category1->id}}'>
                                                    <i class='nc-icon nc-check-2'></i>
                                                </div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                $('#customRange{{$category1->id}}').on('input', function() {
                                    var value = $(this).val();
                                    $('#score{{$category1->id}}').text(value);
                                });

                                $('#save{{$category1->id}}').click(function() {
                                    var score = $('#score{{$category1->id}}').text();
                                    var result = confirm("Are You sure");
                                    if (result == true) {

                                        $.ajax({
                                            method: 'POST',
                                            url: '{{ route("score",["id"=>$candidate[0]->id]) }}',
                                            dataType: 'json',
                                            data: {
                                                'score': score,
                                                'category': '{{ $category1->id }}',
                                                '_token': '{{ csrf_token() }}'
                                            },
                                            success: function(data) {
                                                $('#save{{$category1->id}}').slideUp();
                                                $('#successCheck{{$category1->id}}').slideDown();
                                                $('#customRange{{$category1->id}}').prop("disabled",
                                                    true);
                                            }
                                        })
                                    } else {

                                    }
                                });

                                $('#shower'+{{$category1->id}}).click(function() {
                                    let text = $(this).text();

                                    $('#body'+ {{ $category1->id}}).slideToggle();
                                    if (text == "Hide") {
                                        $(this).text('Show');
                                    } else {
                                        $(this).text('Hide');
                                    }
                                });
                                </script>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-user">
                        <div class="card-body">
                            <div class="author">
                                <br><br><br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ asset('images/mrmstcu/'.$candidate[1]->img) }}"
                                            data-lightbox="example-1">
                                            <img class="thumnail"
                                                src="{{ asset('images/mrmstcu/'.$candidate[1]->img) }}"
                                                style='width:100%;box-shadow: 1px 1px 5px black;'>
                                        </a>
                                    </div>
                                    <div class="col-md-6">


                                        <div class="row">

                                            <div class="col-md-12">

                                                <h2 class=''>{{ $candidate[1]->gender }}. {{ $candidate[1]->name }}</h2>
                                                <h5 class="description">
                                                    <b>{{ $candidate[1]->college }}</b>
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($category as $category2)
                            @if( $category2->status == '1')
                            @php
                            $color = 'bg-success';
                            $border = 'border:1px solid green;';
                            $col = 'col-md-12';
                            @endphp

                            @else
                            @php
                            $color = 'bg-dark';
                            $border = 'border:1px solid';
                            $col = 'col-md-6';
                            @endphp
                            @endif

                            <div class="{{ $col }}">
                                <div class="content{{ $category2->id }}">

                                    <h4 style='font-size:15px;' class='card-header {{ $color }} text-white'>
                                        {{ $category2->category }} - {{$category2->total}} pts
                                        <span class='float-right badge badge-pill badge-success' style='cursor:pointer'
                                            id='shower2{{$category2->id}}'>Hide</span>
                                    </h4>
                                    <div class="card-body" id='body2{{$category2->id}}' style='{{ $border }}'>
                                        <div class="row">
                                            <div class="col-md-8">

                                                @if($round == 1)
                                                <p>{{$category2->criteria1}} - {{$category2->pts1}} pts</p>
                                                <p>{{$category2->criteria2}} - {{$category2->pts2}} pts</p>
                                                @endif

                                                @if(empty($score[$category2->id-1+7][0]->score))
                                                @php $nscore = 0;
                                                $disable = '';
                                                $check = '0';
                                                @endphp
                                                @else
                                                @php $nscore = $score[$category2->id-1+7][0]->score;
                                                $disable = 'disabled';
                                                $check = '1';
                                                @endphp
                                                @endif
                                                <input type="range" min='1' max='{{ $category2->total }}'
                                                    class="form-range" name='jscore{{$category2->id}}'
                                                    id="customRange2{{$category2->id}}" style='width:100%'
                                                    value='{{ $nscore }}' {{$disable}}>
                                            </div>
                                            <div class="col-md-2">



                                                <h2 class="title" id='score2{{$category2->id}}'>{{ $nscore }}</h2>

                                                <br>
                                                @if($check == 0)
                                                <button class='btn btn-primary btn-fill'
                                                    id='save2{{$category2->id}}'>Save</button>
                                                <div class="badge badge-pill badge-success"
                                                    id='successCheck2{{$category2->id}}' style='display:none;'>
                                                    <i class='nc-icon nc-check-2'></i>
                                                </div>
                                                @else
                                                <div class="badge badge-pill badge-success"
                                                    id='successCheck2{{$category2->id}}'>
                                                    <i class='nc-icon nc-check-2'></i>
                                                </div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                $('#customRange2{{$category2->id}}').on('input', function() {
                                    var value = $(this).val();
                                    $('#score2{{$category2->id}}').text(value);
                                });

                                $('#save2{{$category2->id}}').click(function() {
                                    var score = $('#score2{{$category2->id}}').text();
                                    var result = confirm("Are You sure");
                                    if (result == true) {

                                        $.ajax({
                                            method: 'POST',
                                            url: '{{ route("score",["id"=>$candidate[1]->id]) }}',
                                            dataType: 'json',
                                            data: {
                                                'score': score,
                                                'category': '{{ $category2->id }}',
                                                '_token': '{{ csrf_token() }}'
                                            },
                                            success: function(data) {
                                                $('#save2{{$category2->id}}').slideUp();
                                                $('#successCheck2{{$category2->id}}').slideDown();
                                                $('#customRange2{{$category2->id}}').prop(
                                                    "disabled", true);
                                            }
                                        })
                                    } else {

                                    }
                                });

                                $('#shower2'+{{ $category2->id }}).click(function() {
                                    let text = $(this).text();

                                    $('#body2'+{{ $category2->id }}).slideToggle();
                                    if (text == "Hide") {
                                        $(this).text('Show');
                                    } else {
                                        $(this).text('Hide');
                                    }
                                });
                                </script>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>