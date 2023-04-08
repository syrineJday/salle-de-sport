
<li class="nav-item">
    <a class="nav-link @if(Request::is('matieres*')) @else collapsed @endif" href="{{ route('matieres.index') }}">
        <i class="bi bi-grid"></i>
        <span>Matières</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('cours*')) @else collapsed @endif" href="{{ route('cours.index') }}">
        <i class="bi bi-grid"></i>
        <span>Cours</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('notes*')) @else collapsed @endif" href="{{ route('notes.index') }}">
        <i class="bi bi-grid"></i>
        <span>Notes</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link @if(Request::is('paiement*')) @else collapsed @endif" href="{{ route('paiement.index') }}">
        <i class="bi bi-grid"></i>
        <span>Paiement</span>
    </a>
</li>