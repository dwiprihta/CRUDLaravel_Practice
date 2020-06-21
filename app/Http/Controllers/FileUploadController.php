<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view ('file-upload');
    }

    public function prosesFileUpload(Request $request){
        $request->validate([
            'berkas'=>'required|file|image|max:2000',
        ]);
        $extFile=$request->berkas->getClientOriginalExtension();
        $nameFile="dwierna-".time().".".$extFile;
        $path=$request->berkas->storeAs('public',$nameFile);
        $newPath=asset('storage/'.$nameFile);
        echo "proses upload berhasil, file berada di <a href='$newPath'>$newPath</a>";
        //echo $request->berkas->getClientOriginalName()." Lolos Validasi";
        // if($request->hasFile('berkas'))
        //     {
        //     echo "path(): ".$request->berkas->path();
        //     echo "<br>";
        //     echo "extension(): ".$request->berkas->extension(); echo "<br>";
        //     echo "getClientOriginalExtension(): ".
        //     $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType(): ".$request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName(): ".
        //     $request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize(): ".$request->berkas->getSize();
        //     }
        //     else
        //     {
        //     echo "Tidak ada berkas yang diupload";
        //     }

        //         
}
}

