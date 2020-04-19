@extends('layout')
@section('content')

<div class="row">
    <div class="col-md-6 offside-md-3">
        
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error  }}</li>
            @endforeach
            </ul>
        </div>
            @endif
            @foreach($dakis as $daki)
    <form action="{{ action('DakiController@update', $daki->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $daki->nama }}"> 
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" >{{ $daki->alamat }}</textarea> 
        </div>
        <div class="form-group">
            <label>Regu Id</label>
            <input  type="text" name="regu_id" class="form-control" value="{{ $daki->regu_id }}"> 
        </div>
        <div class="form-group">
            <label>Operator Id</label>
            <input type="text" name="operator_id" class="form-control" value="{{ $daki->operator_id }}"/> 
        </div>
        <div class="form-group">
            <label>Tanggal Mendaki</label>
            <input  type="string" name="tanggal_mendaki" class="form-control" value="{{ $daki->tanggal_mendaki }}"> 
        </div>

        <button type="submit" class="btn btn-warning" >update</button>
        <a href="{{ action('DakiController@index') }}" class="btn btn-default">Back</a>
    </form>
    @endforeach
    </div>
</div>
@endsection