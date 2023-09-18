<?php

namespace App\Http\Controllers;

use App\Models\JobRole;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request) {

        return view('dashboard',[
            'user' => $request->user()
        ]);
    }
}
