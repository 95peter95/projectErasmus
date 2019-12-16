<?php


namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index()

    {
        $reviews = Review::all();
        return view("form", ['reviews' => $reviews]);
    }

    public function insertReview(Request $request)

    {

        $text = $request->input('text');
        $picture = $request->input('picture');
        $author = Auth::user()->name;
        $user_id = Auth::user()->id;

        $review = new Review();
        $review->author = $author;
        $review->user_id = $user_id;
        $review->text = $text;
        $review->picture = $picture;
        $review->save();

        return redirect()->action('FormController@index');

    }
}