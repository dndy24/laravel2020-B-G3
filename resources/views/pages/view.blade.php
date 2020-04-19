@extends('layouts.default')

@section('content')

<div class="panel panel-success">
		<div class="panel-heading">List Pendaki</div>

		<div class="panel-body">

		<div class='table-responsive'>
		<form action="/view" method="post" onsubmit="return showLoad('Delete pendaki?')">
		  <table class='table table-bordered table-hover'>
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>NAME/DESCRIPTION</th>
				<th>JENIS KELAMIN</th>
		        <th>PENDAKI IMAGE</th>
		        <th>ASAL PENDAKI</th>
		        <th>QUANTITY</th>
		        <th>ACTION</th>
		      </tr>
		    </thead>
		    <tbody>
			<!-- iterate through the array of the pendaki to display them -->
			@foreach($listpendaki as $listpendakis)
				<tr>
					<td>{{$listpendakis->id}}</td>
					<td>{{$listpendakis->pndk_name}}</td>
					<td>{{$listpendakis->pndk_type}}</td>
					<td><img src='{{asset("storage/images/$listpendakis->id.jpg")}}' width="100px" height="100px" class="img-thumbnail img-responsive" title="{{$listpendakis->pndk_type.' '.$listpendakis->pndk_name}}"/></td>
					<td>{{$listpendakis->pndk_size}}</td>
					<td>{{$listpendakis->pndk_qty}}</td>


					<td align="center"><a href='/edit/{{$listpendakis->id}}' data-toggle="tooltip" title="Update Pendaki" class='btn btn-success' onclick='return confirm("Edit pendaki?");'><i class='fa fa-fw fa-gear'></i></a>
					<button type='submit' class='btn btn-danger' data-toggle="tooltip" title="Delete Pendaki"><i class='fa fa-fw fa-trash'></i></button></td>
					<td style='display:none;'><input type='text' name='delpendaki' value='{{$listpendakis->id}}' style='display:none;'></td>
					{{ csrf_field() }}
				</tr>
			@endforeach

			</tbody>
				</table>
				</form>
				<!-- generate markup for pagination links -->
				<center>{{ $listpendaki->links() }}</center>
			</div>
		</div>
</div>

@stop
