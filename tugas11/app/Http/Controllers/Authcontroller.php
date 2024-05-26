<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function form(){
        return view(('pages.register'));
    }
        public function store(request $request){
            $nama = $request ['nama'];
            $bio =$request['bio'];
            return view('pages.home',['nama'=>$nama,'bio'=>$bio]);
    }
}
