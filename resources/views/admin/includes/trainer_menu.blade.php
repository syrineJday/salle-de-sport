{{-- <li class="nav-item">
    <a class="nav-link @if(Request::is('home')) @else collapsed @endif" href="{{ route('home') }}">
        <i class="bi bi-grid"></i>
        <span>Accueil</span>
    </a>
</li> --}}

<li class="nav-item">
    <a class="nav-link @if(Request::is('entraineur/seances*')) @else collapsed @endif" href="{{ route('entraineur.seances.index') }}">
        <i class="bi bi-grid"></i>
        <span>Séances</span>
    </a>
</li>


