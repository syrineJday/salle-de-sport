<?php

namespace App\Http\Controllers\Admin;

use App\Models\Seance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SeanceController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdmin()){

            $seances = Seance::paginate(10);
        } 
        else {
            $seances = Auth::user()->seances()->paginate(10);
        }   

        return view('admin.seances.index', compact('seances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Seance::create($request->all());

        return redirect()->route('admin.seances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        return view('admin.seances.edit', compact('seance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        $seance->update($request->all());

        return redirect()->route('admin.seances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        $seance->delete();

        return response()->json(['deleted' => "Séance a été supprimé avec succée"], 200);
    
    }
}
