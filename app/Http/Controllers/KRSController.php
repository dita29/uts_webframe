<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use Illuminate\Http\Request;

class KRSController extends Controller
{
    public function index() {
        return view('Viewkrs', [
            "KodeMatkul" => "Post",
            "posts" => Krs::all()
            ]);
    }
}
