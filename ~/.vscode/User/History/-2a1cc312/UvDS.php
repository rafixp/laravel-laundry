<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function homeView(){
        return view('admin.home');
    }

    public function outletView(){
        $get = Outlet::latest()->get();
        return view('admin.outlet', compact('get'));
    }

    public function tambahOutletView(){
        return view('admin.tambahoutlet');
    }

    public function tambahOutlet(Request $req){
        $data = [
            "nama" => $req->input('nama'),
            "alamat" => $req->input('alamat'),
            "tlp" => $req->input('tlp')
        ];

        if(Outlet::create($data)){
            $request->session()->flash('error', 'Data outlet berhasil ditambahkan !');
            return redirect('admin.outlet')
        }
    }
}
