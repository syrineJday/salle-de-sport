<li class="nav-item">
    <a class="nav-link @if(Request::is('home')) @else collapsed @endif" href="{{ route('home') }}">
        <i class="bi bi-grid"></i>
        <span>Accueil</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link @if(Request::is('admin/users') && request()->get('role') == "abonne") @else collapsed @endif" href="{{ route('admin.users.index', ['role' => 'abonne']) }}">
        <i class="bi bi-grid"></i>
        <span>Abonnées</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('admin/users') && request()->get('role') == "entraineur") @else collapsed @endif" href="{{ route('admin.users.index', ['role' => 'entraineur']) }}">
        <i class="bi bi-grid"></i>
        <span>Entraineurs</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('admin/salles')) @else collapsed @endif" href="{{ url('admin/salles') }}">
        <i class="bi bi-grid"></i>
        <span>Salles</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('admin/activities')) @else collapsed @endif" href="{{ url('admin/activities') }}">
        <i class="bi bi-grid"></i>
        <span>Activités</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link @if(Request::is('admin/seances*')) @else collapsed @endif" href="{{ url('admin/seances') }}">
        <i class="bi bi-grid"></i>
        <span>Séances</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('admin/abonnements*')) @else collapsed @endif" href="{{ url('admin/abonnements') }}">
        <i class="bi bi-grid"></i>
        <span>Abonnements</span>
    </a>
</li>

