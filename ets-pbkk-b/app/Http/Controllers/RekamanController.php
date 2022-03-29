<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekaman;

class RekamanController extends Controller
{
    //
    public function index(){
        return view('rekaman', [
            "title" => "Rekaman Medis",
            //"articles" =>  Article::all()
            "rekamans" =>  Rekaman::with(['dokter', 'pasien'])->latest()->get()
        ]);
    }

    public function content(Rekaman $rekaman){
        return view('konten', [
            "rekaman" => $rekaman
        ]);
    }
}
