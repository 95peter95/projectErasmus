@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach($mobilities as $mobility)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{$mobility->name}}</h5>
                    <img src="{{$mobility->imagelink}}" height="150" width="340" >
                    <p class="card-text">{{"Start date: " . $mobility->start_date}}</p>
                    <p class="card-text">{{"End date: " . $mobility->end_date}}</p>
                    <td><a class="btn btn-warning" href="{{action("MobilityController@showAction",['id' => $mobility->id])}}">Detail</a></td>
                </div>
            </div>
        </div>

@endforeach

@endsection



