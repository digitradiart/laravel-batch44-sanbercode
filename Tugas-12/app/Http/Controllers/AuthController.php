<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function daftar() {
        return view('pages.form');
   }

   public function selamatDatang(Request $request) {
        // dd($request);
        $namaDepan = $request->input('fname');
        $namaBelakang = $request->input('lname');

        return view('pages.welcome', ['namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang]);
   }
}
