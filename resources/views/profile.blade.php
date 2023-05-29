@extends('layouts.master')

@section('content')
    <main>
        
        <div class="contact-area pt-130 pb-130">
            <div class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-5">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="row s">
                    <div class="col-xl-4">
                        <div class="trainer-details-thumb mb-md-50 mb-xs-50 d-flex align-items-center">
                            <img src="{{ asset('storage/'.Auth::user()->photo) }}" alt="thumb" style="width: 100px;height: 100px;border-radius: 50%;">
                            <h3 class="mb-0 pb-0 ml-2">
                                {{ Auth::user()->nom }}
                                {{ Auth::user()->prenom }}
                            </h3>
                        </div>
                        <div class="trainer-details-content pl-0">
                            <div class="trainer-info mt-50 mb-40">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Email</h5>
                                    <span>{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                            <div class="trainer-info mb-40">
                                <div class="info-icon">
                                    <i class="flaticon-whatsapp"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Téléphone</h5>
                                    <span class="heading-color">{{ Auth::user()->numTel }}</span>
                                </div>
                            </div>
                            <div class="trainer-info">
                                <div class="info-icon">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Location</h5>
                                    <span class="heading-color">{{ Auth::user()->adresse }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="review-tab-wrapper">
                            <div class="nav review-tab" id="review-tabs" role="tablist">
                                <a class="show active" id="r-tabs-1" data-toggle="tab" href="#mesInformations" role="tab" aria-controls="mesInformations" aria-selected="true">
                                    Mes informations
                                </a>
                                <a id="r-tabs-2" data-toggle="tab" href="#abonnements" role="tab" aria-controls="abonnements" aria-selected="false" class="">
                                    Mes abonnements
                                </a>
                                <a id="r-tabs-3" data-toggle="tab" href="#mesSeances" role="tab" aria-controls="mesSeances" aria-selected="false" class="">
                                    Mes séances réservé
                                </a>
                            </div>
                            <div class="tab-content review-tab-content" id="review-tabs-content">
                                <div class="tab-pane fade active show " id="mesInformations" role="tabpanel" aria-labelledby="r-tabs-1">
                                    <div class="row">

                                        <div class="contact-form col-12">
                                            <form action="{{ route('profile.update') }}" method="post" class="row" enctype="multipart/form-data">
                                                @csrf   
                                                @method('put')
                                                <div class="col-6">
                                                    <div class="input-wrap input-icon icon-name">
                                                        <input type="text" placeholder="Nom" value="{{ Auth::user()->nom }}" name="nom">
                                                        @error('nom')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">

                                                    <div class="input-wrap input-icon icon-name">
                                                        <input type="text" placeholder="Prénom" value="{{ Auth::user()->prenom }}" name="prenom">
                                                        @error('prenom')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-wrap input-icon icon-name">
                                                        <input type="number" placeholder="Numéro de téléphone" value="{{ Auth::user()->numTel }}" name="numTel">
                                                        @error('numTel')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                               
                                                <div class="col-6">
                                                    <div class="input-wrap input-icon icon-name">
                                                        <input type="number" placeholder="Carte d'identité national" value="{{ Auth::user()->cin }}" name="cin">
                                                        @error('cin')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">

                                                    <div class="input-wrap  ">
                                                        <input type="text" placeholder="Adresse" value="{{ Auth::user()->adresse }}" name="adresse">
                                                        @error('adresse')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-wrap input-icon icon-name">
                                                    
                                                        <input type="date" placeholder="Date de naissance" value={{ Auth::user()->date_naissance }} name="date_naissance">
                                                        @error('date_naissance')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-wrap input-icon icon-name">
                                                        <input type="text" placeholder="E-mail adresse" value="{{ Auth::user()->email }}" name="email">
                                                        @error('email')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">

                                                    <div class="input-wrap ">
                                                        <label for="">Photo de profile</label>
                                                        <input type="file"  name="photo">
                                                        @error('photo')
                                                            <p>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col">

                                                    <button type="submit" class="btn btn-gra">Modifier<i class="fas fa-angle-double-right"></i>
                                                    </button>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="abonnements" role="tabpanel" aria-labelledby="r-tabs-2">
                                    <div class="pricing-area bg-off-white pt-50 pb-100">
                                        <div class="container">
                                            <div class="row">
                                                <div class="schedule-table">
                                                    <table class="table bg-white">
                                                        <thead>
                                                            <tr>
                                                                <th>Label</th>
                                                                <th>Prix</th>
                                                                <th>Type</th>
                                                                <th>Activités inclus</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($abonnements as $abonnement)
                                                                <tr>
                                                                    <td>{{ $abonnement->label }}</td>
                                                                    <td>{{ $abonnement->prix }}DT</td>
                                                                    <td>{{ $abonnement->type }}</td>
                                                                    <td>
                                                                        <ul>
                                                                            @foreach($abonnement->activities()->get() as $activity)
                                                                                <li class="activity_inclu">
                                                                                    {{ $activity->label }}
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </td>
                                                                    <td class="pricing-wrap">
                                                                        <a href="{{ route('abonnements.schedule', ['abonnement' => $abonnement]) }}" class="order-btn">
                                                                            Voir emploi <i class="fas fa-angle-double-right"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="mesSeances" role="tabpanel" aria-labelledby="r-tabs-3">
                                    <div class="schedule-table">
                                        <table class="table bg-white">
                                            <thead>
                                                <tr>
                                                    <th>Jour</th>
                                                    <th>Temps début</th>
                                                    <th>Temps fin</th>
                                                    <th>Entraineur</th>
                                                    <th>Salle</th>
                                                    <th>Activité</th>
                                                    <th>Aujourd'hui</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($reservedSeances as $seance)
                                                    <tr>
                                                        <td>{{ $seance->day }}</td>
                                                        <td>{{ $seance->startTime }}</td>
                                                        <td>{{ $seance->endTime }}</td>
                                                        <td>{{ $seance->user->nom }} {{ $seance->user->prenom }}</td>
                                                        <td>{{ $seance->salle->label }}</td>
                                                        <td>{{ $seance->activity->label }}</td>
                                                        <td>
                                                            @php 
                                                                $currentDay = date('D');
                                                            @endphp 
                                                            @if($days[$seance->day] == $currentDay)
                                                                Ce jour
                                                            @else 
                                                                ---------
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection