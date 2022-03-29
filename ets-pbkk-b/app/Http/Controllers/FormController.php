<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function input()
    {
        return view('input', [
            'pasiens' => Pasien::all(),
            'dokters' => Dokter::all()
        ]);
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => ':attribute ini wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
        ];
        
        $this->validate($request,[
            'pasien' => 'required',
            'dokter' => 'required',
            'kondisi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'suhu' => 'required|numeric|between:35.00,45.50'
        ],$messagesError);

        //$request->gambar->store('images', 'public');

        //$file = $request->file('gambar');
        //$destinationPath = 'public/img/';
        //$originalFile = $file->getClientOriginalName();
        //$file->move($destinationPath, $originalFile);

        //$imageName = time().'.'.$request->gambar->extension();  
     
        //$request->gambar->move(public_path('images'), $imageName);

        $img = $request->file('gambar');
        $name = $img->getClientOriginalName();
        $uploaded = $img->move('public/img', $name);
 		
        return view('proses',['data' => $request, 'uploaded'=>$uploaded]);
    }
}
