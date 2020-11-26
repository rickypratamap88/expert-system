<?php

namespace App\Http\Controllers\Admin;

use App\{Disease, Rule, Symptom, User};
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        $rules = Rule::all();
        return view('admin.dashboard.index', compact('users', 'symptoms', 'diseases', 'rules'));
    }
}

// rickypratamap88@gmail.com
// Sandi github : Sholatsubuh12
// Sandi gmail : Arjuna12