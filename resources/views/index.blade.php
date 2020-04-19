@extends('layout')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>

@endif
<div class="row">
	<div class="col-md-6 text-right">
		<h2>CRUD PENDAKI</h2>
</div>
<div class="col-md-4 text-right">
	<form action="/search" method="get">
		<div class="input-group">
			<input type="search" name="search" class="form-control">
			<span class="form-group-prepend">
				<button type="submit" class="btn btn-prymary ">Search</button>
			</span>
		</div>
	</form>
</div>
</div>

<form method="POST">
    @csrf
    @method('DELETE')
    <button formaction="/deleteall" type="submit" class="btn btn-danger">Delete All Selected</button>
	<a href="{{ action('DakiController@create') }}" class="btn btn-primary">Tambah Data</a>
    <br/>
    <br/>
<table class="table table-bordered">
	<thead>
		<tr>
			<th><input type="checkbox" class="selectall"></th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Regu Id</th>
			<th>Operator Id</th>
			<th>Tanggal Mendaki</th>
			
			<th width="230">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($dakis as $daki)
		<tr>
			<td><input type="checkbox" name="ids[]" class="selectbox" value="{{ $daki -> id }}"></td>
			<td>{{ $daki->nama }}</td>
			<td>{{ $daki->alamat }}</td>
			<td>{{ $daki->regu_id }}</td>
			<td>{{ $daki->operator_id }}</td>
			<td>{{ $daki->tanggal_mendaki }}</td>
			
		<td>
				<a href="{{route('daki.show', ['daki'=> $daki->id]) }}" class="btn btn-info">Show</a>
				<a href="{{route('daki.edit', ['daki'=> $daki->id]) }}" class="btn btn-warning">Edit</a>
				 <button formaction="{{ action('DakiController@destroy', $daki->id) }}" type="submit" class="btn btn-danger">delete</button>
		</td>
	</tr>
	@endforeach
</tbody>

<tfoot>
        <tr>
            <th><input type="checkbox" class="selectall2"></th>
            <th>Nama</th>
			<th>Alamat</th>
			<th>Regu Id</th>
			<th>Operator Id</th>
			<th>Tanggal Mendaki</th>
			<th width="230">Action</th>
        </tr>
    </tfoot>
</table>
</form>

Halaman : {{ $dakis->currentPage() }} <br/>
Jumlah Data : {{ $dakis->total() }} <br/>
Data Per Halaman : {{ $dakis->perPage() }} <br/>
<br/>
{{ $dakis->links() }}

<script type="text/javascript">
    $('.selectall').click(function(){
        $('.selectbox').prop('checked', $(this).prop('checked'));
        $('.selectall2').prop('checked', $(this).prop('checked'));
    })
    $('.selectall2').click(function(){
        $('.selectbox').prop('checked', $(this).prop('checked'));
        $('.selectall').prop('checked', $(this).prop('checked'));
    })
    $('.selectbox').change(function(){
        var total = $('.selectbox').length;
        var number = $('.selectbox:checked').length;
        if(total == number){
            $('.selectall').prop('checked', true);
            $('.selectall2').prop('checked', true);
        }else{
            $('.selectall').prop('checked', false);
            $('.selectall2').prop('checked', false);
        }
    })
</script>

@endsection