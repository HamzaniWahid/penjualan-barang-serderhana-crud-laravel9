<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class UserController extends Controller
{
    public function index()
    {
        if(session()->has('login')){
            $nama = session('name');
            // echo "Halo $nama, Anda sudah login";
        } else { 
            // echo "Anda blm login"; 
            return redirect('/');
        }
        //Ambil Post
        $users = User::all();

        //Mengembalikan User View ke Folder posts dengan nama file index & Mengirimkanokkmij                                                                                            nn jnjn jnjmkmkoi
        //data dari (folder post)
        return view('user.form_user', compact('users'));
    }

    public function cetakpdf(){
        $users = User::all();

        $pdf = PDF::loadview('user.form_user',['users'=>$users])->setOptions(['defaultFont' => 'sans-serif']);
	    return $pdf->download('laporan-user-pdf.pdf');
	    // return $pdf->stream();
    }

    public function tambah()
    {
        //  Menampilkan file tambah.blade.php       
        return view('user.tambah_user');
    }

    public function simpan(Request $req){
        User::create(
            [
                "name"=>$req->name,
                "email"=>$req->email,
                "password"=>$req->password,
            ]
        );
        return redirect('form_user');
    }

    // Proses Edit
    public function edit($id){
        $users = User::where("id","=",$id)->first();
        return view('user.edit_user', compact('users'));
    }

    public function update(Request $req, $id){
        $users = User::where("id","=",$id)->first();
        $users->id = $id;
        $users->name = $req->name;
        $users->email = $req->email;
        $users->password = $req->pass;
        $users->save();

        return redirect('form_user');

    }

    public function hapus($id){
        User::where("id","=",$id)->first()->delete();

        return redirect('form_user');
    }
}
