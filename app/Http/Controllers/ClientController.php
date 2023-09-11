<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){

        // dd(Auth::user()->name);

        if (Auth::user() && Auth::user()->role == 'client') {
            # code...
        } elseif(Auth::user() && Auth::user()->role == 'admin') {
            # code...
        } else {
            
        }


        return view('client.dasboard');
    }
}
