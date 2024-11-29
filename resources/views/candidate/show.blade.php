@extends('layouts.app', ['activePage' => 'candidate', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton'
=> 'laravel'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row" id="candidateContainer">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        @include('alerts.success',['key'=>'success'])
                        @include('alerts.errors',['key'=>'error'])
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <img class="thumnail" src="{{ asset('images/mrmstcu/'.$candidate->img) }}" width="150" style="border-radius:10px;">
                                </center>
                                <form action="{{ route('candidate.image',['id'=>$candidate->id]) }}" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)"><br><br>
                                    <button class="btn btn-primary">Change Picture</button>
                                </form>
                               
                                    <img class="thumnail" id="preview" src="#" alt="Preview" style="display: none; max-width: 300px; height: auto;border-radius:10px;">
                                
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('candidate.update',['id'=>$candidate->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            value="{{ $candidate->name }}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>College</label>
                                        <input type="text" name="college" class="form-control" placeholder="College"
                                            value="{{ $candidate->college }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="Mr" {{ $candidate->gender === "Mr" ? "Selected" : "" }}>Male
                                            </option>
                                            <option value="Ms" {{ $candidate->gender === "Ms" ? "Selected" : "" }}>
                                                Female</option>
                                        </select>

                                        <div class="form-group">
                                            <label>No</label>
                                            <input type="text" name="no" class="form-control" placeholder="no"
                                                value="{{ $candidate->no }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Order</label>
                                            <input type="text" name="ordered" class="form-control" placeholder="order"
                                                value="{{ $candidate->ordered }}">
                                        </div>

                                        <button class="btn btn-primary">Save Change</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
function previewImage(event) {
    const preview = document.getElementById('preview');
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}
</script>
@endpush