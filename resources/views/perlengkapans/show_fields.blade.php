<!-- Regu Id Field -->
<div class="form-group">
    {!! Form::label('regu_id', 'Regu Id:') !!}
    <p>{{ $perlengkapan->regu_id }}</p>
</div>

<!-- Navigasi Field -->
<div class="form-group">
    {!! Form::label('navigasi', 'Navigasi:') !!}
    <p>{{ $perlengkapan->navigasi }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $perlengkapan->foto }}</p>
</div>

<!-- File Field -->
<div class="form-group">
    {!! Form::label('file', 'File:') !!}
    <p>{{ $perlengkapan->file }}</p>
</div>

<div class="form-group">
    <b>Rincian data regu : </b>
    <ul>
    <li><p>Nama Regu : {{ $perlengkapan->regu->regu }}</p></li>
    <li><p>Jumlah Anggota : {{ $perlengkapan->regu->jumlah_anggota }}</p></li>
    </ul>
</div>