<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassificationController extends Controller
{
    public function index()
    {
        $players = DB::table('players')->orderBy('wallet', 'desc')->get();
        return view('classification', ['players' => $players]);
    }
}
