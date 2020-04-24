<div class="container">
  <div class="col-md-10 offset-md2">
    <h2>Detail Data Regu  No {{$daki->id}}</h2>
    <hr>

    <div class="form-group">
      <h2>Nama : {{ $daki->nama }}</h2>
    </div>

    <div class="form-group">
      <h2>Alamat : {{ $daki->alamat }}</h2>
    </div>

 <div class="form-group">
      <h2>ID Regu : {{ $daki->regu_id }}</h2>
    </div>


    <div class="form-group">
      <h2>Tanggal Mendaki : {{ $daki->tanggal_mendaki }}</h2>
    </div>

    <div class="form-group">
      <h2>Rincian data regu : </h2>
      <ul>
        <li><h3>Nama Regu : {{ $daki->regu->regu }}</h3></li>
        <li><h3>Jumlah Anggota : {{ $daki->regu->jumlah_anggota }}</h3></li>
      </ul>
    </div>
  </br></br>


    <div class="form-group">
      <a class="btn btn-xl btn-danger" href="javascript:ajaxLoad('{{ url('dakis') }}')">Back</a>
      </br></br></br></br></br></br></br></br></br></br>
    </div>
  </div>
</div>