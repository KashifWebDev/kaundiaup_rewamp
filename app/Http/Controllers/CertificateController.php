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

    public function showEn(){
        return view('certificate.showEn');
    }

    public function showBn(){
        return view('certificate.showBn');
    }

    public function TradeRenewal(){
        return view('certificate.generateTradeRenewal');
    }
}
