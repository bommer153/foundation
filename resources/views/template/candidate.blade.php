<div class="col-md-12">
    <a href="{{ asset('storage/mrmstcu2023/'.$candidate->img) }}" data-lightbox="example-1">
        <img class="thumnail" src="{{ asset('storage/mrmstcu2023/'.$candidate->img) }}"
            style='width:100%;box-shadow: 1px 1px 5px black;'>
    </a>
</div>
<div class="col-md-12">


    <div class="row">
        <div class="col-md-6">
            <br>
            <a href="{{route('home.judge',['id'=>$previous])}}">
                <button class='btn btn-primary btn-fill' style='float:right;'>
                    <i class='nc-icon nc-stre-left'></i>
                </button>
            </a>
        </div>

        <div class="col-md-6">
            <br>
            <a href="{{route('home.judge',['id'=>$next])}}">
                <button class='btn btn-primary btn-fill' style='float:left;'>
                    <i class='nc-icon nc-stre-right'></i>
                </button>
            </a>
        </div> 
        <div class="col-md-12">

            <h2 class=''>{{ $candidate->gender }}. {{ $candidate->name }}</h2>
            <h5 class="description">
                <b>{{ $candidate->college }}</b>
            </h5>

        </div>
    </div>
</div>