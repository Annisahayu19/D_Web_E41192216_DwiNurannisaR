<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        //return "Halo ini adalah method index, dalam Controller Management User.";
        //return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Dwi Nurannisa R";
    
        $pelajaran = ["Algoritma dan Pemograman", "Kalkulus", "Pemograman Web"];

        return view('home', compact('nama', 'pelajaran'));
    }

    
}

?>