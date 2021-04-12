<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\anime;

class reviewController extends Controller
{


    public function getReview()
    {
        $reviews = DB::select('SELECT * FROM reviews');
        return view('anime', ['reviews' => $reviews]);
    }

    public function addReview(Request $request)
    {

        Db::table('reviews')->insert([
            'id' => $request->id,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'user_id' => $request->user_id,
            'anime_id' => $request->anime_id
        ]);
        return redirect('anime');
    }






    // public function listReview($id)
    // {
    //     $review = DB::select('SELECT * FROM review WHERE id = :id', ['id' => $id]);
    // }
}
