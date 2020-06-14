<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswasController extends Controller
{
    //show mahasiswas
    public function index(){
        $mahasiswas=Mahasiswa::get()->all();
        return view('mahasiswa.index',['mahasiswas'=>$mahasiswas]);
    }

    public function show(Mahasiswa $mahasiswa){
       // $result=Mahasiswa::findorfail($mahasiswa);
        return view('mahasiswa.show',['mahasiswa'=>$mahasiswa]);
    }

    //show form add
    public function create(){
        return view('mahasiswa.form-pendaftaran');
    }

    //proccess add
    public function store(Request $request){
        $validateData=$request->validate([
            'nim'=>'required|size:10',
            'nama'=>'required',
            'jenis_kelamin'=>'required|in:P,L',
            'jurusan'=>'required',
            'alamat'=>'',
        ]);
        Mahasiswa::create($validateData);
        return 'data mahasiswaa berhasil diinput';
    }
}
