<?php


namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

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
        $author = $request->input('author');

        $review = new Review();
        $review->author = $author;
        $review->text = $text;
        $review->picture = $picture;
        $review->save();

        return redirect()->action('FormController@index');

    }
}