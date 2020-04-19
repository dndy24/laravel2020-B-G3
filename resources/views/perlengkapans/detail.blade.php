<div class="container">
  <div class="col-md-10 offset-md2">
    <h2>Detail Perlengkapan Regu No {{$perlengkapan->id}}</h2>
    <hr>
    <div class="form-group">
      <h2>ID Regu : {{ $perlengkapan->regu_id }}</h2>
    </div>

    <div class="form-group">
      <h2>Surat Ijin : {{ $perlengkapan->surat_ijin }}</h2>
    </div>

    <div class="form-group">
      <h2>P3K : {{ $perlengkapan->p3k }}</h2>
    </div>

    <div class="form-group">
      <h2>Navigasi : {{ $perlengkapan->navigasi }}</h2>
    </div></br></br>

    <div class="form-group">
      <a class="btn btn-xl btn-danger" href="javascript:ajaxLoad('{{ url('perlengkapans') }}')">Back</a>
      </br></br></br></br></br></br></br></br></br></br>
    </div>
  </div>
</div>