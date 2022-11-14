<?php

namespace App\Http\Controllers;
use App\Models\Tache;

use Illuminate\Http\Request;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $id=$request->input('brief_id');
      
        return view('pages.createT',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tache=Tache::create([
            'NomTache'=>$request->NomTache,
            'DateDebut'=>$request->DateDebut,
            'DateFin'=>$request->DateFin,
            'Description'=>$request->Description,
            'brief_id'=>$request->briefs_id
        ]);
        
        return redirect('gestionbriefs/'.$request->briefs_id."/edit");
    
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
        $tache=Tache::find($id);
        return view('pages.updateT',['taches'=>$tache]);

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
        $tache=Tache::findOrFail($id);
        $tache->NomTache=$request->input('NomTache');
        $tache->DateDebut=$request->input('DateDebut');
        $tache->DateFin=$request->input('DateFin');
        $tache->Description=$request->input('Description');
        $tache->brief_id=$request->input('briefs_id');
        $tache->save();
        return redirect('gestionbriefs/'.$request->briefs_id."/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $sup=Tache::findOrFail($id);
        
        $sup->delete();
        return back();
    }
}
