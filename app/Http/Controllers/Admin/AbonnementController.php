<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use App\Models\AbonnementActivity;
use App\Http\Controllers\Controller;
use App\Http\Requests\AbonnementRequest;

class AbonnementController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnements = Abonnement::paginate(10);
        return view('admin.abonnements.index', compact('abonnements'));
    }

    public function abonnees(Abonnement $abonnement){
        $abonnees  = $abonnement->users()->get();
        
        return view('admin.abonnements.abonnees', compact('abonnees', 'abonnement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ["1 MOIS","2 MOIS","3 MOIS","4 MOIS","5 MOIS","6 MOIS","7 MOIS","8 MOIS","9 MOIS","10 MOIS","11 MOIS","AN",];
        return view('admin.abonnements.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AbonnementRequest $request)
    {
        $abonnemnt = Abonnement::create($request->all());


        foreach($request->activity_id as $activity){
            $abonnementActivity = new AbonnementActivity();

            $abonnementActivity->activity_id = $activity;
            $abonnementActivity->abonnement_id = $abonnemnt->id;

            $abonnementActivity->save();
        }

        return redirect()->route('admin.abonnements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Abonnement $abonnement)
    {
        return view('admin.abonnements.show', compact('abonnement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonnement $abonnement)
    {
        $types = ["1 MOIS","2 MOIS","3 MOIS","4 MOIS","5 MOIS","6 MOIS","7 MOIS","8 MOIS","9 MOIS","10 MOIS","11 MOIS","AN"];
        $activitiesID = [];

        foreach($abonnement->activities()->get() as $activity){
            $activitiesID[] = $activity->id;
        }
        return view('admin.abonnements.edit', compact('abonnement', 'types', 'activitiesID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonnement $abonnement)
    {
        $abonnement->update($request->all());

        foreach($abonnement->activities()->get() as $activity){

            $abonnement->activities()->detach($activity->id);
        }

        foreach($request->activity_id as $activity){
            $abonnementActivity = new AbonnementActivity();

            $abonnementActivity->activity_id = $activity;
            $abonnementActivity->abonnement_id = $abonnement->id;

            $abonnementActivity->save();
        }

        return redirect()->route('admin.abonnements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
