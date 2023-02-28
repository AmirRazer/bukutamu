<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminTamuController extends Controller
{
    
        public function index(){
            $data = User::all();

            return view('Admin.Tamu.index',compact('data'));
        }
        public function formTambah(){
            return view('Admin.Tamu.formTambah');
        }
        public function simpanData(Request $request){
            $nama = $request->nama;
            $telepon = $request->telepon;
            $alamat = $request->alamat;
            $keperluan = $request->keperluan;
            $tujuan = $request->tujuan;
            $email = $request->email;

            $data = new User;
            $data->nama = $nama;
            $data->tlp = $telepon;
            $data->alamat = $alamat;
            $data->keperluan = $keperluan;
            $data->tujuan = $tujuan;
            $data->email = $email;
            $data->password = Hash::make('rahasia');
            
            $data->save();

            return redirect('admin/tamu')->with('status','Data Berhasil Di simpan');
        }
    public function formEdit($id){
        $data = User::find($id);
        return view('admin.Tamu.formEdit',compact('data'));
    }
    public function updateTamu(Request $request){
       
        $id = $request->id;
        $nama = $request->nama;
        $telepon = $request->telepon;
        $alamat = $request->alamat;
        $keperluan = $request->keperluan;
        $tujuan = $request->tujuan;
        $email = $request->email;

        $data = User::find($id);
        $data->nama = $nama;
        $data->nama = $nama;
        $data->tlp = $telepon;
        $data->alamat = $alamat;
        $data->keperluan = $keperluan;
        $data->tujuan = $tujuan;
        $data->email = $email;
        
        $data->update();
        return redirect('admin/tamu')->with('status','Data Berhasil Di Update');
    }

    public function hapusTamu(Request $request){
        $id = $request->id;
        $data = User::find($id);
        $data-> delete();
        
        return redirect('admin/tamu')->with('status','Data Berhasil Di Di Hapus');
    }
}
