<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\alert;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        try {

            $img = $request->file('image');
            $nomIm = $request['email'].'.'.$img->getClientOriginalExtension();
            $chemin = Storage::disk('public')->putFileAs('images',$img,$nomIm);
            $photoUrl = Storage::url($chemin);
            User::create([
                'name'=>$request['name'],
                'email'=>$request['email'],
                'photoUrl'=>$photoUrl,
                'password'=>Hash::make($request['password'])
            ]);
            return redirect()->route('auth.index');
        } catch (\Throwable $th) {
            alert('erreur',$th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::find($id);
        return view('user.show',['user'=>$user]);
        } catch (\Throwable $th) {
            alert('erreur',$th);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $user = User::find($id);
            return view('user.edith',['user'=>$user]);
        } catch (\Throwable $th) {
            return alert('erreur',$th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $user = User::find($id);
            Storage::disk('public')->delete($user->photoUrl);
            $img = $request->file('image');
            $nomIm = $request['email'].'.'.$img->getClientOriginalExtension();
            $chemin = Storage::disk('public')->putFileAs('images',$img,$nomIm);
            $photoUrl = Storage::url($chemin);
            $user->update([
                'name'=>$request['name'],
                'email'=>$request['email'],
                'photoUrl'=>$photoUrl
            ]);
            return view('user.show',['user'=>$user]);
        } catch (\Throwable $th) {
            return alert('erreur',$th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::find($id);
            $user->delete();
        } catch (\Throwable $th) {
            alert('erreur',$th);
        }
    }
}
