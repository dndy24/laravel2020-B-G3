<div class="container">
  <div class="col-md-10 offset-md2">
    <h2>Detail Jalur No {{$jalur->id}}</h2>
    <hr>
    <div class="form-group">
      <h2>Nama : {{ $jalur->nama }}</h2>
    </div>

    <div class="form-group">
      <h2>Lokasi : {{ $jalur->lokasi }}</h2>
    </div>

    <div class="form-group">
      <h2>Estimasi : {{ $jalur->estimasi }}</h2>
    </div>

    <div class="form-group">
      <h2>Jumlah Pos : {{ $jalur->jumlah_pos }}</h2>
    </div>

    <div class="form-group">
      <h2>Status : {{ $jalur->status }}</h2></br></br></br>
    </div>

    <div class="form-group">
      <a class="btn btn-xl btn-danger" href="javascript:ajaxLoad('{{ url('jalurs') }}')">Back</a>
      </br></br></br></br></br>
    </div>
  </div>
</div>