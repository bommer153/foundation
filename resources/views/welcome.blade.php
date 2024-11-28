@extends('layouts/app', ['activePage' => 'welcome', 'title' => 'Taguig City University'])

@section('content')
    <div class="full-page section-image" data-color="red" style="background-image:url('{{ asset('light-bootstrap/img/tcu2.jpg') }}') " data-image="">
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="text-white text-center">TCU FOUNDATION 2024 v1.1.3</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush