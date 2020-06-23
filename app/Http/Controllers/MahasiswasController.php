<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswasController extends Controller
{

    public function __construct(){
        //$this->middleware('coba')->only('daftarMahasiswa');
    }
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
            'nim'=>'required|size:10|unique:mahasiswas',
            'nama'=>'required',
            'jenis_kelamin'=>'required|in:P,L',
            'jurusan'=>'required',
            'alamat'=>'',
        ]);
        Mahasiswa::create($validateData);

        $request->session()->flash('notif',"Data berhasil {$validateData['nama']} ditambahkan");
        return redirect()->route('mahasiswas.index');
    }

    //show for edited
    public function edit(Mahasiswa $mahasiswa){
        return view('mahasiswa.edit',['mahasiswa'=>$mahasiswa]);
    }

    //PROSES UPDATE
    public function update(Request $request, Mahasiswa $mahasiswa){
        $validateData=$request->validate([
            'nim'=>'required|size:10|unique:mahasiswas,nim,'.$mahasiswa->id,
            'nama'=>'required',
            'jenis_kelamin'=>'required|in:P,L',
            'jurusan'=>'required',
            'alamat'=>'',
        ]);
        //Mahasiswa::where('id', $mahasiswa->id)->update($validateData);
        $mahasiswa->update($validateData);

        $request->session()->flash('notif',"Data berhasil {$validateData['nama']} diubah");
        return redirect()->route('mahasiswas.index', ['mahasiswa'=>$mahasiswa->id]);
    }

    //PROSES UPDATE
    public function destroy(Mahasiswa $mahasiswa){
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('notif',"Hapus data $mahasiswa->nama berhasil");
    }

    public function daftarMahasiswa()
    {
    return view('halaman',['judul'=>'DAFTAR MAHASISWA']);
    }

    public function tabelMahasiswa()
    {
        return view('halaman',['judul'=>'TABEL MAHASISWA']);
    }

    public function blogMahasiswa()
    {
    return view('halaman',['judul'=>'BLOG MAHASISWA']);
    }

    public function login(){
        return view('form-login');
    }

    public function prosesLogin(Request $request){
        $request->validate([
            'username'=>'required',
        ]);

        $validUsername =['andi','rani','lisa','dwi erna'];
        if(in_array($request->username, $validUsername)){
            session (['username'=>$request->username]);
            return redirect('/daftar-mahasiswa');
        }else{
            return back()->withInput()->with('pesan', "username tidak valid");
        }
    }
   
    public function logout(){
            session()->forget('username');
            return redirect('login')->with('pesan','Logout Berhasil');
    }
 }

