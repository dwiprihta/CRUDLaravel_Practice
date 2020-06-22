<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</a></li>';
        echo '<li><a href=/akses-session>Akses Session</a></li>';
        echo '<li><a href=/hapus-session>Hapus Session</a></li>';
        echo '<li><a href=/flash-session>Flash Session</a></li>';
        echo '</ul>';
    }
    public function buatSession()
    {
        session(['hakAkses'=>'admin','nama'=>'dwi erna']);
        return "session sudah dibuat";
    }

    public function aksesSession(Request $request)
    {
        //dump (session()->all());
    //  echo session('hakAkses');
    //  echo '<br>';
    //  echo session('nama');
    //$isiSession = $request->session()->get('kota','jakarta');
    //echo "Isi session adalah $isiSession";
    if (session()->has('hakAkses')){
        echo "session 'hakAkses' terdeteksi". session('hakAkses');
    }
    }

    public function hapusSession()
    {
    session()->forget('hakAkses');
    }

    public function flashSession()
    {
    session()->flash('hakAkses','admin');
    echo "Flash session hakAkses sudah dibuat";
    }
}
