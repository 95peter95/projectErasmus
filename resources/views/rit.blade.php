@extends('layouts.layout')
@section('content')

        <div class="row">
            @foreach($mobilities as $mobility)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{$mobility->name}}</h5>
                        <p class="card-text">{{"Start date: " . $mobility->start_date}}</p>
                        <p class="card-text">{{"End date: " . $mobility->end_date}}</p>
                        <a href="#" class="btn btn-primary">Detail</a>
        </div>

              </div>
                    </div>
    @endforeach
@endsection
