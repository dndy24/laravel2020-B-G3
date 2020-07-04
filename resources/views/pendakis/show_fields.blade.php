<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $pendaki->nama }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $pendaki->alamat }}</p>
</div>

<!-- Regu Id Field -->
<div class="form-group">
    {!! Form::label('regu_id', 'Regu Id:') !!}
    <p>{{ $pendaki->regu_id }}</p>
</div>

<!-- Tanggal Mendaki Field -->
<div class="form-group">
    {!! Form::label('tanggal_mendaki', 'Tanggal Mendaki:') !!}
    <p>{{ $pendaki->tanggal_mendaki }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $pendaki->foto }}</p>
</div>

<!-- File Field -->
<div class="form-group">
    {!! Form::label('file', 'File:') !!}
    <p>{{ $pendaki->file }}</p>
</div>

