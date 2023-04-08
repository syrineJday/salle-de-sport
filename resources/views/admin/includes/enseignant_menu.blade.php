<li class="nav-item">
    <a class="nav-link @if(Request::is('home')) @else collapsed @endif" href="{{ route('home') }}">
        <i class="bi bi-grid"></i>
        <span>Accueil</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('enseignant/matieres*')) @else collapsed @endif" href="{{ route('enseignant.matieres.index') }}">
        <i class="bi bi-grid"></i>
        <span>Matières</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('enseignant/cours*')) @else collapsed @endif" href="{{ route('enseignant.cours.index') }}">
        <i class="bi bi-grid"></i>
        <span>Cours</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('enseignant/cours*')) @else collapsed @endif" href="{{ route('enseignant.notes.index') }}">
        <i class="bi bi-grid"></i>
        <span>Notes</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('admin/examens*')) @else collapsed @endif" href="{{ route('admin.examens.index') }}">
        <i class="bi bi-grid"></i>
        <span>Examens</span>
    </a>
</li>