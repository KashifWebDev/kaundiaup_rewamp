<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function generate(){
        return view('certificate.generate');
    }

    public function generateTrade(){
        return view('certificate.generateTrade');
    }
}
