@extends('layouts.app')

@section('content')
    @if (Auth::user())
        <div class="container">
            <div class="row">
                    <div class="col-sm">
                        <form method="post" action="{{ action('FormController@insertReview') }}">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Author</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="author" >{{$user = Auth::user()->name}}</textarea>

                            <label for="exampleFormControlTextarea1">Review</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>

                            <label for="exampleFormControlTextarea1">Picture link</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="picture"></textarea>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <button type="submit" value="Send" class="btn btn-primary">Submit</button>
                        <a class="btn btn-warning" href="{{route('homepage')}}">back</a>
                    </form>
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
    @else
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                <a href="{{ route('login') }}">Login</a></li> or
                <a href="{{ route('register') }}">Register</a></li> to add reviews
                </div>
                     </div>
                         </div>
    @endif
    <br>
    <br>
    <div class="container">
        <div class="row">
            @foreach($reviews as $review)
                <div class="col-sm">
                    <img class="img-thumbnail" src="{{$review->picture}}">

                    <p>{{"Author: " . $review->author}}</p>

                    <p>{{"review " . $review->text}}</p>
                </div>
            @endforeach
        </div>
@endsection
