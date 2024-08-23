<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use Session;

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
            Session::flash('success','Data outlet berhasil ditambahkan !');
            return redirect('/admin/outlet/');
        }else{
            Session::flash('error','Data outlet gagal ditambahkan !');
            return redirect('/admin/outlet/');
        }
    }

    public function hapusOutlet($id){
        $id = Outlet::findOrFail($id);
        if($id->delete()){
            Session::flash('success','Data outlet berhasil dihapus !');
            return redirect('/admin/outlet/');
        }else{
            Session::flash('error','Data outlet gagal dihapus !');
            return redirect('/admin/outlet/');
        }
    }

    public function editOutletView($id){
        
    }
}
