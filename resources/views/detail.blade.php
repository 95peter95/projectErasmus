@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:45%">Mobility</th>
            <th style="width:25%">Start date</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-6 hidden-xs"><img src="{{$mobility->imagelink}}" alt="..." class="img-responsive"/></div>
                    <div class="col-sm-6">
                        <h4 class="nomargin">{{$mobility->name}}</h4>
                        <p>{{$mobility->text}}</p>
                    </div>
                </div>
            </td>
            <td>
                <h4 class="nomargin">{{$mobility->start_date}}</h4>
            </td>
        </tr>

        </tbody>
        <tfoot>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-success"><i class="fa fa-angle-left"></i> Participate</a>
                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
            </td>
        </tr>
        </tfoot>
    </table>
</div>
</div>

@endsection

