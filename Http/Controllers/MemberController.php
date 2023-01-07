<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;

class MemberController extends Controller
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
        $members = Member::all();

        //Mengembalikan User View ke Folder posts dengan nama file index & Mengirimkan data dari (folder post)
        return view('member.form_member', compact('members'));
    }

    public function create()
    {   
        $users = User::all();
        // dd($users);
        //  Menampilkan file tambah.blade.php       
        return view('member.tambah_member', compact('users'));
    }

    public function store(Request $req){
        // echo $req->user_id;
        Member::create(
            [
                "user_id"=>$req->user_id,
                "nama"=>$req->nama,
                "level"=>$req->level,
            ]
        );
        return redirect('/member');
    }

    // Proses Edit
    public function edit($id){
        $members = Member::where("id","=",$id)->first();
        return view('member.edit_member', compact('members'));
    }

    public function update(Request $req, $id){
        $members = Member::where("id","=",$id)->first();
        $members->id = $id;
        $members->nama = $req->nama;
        $members->level = $req->level;
        $members->save();

        return redirect('/member');

    }

    public function hapus($id){
        Member::where("id","=",$id)->first()->delete();

        return redirect('/member');
    }
}
