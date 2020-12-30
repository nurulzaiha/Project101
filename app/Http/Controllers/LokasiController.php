<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lokasi;

class LokasiController extends Controller
{
    public function index(Request $request){

    
    $lokasis = \App\Models\lokasi::all(); 
    return view('project.index',compact('lokasis'));

    }

    public function create(){

   
        //resources/views/lokasis/create.blade.php
        return view('project.create');
    }

    public function store(Request $request){

        $lokasi = new Lokasi();
        $lokasi->Kod = $request->Kod;
        $lokasi->NamaLokasi= $request-> NamaLokasi;
        $lokasi->CawKod= $request-> CawKod;
       // $training->user_id= auth()->user()->id;
        $lokasi->save();

        return redirect()->back();

    }

    public function show(Lokasi $lokasi){
        
        return view('project.show', compact('lokasi'));
    }


    public function forceDelete(Lokasi $lokasi){
        
        $lokasi->forceDelete();
     
        return redirect()->route('lokasi:list');

    }

   
}
