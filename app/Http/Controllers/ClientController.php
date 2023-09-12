<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){


        return view('clients.dashboard');
    }

    public function invoices(){

return view('clients.invoices');
    }

    public function profile(){

        return view('clients.account');
    }
}
