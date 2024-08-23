<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Member;
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
        $data = Outlet::findOrFail($id);
        return view('admin.edit',compact('data'));
    }

    public function editOutlet(Request $req,$id){
        $id = Outlet::findOrFail($id);

        $data = [
            "nama" => $req->input('nama'),
            "alamat" => $req->input('alamat'),
            "tlp" => $req->input('tlp')
        ];

        if($id->update($data)){
            Session::flash('success','Data outlet sukses diedit !');
            return redirect('/admin/outlet');
        }else{
            Session::flash('error','Data outlet gagal diedit !');
        }
    }

    public function memberView(){
        $get = Member::latest()->get();
        return view('admin.member', compact('get'));
    }

    public function tambahmemberView(){
        return view('admin.tambahmember');
    }

    public function tambahMember(Request $req){
        $data = [
            "nama" => $req->input('nama'),
            "alamat" => $req->input('alamat'),
            "jk" => $req->input('jk'),
            "tlp" => $req->input('tlp')
        ];

        if(Member::create($data)){
            Session::flash('success','Data member berhasil ditambahkan !');
            return redirect('/admin/member');
        }else{
            Session::flash('error','Data member gagal ditambahkan !');
            return redirect('/admin/member');
        }
    }

    public function editmemberView($id){
        $data = Member::findOrFail($id);
        return view('admin.editmember', compact('data'));
    }

    public function editmember(Request $req, $id){
        $user = Member::findOrFail($id);

        $data = [
            "nama" => $req->input('nama'),
            "alamat" => $req->input('alamat'),
            "jk" => $req->input('jk'),
            "tlp" => $req->input('tlp')
        ];

        if($user->update($data)){
            Session::flash('success','Data member berhasil diubah !');
            return redirect('/admin/member');
        }else{
            Session::flash('error','Data member gagal diubah !');
            return redirect('/admin/member');   
        }

    }
}
