@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-2">Oddelenie pre medzinárodné vzťahy</h1>
            <p class="lead">Tr. A. Hlinku 1</p>
            <p class="lead">949 74 Nitra</p>
        </div>
    </div>

    <table class="table">
        <tr>
            <th>Meno a Priezvisko</th>
            <th>Email</th>
            <th>Telefon</th>
        </tr>
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->titul1." ".$contact->meno." ".$contact->priezvisko." ".$contact->titul2}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->telefon}}</td>
            </tr>
        @endforeach
    </table>
@endsection


