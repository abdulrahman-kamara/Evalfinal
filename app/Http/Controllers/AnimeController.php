<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\anime;

class animeController extends Controller
{
    public function animes()
    {
        $animes = DB::select("SELECT * FROM animes");
        return view('welcome', ["animes" => $animes]);
    }

    public function listAnimes($id)
    {

        $anime = DB::select("SELECT * FROM animes WHERE id = ?", [$id])[0];
        return view('anime', ["anime" => $anime]);
    }
}
