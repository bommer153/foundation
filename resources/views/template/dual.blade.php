<div class="row">
    @foreach ($candidateList as $canListF)
    <div class="col-md-1">
        <a href="{{route('home.judge',['id'=>$canListF->ordered])}}">
            <img src="{{ asset('image/mrmstcu2023/'.$canListF->img) }}" width="30" height="30"
                style='border-radius:100px;'><span class="badge rounded-circle"
                style='background:purple;position:absolute;top:55%;right:55%'>{{ $canListF->no }}</span>
        </a>
    </div>    
    @endforeach
</div>