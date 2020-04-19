<div class="container">
  <div class="col-md-8 offset-md2">
    <h2>Detail Regu No {{$regu->id}}</h2>
    <hr>
    <div class="form-group">
      <h2>Regu : {{ $regu->regu }}</h2>
    </div>

    <div class="form-group">
      <h2>Jumlah Anggota : {{ $regu->jumlah_anggota }}</h2>
    </div>

    <div class="form-group">
      <h2>Jalur : </h2>
      <ul>
        <li><h3>Nama : {{ $regu->jalur->nama }}</h3></li>
        <li><h3>Lokasi : {{ $regu->jalur->lokasi }}</h3></li>
        <li><h3>Estimasi : {{ $regu->jalur->estimasi }}</h3></li>
        <li><h3>Jumlah POS : {{ $regu->jalur->jumlah_pos }}</h3></li>
        <li><h3>Status : {{ $regu->jalur->status }}</h3></li>
      </ul>
    </div>

    <a class="btn btn-xl btn-danger" href="javascript:ajaxLoad('{{ url('regus') }}')">Back</a>
<<<<<<< HEAD
<<<<<<< HEAD
  </br></br></br>
=======
    </br></br></br>
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
    </br></br></br>
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
  </div>
</div>
