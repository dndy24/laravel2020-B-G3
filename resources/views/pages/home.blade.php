@extends('layouts.default')

@section('content')

 <!-- display success message -->
@if (Session::has('message'))
   <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

<div class="panel panel-success">
		<div class="panel-heading">Insert Pendaki</div>
		<form action="/home" method="post" enctype="multipart/form-data" onsubmit="return showLoad('Insert Data?')">
		{{ csrf_field() }}
		<div class="panel-body">

      <div class="form-group {{ $errors->has('sname') ? 'has-error' : '' }}">
  			<label class="label-control">Nama Pendaki</label>
  			<input type="text" name="sname" class="form-control" placeholder="Please input pendaki name/description" value="{{ old('sname') }}" required="required">
  			@if ($errors->has('sname'))
            <span class="help-block alert alert-danger">
                <strong>{{ $errors->first('sname') }}</strong>
            </span>
        @endif
    </div>

	<div class="form-group {{ $errors->has('stype') ? 'has-error' : '' }}">
  			<label class="label-control">Jenis Kelamin</label>
  			<select name="stype" class="form-control" >
  				<option value=''>Pilih Jenis Kelamin</option>
  				<option value='Laki-laki'>Laki-laki</option>
  				<option value='Perempuan'>Perempuan</option>
  			</select>
         @if ($errors->has('stype'))
            <span class="help-block alert alert-danger">
                <strong>{{ $errors->first('stype') }}</strong>
            </span>
        @endif
      </div>

			<div class="row">
				<div class="col-md-3">
          <div class="form-group {{ $errors->has('ssize') ? 'has-error' : '' }}">
  					<label class="label-control">Asal Pendaki</label>
  					<select name="ssize" class="form-control" required="required">
  						<option value=''>Asal Provinsi Pendaki</option>
  						<option value='Jawa Tengah'>Jawa Tengah</option>
  						<option value='Jawa Timur'>Jawa Timur</option>
  						<option value='Jawa Barat'>Jawa Barat</option>
  					</select>
  					@if ($errors->has('ssize'))
                <span class="help-block alert alert-danger">
                    <strong>{{ $errors->first('ssize') }}</strong>
                </span>
            @endif
          </div>
				</div>


				<div class="col-md-2">
          <div class="form-group {{ $errors->has('squantity') ? 'has-error' : '' }}">
  					<label class="label-control">Pendaki Quantity</label>
  					<input type="number" name="squantity" class="form-control" required="required" placeholder="Insert quantity" value="{{ old('sname') }}">
  					@if ($errors->has('squantity'))
                <span class="help-block alert alert-danger">
                    <strong>{{ $errors->first('squantity') }}</strong>
                </span>
            @endif
          </div>
				</div>
			</div>
			<br>


			<div class="row">
				<div class="col-md-5">
          <div class="form-group {{ $errors->has('fileUpload') ? 'has-error' : '' }}">
  					<label class="label-control">Upload Photo KTP</label>
  					<input type="file" name="fileUpload" class="form-control fileinput" data-show-upload="false" required="required">
  					<i>Note: Only jpg,jpeg,png file allowed. Max size: 5MB</i>
  					@if ($errors->has('fileUpload'))
                <span class="help-block alert alert-danger">
                    <strong>{{ $errors->first('fileUpload') }}</strong>
                </span>
            @endif
          </div>
				</div>
			</div>
			<br>

	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success">Insert</button>
		<button type="reset" name="reset" class="btn btn-warning" onclick="return confirm('Reset/clear form?');">Reset</button>
	</div>
	</form>
</div>

@push('scripts')
  <script type="text/javascript">
  	// for bootstrap file input
  	$(function(){
  		 $("input.fileinput").fileinput({
              allowedFileExtensions: ["jpg", "jpeg" , "png"], // set allowed file format
              maxFileSize: 5000, //set file size limit, 1000 = 1MB
          });
  	});
  </script>
@endpush

@stop
