<div class="container">

    <div class="row">
        <div class="col-sm-7">
          <h3>Pendataan Perlengkapan Regu Pendakian Gunung Slamet</h3>
        </div>
        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('perlengkapans')}}?search='+this.value)"
                       placeholder="Cari ID Regu" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('perlengkapans')}}?search='+$('#search').val())">
                            <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
          </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th width="60px">No</th>
            <th><a href="javascript:ajaxLoad('{{url('perlengkapans?field=regu_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">ID Regu</a>
                {{request()->session()->get('field')=='regu_id'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('perlengkapans?field=surat_ijin&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Surat Ijin</a>
                {{request()->session()->get('field')=='surat_ijin'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('perlengkapans?field=p3k&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">P3K</a>
                {{request()->session()->get('field')=='p3k'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('perlengkapans?field=navigasi&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Navigasi</a>
              {{request()->session()->get('field')=='navigasi'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th width="160px" style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('perlengkapans/create')}}')"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Jalur</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($perlengkapans as $perlengkapan)
          <tr>
            <th>{{$i++}}</th>
            <td>{{ $perlengkapan->regu_id }}</td>
            <td >{{ $perlengkapan->surat_ijin }}</td>
            <td>{{ $perlengkapan->p3k }}</td>
            <td>{{ $perlengkapan->navigasi }}</td>
            <td>
              <a class="btn btn-info btn-xs" regu_id="Show"
                 href="javascript:ajaxLoad('{{url('perlengkapans/show/'.$perlengkapan->id)}}')">
                  Show</a>
                <a class="btn btn-warning btn-xs" regu_id="Edit"
                   href="javascript:ajaxLoad('{{url('perlengkapans/update/'.$perlengkapan->id)}}')">
                    Edit</a>
                <input type="hidden" name="_method" value="delete"/>
                <a class="btn btn-danger btn-xs" regu_id="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('perlengkapans/delete/'.$perlengkapan->id)}}','{{csrf_token()}}')">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
<<<<<<< HEAD
<<<<<<< HEAD
    Halaman : {{ $perlengkapans->currentPage() }} <br/>
    Jumlah Data : {{ $perlengkapans->total() }} <br/>
    Data Per Halaman : {{ $perlengkapans->perPage() }} <br/>
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
        <ul class="pagination">
            {{ $perlengkapans->links() }}
        </ul>
</div>