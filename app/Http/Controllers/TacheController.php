<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Http\Requests\TacheRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class TacheController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $user_id)
    {
        return view('tache.create',['user_id'=>$user_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TacheRequest $request,string $id)
    {
        try {

            Tache::create([
                'titre'=>$request['titre'],
                'description'=>$request['description'],
                'statut'=>$request['statut'],
                'date_echeance'=>$request['date_echeance'],
                'user_id'=>$id,
            ]);
            $id = Auth::user()->id;
            return redirect()->route('dashboard',['id'=>$id])->with('success','nouvelle tache');
        } catch (\Throwable $th) {
            alert('erreur lor de l ajout de la tache',$th);
            return redirect()->route('dashboard',['id'=>$id]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
           $tache = Tache::find($id);
           $creator = User::find($tache->user_id);
           return view('tache.show',['tache'=>$tache,'user'=>$creator]);
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
            $user = Auth::user();
            $tache = Tache::find($user->id);
        return view('tache.edith',['user'=>$user,'tache'=>$tache]);
        } catch (\Throwable $th) {
            alert('erreur',$th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TacheRequest $request, string $id)
    {
        try {
            $tache = Tache::find($id);
             $tache->update($request->all());
             $id = Auth::user()->id;

         return redirect()->route('dashboard', ['id' => $id])->with('success','modification reussie');

        } catch (\Throwable $th) {
            return redirect()->route('dashboard', ['id' => $id])->with('error','erreur lors de la modification');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            Tache::destroy($id);
            return redirect()->route('auth.index',['id'=>Auth::user()->id])->with('success','tache supprimer avec succes');
        } catch (\Throwable $th) {
            //throw $th;
        }

    }
}
