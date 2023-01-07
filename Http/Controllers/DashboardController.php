<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all()->count();
        $members = Member::all()->count();
        $barangs = Barang::all()->count();
        return view('dashboard', compact('users', 'members', 'barangs'));
    }
}
