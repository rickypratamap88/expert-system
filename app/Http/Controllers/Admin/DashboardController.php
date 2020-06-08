<?php

namespace App\Http\Controllers\Admin;

use App\Disease;
use App\Http\Controllers\Controller;
use App\Symptom;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        return view('admin.dashboard.index', compact('users', 'symptoms', 'diseases'));
    }
}
