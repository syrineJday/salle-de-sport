<?php

namespace App\Http\Controllers\Admin;

use App\Models\Salle;
use Illuminate\Http\Request;
use App\Http\Requests\SalleRequest;
use App\Http\Controllers\Controller;


class SalleController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salles = Salle::paginate(10);

        return view('admin.salles.index', compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalleRequest $request)
    {
        Salle::create($request->all());

        return redirect()->route('admin.salles.index');
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
    public function edit(Salle $salle)
    {
        return view('admin.salles.edit', compact('salle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalleRequest $request, Salle $salle)
    {
        $salle->update($request->all());

        return redirect()->route('admin.salles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salle $salle)
    {
        $salle->delete();

        return response()->json(['deleted' => "Salle a été supprimé avec succée"], 200);
    }
}
