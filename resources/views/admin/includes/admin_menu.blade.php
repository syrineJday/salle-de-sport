<li class="nav-item">
    <a class="nav-link @if(Request::is('home')) @else collapsed @endif" href="{{ route('home') }}">
        <i class="bi bi-grid"></i>
        <span>Accueil</span>
    </a>
</li>
<li class="nav-item">
    {{-- helpers --}}
    <a class="nav-link @if(Request::is('admin/users') && request()->has('role')) @else collapsed @endif" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-journal-text"></i><span>Utilisateurs</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
        <li>
            <a href="{{ route('admin.users.index', ['role' => 'abonne']) }}">
                <i class="bi bi-circle"></i><span>Abonnées</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.users.index', ['role' => 'entraineur']) }}">
                <i class="bi bi-circle"></i><span>Entraineurs</span>
            </a>
        </li>
    </ul>
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
    <a class="nav-link @if(Request::is('admin/categories*')) @else collapsed @endif" href="{{ url('admin/categories') }}">
        <i class="bi bi-grid"></i>
        <span>Catégories</span>
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

