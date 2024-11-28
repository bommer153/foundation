<div class="row">
    @foreach ($candidateListM as $canListM)
    <div class="col-md-1">
        <a href="{{route('home.judge',['id'=>$canListM->ordered])}}">
            <img src="{{ asset('storage/mrmstcu2023/'.$canListM->img) }}" width="30" height="30"
                style='border-radius:100px;'><span class="badge bg-primary rounded-circle"
                style='position:absolute;top:55%;right:55%'>{{ $canListM->no }}</span>
        </a>
    </div>
    @endforeach
</div><br>
<div class="row">
    @foreach ($candidateListF as $canListF)
    <div class="col-md-1">
        <a href="{{route('home.judge',['id'=>$canListF->ordered])}}">
            <img src="{{ asset('storage/mrmstcu2023/'.$canListF->img) }}" width="30" height="30"
                style='border-radius:100px;'><span class="badge rounded-circle"
                style='background:purple;position:absolute;top:55%;right:55%'>{{ $canListF->no }}</span>
        </a>
    </div>
    @endforeach
</div>