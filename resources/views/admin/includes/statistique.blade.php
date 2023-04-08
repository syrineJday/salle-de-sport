@if(Auth::user()->isAdmin())
<div class="row">
    <div class="col-xxl-3 col-md-6">
        <a href="{{ route('admin.etudiants.index') }}" class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Etudiants </h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ App\Models\User::where('grade', 'etudiant')->count() }}</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xxl-3 col-md-6">
        <a href="{{ route('admin.enseignants.index') }}"  class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Enseignant </h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ App\Models\User::where('grade', 'enseignant')->count() }}</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="card info-card sales-card">
            <a href="{{ route('admin.matieres.index') }}"  class="card-body">
                <h5 class="card-title">Matières </h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ App\Models\Matiere::count() }}</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="card info-card sales-card">
            <a href="{{ route('admin.examens.index') }}"  class="card-body">
                <h5 class="card-title">Examens </h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ App\Models\Examen::count() }}</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@else 
<div class="row">
    <div class="col-xxl-3 col-md-6">
        <div class="card info-card sales-card">
            <a href="{{ route('enseignant.matieres.index') }}"  class="card-body">
                <h5 class="card-title">Matiéres </h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ App\Models\Matiere::count() }}</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endif