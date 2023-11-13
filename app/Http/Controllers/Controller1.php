<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mahasiswa;


class Controller1 extends Controller
{
    public function tampil1()
    {
        return view('tampil1');
    }
    public function tampilkan(Request $request)
    {   
        $model = new mahasiswa();
        $model::insert(['nim'=>@$request->nim, 'nama'=>@$request->nama, 'alamat'=>@$request->alamat, 'created_at'=>now()]);

        $dataAll=$model->all();
        return view('tampil2',['data'=> $request->all(), 'dataAll'=>@$dataAll]);
    }

    public function logout()
    {
        return view('logout'); 
    }
}
