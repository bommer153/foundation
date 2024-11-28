<div class="sidebar" data-image="{{ asset('light-bootstrap/img/ivan.jpg') }}" style="background-image:url('{{ asset('light-bootstrap/img/ivan.jpg') }}');background-size:cover;" data-color="red">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
        <img class='avatar' src="{{asset('light-bootstrap')}}/img/candidate/pageant2023logo.png" style='position:relative;left:-15px;height:190px;'>
            <a href="{{ route('home.judgex') }}" class="simple-text">
             <hr>
             {{ auth()->user()->name; }}
            </a>
        </div> 
        
    
             
      
          
        
        <!-- -->
       
    </div>
</div>
