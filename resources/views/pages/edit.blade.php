@extends('layouts.default')

@section('content')

 <!-- display success message -->
@if (Session::has('message'))
   <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

<div class="panel panel-success">
		<div class="panel-heading">Edit Pendaki</div>
		<form action="/update" method="post" onsubmit="return showLoad('Update Data?')">
      {{ csrf_field() }}
		<div class="panel-body">



      <div class="form-group {{ $errors->has('sname') ? 'has-error' : '' }}">
  			<label class="label-control">Description</label>
  			<input type="text" name="sname" class="form-control" placeholder="Please input pendaki name/description" required="required" value="{{$editpendaki->pndk_name}}">
  			@if ($errors->has('sname'))
            <span class="help-block alert alert-danger">
                <strong>{{ $errors->first('sname') }}</strong>
            </span>
        @endif
			</div>

			<div class="form-group {{ $errors->has('stype') ? 'has-error' : '' }}">
  			<label class="label-control">Jenis Kelamin</label>
  			<select name="stype" class="form-control" required="required">
  				<option value=''>Pilih Jenis Kelamin</option>
  			<?php

  				$types = array('Laki-laki','Perempuan');

  				foreach($types as $types)
  				{
  					if($editpendaki->pndk_type == $types)
  					{
  						echo "<option value='$types' selected>$types</option>";
  					}
  					else
  					{
  						echo "<option value='$types'>$types</option>";
  					}
  				}
  			?>
  			</select>
  			@if ($errors->has('stype'))
            <span class="help-block alert alert-danger">
                <strong>{{ $errors->first('stype') }}</strong>
            </span>
        @endif
			</div>

			<div class="col-md-3">
        <div class="form-group {{ $errors->has('ssize') ? 'has-error' : '' }}">
    			<label class="label-control">Asal Pendaki</label>
    			<select name="ssize" class="form-control" required="required">
    				<option value=''>Asal Provinsi Pendaki</option>
    				<?php
    					$size = array('Jawa Tengah','Jawa Timur','Jawa Barat');
    					foreach($size as $size)
    					{
    						if($editpendaki->pndk_size == $size)
    						{
    							echo "<option value='$size' selected>$size</option>";
    						}
    						else
    						{
    							echo "<option value='$size'>$size</option>";
    						}
    					}
    				?>
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
    			<input type="number" name="squantity" class="form-control" required="required" placeholder="Insert quantity" value="{{$editpendaki->pndk_qty}}">
    			@if ($errors->has('squantity'))
              <span class="help-block alert alert-danger">
                  <strong>{{ $errors->first('squantity') }}</strong>
              </span>
          @endif
        </div>
      </div>
			<br>

			<input type = "hidden" name = "sid" value = "{{$editpendaki->id}}">

	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success">Update</button>
	</div>
	</form>
</div>

@stop
