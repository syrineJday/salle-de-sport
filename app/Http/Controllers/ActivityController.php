<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seance;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        $jours = ['lundi', 'mardi','mercredi', 'jeudi','vendredi','samedi','dimanche'];
        $seanceIds = [];
        $trainersIds = [];
        foreach($activity->seances()->get() as $seance){
            $seanceIds[] = $seance->id;
            $trainersIds[] = $seance->user->id;
        }

        $seances =  Seance::whereIn('id', $seanceIds)->get();
        $trainers =  User::whereIn('id', $trainersIds)->get();

        return view('activities.show', compact('activity', 'jours', 'seances', 'trainers'));
    }
}
