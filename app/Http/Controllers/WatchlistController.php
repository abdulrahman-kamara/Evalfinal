<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class watchlistController extends Controller
{
    public function getWatchlist()
    {
        $watchlists = DB::select('SELECT * FROM watchlists');
        return redirect('add_to_watch_list', ['watchlists' => $watchlists]);
    }
}
