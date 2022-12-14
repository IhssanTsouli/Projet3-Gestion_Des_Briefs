<?php

namespace App\Http\Controllers;
use App\Models\Brief;

use Illuminate\Http\Request;

class BriefsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $briefs=Brief::all();
        return view('pages.index',compact('briefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brief=Brief::create([
            'NomBrief'=>$request->NomBrief,
            'DateLivraison'=>$request->DateLivraison,
            'DateRecuperation'=>$request->DateRecuperation
        ]);
        
        return redirect()->route('gestionbriefs.index');
    
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
    public function edit($id)
    {
        $taches=Brief::find($id)->tache;
        $brief=Brief::find($id);
        return view('pages.update',compact('taches','brief'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brief=Brief::findOrFail($id);
        $brief->NomBrief=$request->input('NomBrief');
        $brief->DateLivraison=$request->input('DateLivraison');
        $brief->DateRecuperation=$request->input('DateRecuperation');
        $brief->save();
        return redirect()->route('gestionbriefs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sup=Brief::findOrFail($id);
        $sup->delete();
        return redirect()->route('gestionbriefs.index');

    
    }
}
