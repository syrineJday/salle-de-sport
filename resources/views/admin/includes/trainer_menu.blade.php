<li class="nav-item">
    <a class="nav-link @if(Request::is('home')) @else collapsed @endif" href="{{ route('home') }}">
        <i class="bi bi-grid"></i>
        <span>Accueil</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link @if(Request::is('admin/seances*')) @else collapsed @endif" href="{{ url('admin/seances') }}">
        <i class="bi bi-grid"></i>
        <span>Séances</span>
    </a>
</li>


