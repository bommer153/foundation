<div class="card-header">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h3 class="mb-0">
                @if($round == 1)
                    Scoring Round {{ $round }}
                @else
                    Scoring Round {{ $round }} (Question and Answer)
                @endif
            </h3>
        </div>
    </div>
</div>


<div class="card-body">
    <div class="row">
        <style>
        p {
            font-size: 13px;
        }
        </style>
        @foreach($category as $category)
        @if( $category->status == '1')
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

            <div class="content{{ $category->id }}">


                <h4 style='font-size:14px;' class='card-header {{ $color }} text-white'>
                    {{ $category->category }} - <b>{{$category->total}} </b> pts
                    <span class='float-right badge badge-pill badge-success' style='cursor:pointer'
                        id='shower{{$category->id}}'>Hide</span>
                </h4>
                <div class="card-body" id='body{{$category->id}}' style='{{ $border }}'>

                    <div class="row">

                        <div class="col-md-7">

                            @if($round == 1)
                            <p>{{$category->criteria1}} - <b>{{$category->pts1}} </b>pts</p>
                            <p>{{$category->criteria2}} - <b>{{$category->pts2}} </b>pts</p>
                            @endif

                            @if(empty($score[$category->id-1][0]->score))
                                @php $nscore = 0;
                                $disable = '';
                                $check = '0';
                                @endphp
                            @else
                                @php $nscore = $score[$category->id-1][0]->score;
                                $disable = 'disabled';
                                $check = '1';
                                @endphp
                            @endif
                            <input type="range" min='1' max='{{ $category->total }}' class="form-range"
                                name='jscore{{$category->id}}' id="customRange{{$category->id}}" style='width:100%'
                                value='{{ $nscore }}' {{$disable}}>
                        </div>
                        <div class="col-md-2">
                            <h2 class="title" id='score{{$category->id}}'>{{ $nscore }}</h2>
                        </div>
                        <div class="col-md-2">
                            <br>
                            @if($check == 0)
                            <button class='btn btn-primary btn-fill' id='save{{$category->id}}'>Save</button>
                            <div class="badge badge-pill badge-success" id='successCheck{{$category->id}}'
                                style='display:none;'>
                                <i class='nc-icon nc-check-2'></i>
                            </div>
                            @else
                            <div class="badge badge-pill badge-success" id='successCheck{{$category->id}}'>
                                <i class='nc-icon nc-check-2'></i>
                            </div>
                            <!-- <script>
                                                                     $('#body'+{{ $category->id }}).hide();
                                                                    $('#shower'+{{ $category->id }}).text('show'); 
                                                                </script> -->
                            @endif

                        </div>

                    </div>


                </div>
            </div>

            <script>
            $('#customRange{{$category->id}}').on('input', function() {
                var value = $(this).val();
                $('#score{{$category->id}}').text(value);
            });

            $('#save{{$category->id}}').click(function() {
                var score = $('#score{{$category->id}}').text();
                var result = confirm("Are You sure");
                if (result == true) {

                    $.ajax({
                        method: 'POST',
                        url: '{{ route("score",["id"=>$candidate->id]) }}',
                        dataType: 'json',
                        data: {
                            'score': score,
                            'category': '{{ $category->id }}',
                            '_token': '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            $('#save{{$category->id}}').slideUp();
                            $('#successCheck{{$category->id}}').slideDown();

                            $('#customRange{{$category->id}}').prop("disabled",
                                true);
                        }
                    })
                } else {

                }
            });

            $('#shower'+{{$category->id}}).click(function() {
                let text = $(this).text();

                $('#body'+{{$category->id}}).slideToggle();
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