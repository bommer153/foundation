@extends('layouts.app', ['activePage' => 'candidate', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton'
=> 'laravel'])

@section('content')
<div class="content">
    <div class="container-fluid">
        

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
    
        <div id="loader" style="display:none;">
            <div class="skeleton-loader" style="height:95%;width:100%;">
                <div class="skeleton-body">
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                    <div class="skeleton-line"></div>
                </div>
            </div>
        </div>

       

        <div class="row" id="candidateContainer">

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('js')
    <script>
        

    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('candidate.list') }}",
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
                },
            });

            $('#formOpen').click(function(){
                alert('ayawngmodal');
                $('#myModal').modal('show');
            });
        });

       
    </script>
@endpush