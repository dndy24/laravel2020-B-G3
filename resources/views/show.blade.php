@extends('layout')
@section('content')
<div class="card" style="width : 350px">
    @foreach($dakis as $daki)
        
        <div class="card-body">
            <div class="card-title">Nama : {{$daki->nama}}</div>
            <p class="card-text">Alamat: {{$daki->alamat}}</p>
            <p class="card-text">Regu Id : {{$daki->regu_id}}</p>
            <p class="card-text">Operator Id : {{$daki->operator_id}}</p>
            <p class="card-text">Tanggal Mendaki : {{$daki->tanggal_mendaki}}</p>
            <a href="{{action('DakiController@index')}}" class="btn btn-primary">Back</a>
        </div>
    @endforeach
</div>
@endsection