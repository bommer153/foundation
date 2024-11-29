<div class="col-md-6">
        <div class="card card-user">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="thumnail" src="{{ asset('images/mrmstcu/'.$candidate->img) }}" width="150">
                    </div>
                    <div class="col-md-6">
                        <h4>{{ $candidate->name }}</h4>
                        <h4>{{ $candidate->college }}</h4>
                        <a href="{{ route('candidate.show',['id'=>$candidate->id]) }}"><button class="btn btn-primary btn-sm">View</button></a>                  
                    </div>
                </div>  
            </div>
        </div>
    </div>