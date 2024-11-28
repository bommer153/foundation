<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Candidate </a>
      
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
                          
                
                
                       
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Log out') }} </a>
                            </form>
                           
                 
                          
           
        </div>
    </div>
</nav>