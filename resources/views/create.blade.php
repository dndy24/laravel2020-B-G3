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
	<form action="{{ action('DakiController@store') }}" method="daki">
		@csrf
		<div class="form-group">
			<label>Nama</label>
			<input class="form-control" type="text" name="nama" placeholder="Nama Lengkap"/> 
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap"></textarea> 
		</div>
		
		<div class="form-group">
			<label>Regu Id</label>
			<input class="form-control" type="text" name="regu_id" placeholder="Regu Id"/> 
		</div>
		<div class="form-group">
			<label>Operator Id</label>
			<input class="form-control" type="text" name="operator_id" placeholder="Operator Id"/> 
		</div>
		<div class="form-group">
			<label>Tanggal Mendaki</label>
			<input class="form-control" type="string" name="tanggal_mendaki" placeholder="Tanggal Mendaki"/> 
		</div>
		<button class="btn btn-primary" type="submit">submit</button>
	</form>
	</div>
</div>
@endsection
