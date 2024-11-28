@extends('layouts.app', ['activePage' => 'user', 'title' => '', 'navName' => 'User Profile', 'activeButton' =>
'laravel'])

@section('content')

<style>
input[type=range] {
    height: 32px;
    -webkit-appearance: none;
    margin: 10px 0;
    width: 100%;
}

input[type=range]:focus {
    outline: none;
}

input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 10px;
    cursor: pointer;
    animate: 1s;
    background: #A90202;
    border-radius: 5px;
    border: 1px solid #000000;
}

input[type=range]::-webkit-slider-thumb {
    box-shadow: 1px 1px 1px #FF0000;
    border: 1px solid #FF0000;
    height: 50px;
    width: 50px;
    border-radius: 100px;
    background-image:url("{{ asset('light-bootstrap')}}/img/tculogo.png");
    background-repeat: no-repeat;
    background-size: 100%;
    cursor: pointer;
    -webkit-appearance: none;
    margin-top: -20px;
}
</style>
<div class="card-body">
    <div id="quickAccess">
        <div id="quickloader" style="display:none;">
            <div class="skeleton-loader" style="width:100%">
                <div class="skeleton-body">
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">

    <div class="container-fluid">

        <div class="section-image">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->



            <div class="row">
                <div class="col-md-3">

                    <div class="card card-user">

                        <div class="card-body">
                            <div class="author">
                                <br><br><br><br>
                                <div class="row" id="candidateContainer">
                                    <div id="loader" style="display:none;">
                                        <div class="skeleton-loader" style="height:95%">
                                            <div class="skeleton-body">
                                                <div class="skeleton-line"></div>
                                                <div class="skeleton-line"></div>
                                                <div class="skeleton-line"></div>
                                                <div class="skeleton-line"></div>
                                                <div class="skeleton-line"></div>
                                                <div class="skeleton-line"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>

                <div class="card col-md-9" id="singleForm">
                    <div id="formLoader" style="display:none;">
                        <div class="skeleton-loader" style="height:95%;width:100%;">
                            <div class="skeleton-body">
                                <div class="skeleton-line"></div>
                                <div class="skeleton-line"></div>
                                <div class="skeleton-line"></div>
                                <div class="skeleton-line"></div>
                                <div class="skeleton-line"></div>
                                <div class="skeleton-line"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a href="/judge/index">
            <button class='btn btn-dark btn-fill'>
                <i class='nc-icon nc-button-power'></i>
            </button>
        </a>
    </div>



    @endsection

    @push('js')
    <script>
    $(document).ready(function() {
        var id = {{$candidate->ordered}};
        $.ajax({
            url: '/api/candidate/' + id,
            method: 'GET',
            beforeSend: function() {
                $("#loader").show();
            },
            success: function(response) {
                $('#candidateContainer').html(response);
                $("#loader").hide();
            },

            error: function(error) {
                console.error('Error:', error);
            }
        });
    });

    $(document).ready(function() {
        $.ajax({
            url: "{{ route('single') }}",
            method: 'GET',
            beforeSend: function() {
                $("#quickloader").show();
            },
            success: function(response) {
                $('#quickAccess').html(response);
                $("#quickloader").hide();
            },

            error: function(error) {
                console.error('Error:', error);
            }
        });
    });

    $(document).ready(function() {
        var id = {{  $candidate->ordered }}
        $.ajax({
            url: '/api/singleForm/' + id,
            method: 'GET',
            beforeSend: function() {
                $("#formLoader").show();
            },
            success: function(response) {
                $('#singleForm').html(response);
                $("#formLoader").hide();
            },

            error: function(error) {
                console.error('Error:', error);
            }
        });
    });
    </script>
    @endpush