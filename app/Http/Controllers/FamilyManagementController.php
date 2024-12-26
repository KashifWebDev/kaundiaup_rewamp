<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamilyManagementController extends Controller
{
    public function newApplicants()
    {
        return view('family.new_applicants');
    }

    public function certificateRecipients()
    {
        return view('family.certificate_recipients');
    }
}
