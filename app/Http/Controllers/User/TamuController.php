<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function simpanTamu(Request $request){
        $nama = $request->nama;
        $telepon = $request->telepon;
        $alamat = $request->alamat;
        $keperluan = $request->keperluan;
        $tujuan = $request->tujuan;
        $email = $request->email;

        $data = new User();
        $data->nama = $nama;
        $data->tlp=$telepon;
        $data->alamat=$alamat;
        $data->keperluan=$keperluan;
        $data->tujuan=$tujuan;
        $data->email=$email;
        $data->password = Hash::make('rahasisa');
        $data->save();

        return redirect('/')->with('status', 'Data Berhasil Di Simpan'); 

    }
}
