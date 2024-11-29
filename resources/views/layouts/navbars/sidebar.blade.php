<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                {{ __("Foundation 2023") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Rank") }}</p>
                </a>
            </li>

            <li class="nav-item @if($activePage == 'silouette') active @endif">
                <a class="nav-link" href="{{route('score.sil')}}">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>{{ __("Silouette") }}</p>
                </a>
            </li>

            <li class="nav-item">              
                <div class="collapse  show " id="laravelExamples">
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'judge') active @endif">
                            <a class="nav-link" href="{{route('judge.tally')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("Judge") }}</p>
                            </a>
                        </li>                      
                    </ul>
                </div>
            </li>

            <li class="nav-item @if($activePage == 'candidate') active @endif">
                <a class="nav-link" href="{{route('candidate.index')}}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>{{ __("Candidate") }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
