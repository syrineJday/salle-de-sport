<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnements = Auth::user()->abonnements()->get();
        $reservedSeances = Auth::user()->seancesReserver()->get();
        $days = [
            "lundi" => "Mon",
            "mardi" => "Tue",
            "mercredi" => "Wed",
            "jeudi" => "Thur",
            "vendredi" => "Fri",
            "samedi" => "Sat",
            "dimanche" => "Sun",
        ];
        return view('profile', compact('abonnements',  'reservedSeances','days'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Auth::user()->update($request->all());

        if($request->hasFile('photo')){
            Auth::user()->update([
                "photo" => $request->photo->store('images')
            ]);
        }

        return redirect('profile')->with('success', 'Votre profile a été modifié avec succée');
    }

}
