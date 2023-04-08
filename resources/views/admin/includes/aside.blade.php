<aside id="sidebar" class="sidebar">
    <ul id="sidebar-nav" class="sidebar-nav">

        @if(Auth::user()->isAdmin())
            @include('admin.includes.admin_menu')
        @elseif(Auth::user()->isEnseignant())
           
            @include('admin.includes.enseignant_menu')
        @else 
            @include('admin.includes.etudiant_menu')
        @endif
    </ul>

</aside>