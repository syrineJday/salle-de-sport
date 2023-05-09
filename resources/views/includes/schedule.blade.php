<div class="schedule-area pt-130 pb-130">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title-2 bar-theme-color text-center mb-35">
						<h3>
                            Notre horaire de cours Nous faisons parfaitement l'horaire
						</h3>
						<span>Schedule</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="schedule-table">
						<table class="table bg-white">
							<thead>
							<tr>
								<th>Jours</th>
                                @foreach($jours as $jour)
								<th></th>
                                @endforeach
							</tr>
                        </thead>
                        <tbody>
                            @foreach($jours as $jour)
							<tr>
								<td class="day">{{ $jour }}</td>
                                @foreach($seances as $seance)
                                @if($seance->day == $jour)
								<td class="active">
									<h4>{{ $seance->activity->label }}</h4>
									<p>
                                        {{ $seance->startTime }} - {{ $seance->endTime }}
                                    </p>
									<div class="hover">
										<h4>{{ $seance->activity->label }}</h4>
										<p>
                                            {{ $seance->startTime }} - {{ $seance->endTime }}
                                        </p>
										<span>
                                            {{ $seance->user->nom }}
                                            {{ $seance->user->prenom }}
                                        </span>
									</div>
								</td>
                                @endif
                                @endforeach
							</tr>
                            @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>