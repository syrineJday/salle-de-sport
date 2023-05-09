<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->role == "abonne"){
            $users = User::whereJsonContains('role->ROLE_ABONNE', true)->paginate(10);
        } else {
            $users = User::whereJsonContains('role->ROLE_ENTRAINEUR', true)->paginate(10);

        }
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->except('password'));



        $user->password = Hash::make($request->password);
        $user->role = json_encode(['ROLE_ENTRAINEUR' => true]);

        if($request->hasFile('photo')){
            $user->photo = $request->photo->store('images');
        }
        $user->save();

        return redirect()->route('admin.users.index', ['role' => 'entraineur']);

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
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->except('password'));

        if(isset($request->password)){
            $user->password = Hash::make($request->password);
        }

        if($request->hasFile('photo')){
            $user->photo = $request->photo->store('images');
        }
        
        $user->save();


        return redirect()->route('admin.users.index', ['role' => 'entraineur']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['deleted' => "Entraineur a été supprimé avec succée"], 200);
    }
}
