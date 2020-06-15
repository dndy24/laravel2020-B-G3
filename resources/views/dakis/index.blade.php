<div class="container">
    <div class="row">
        <div class="col-sm-7">
          <h3>Data Pendaki</h3>
        </div>
        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="cari"
                       value="{{ request()->session()->get('cari') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('dakis')}}?cari='+this.value)"
                       placeholder="Cari ID Regu  " name="cari"
                       type="text" id="cari"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('dakis')}}?cari='+$('#cari').val())">
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
            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('dakis?field=nama&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Nama</a>
                {{request()->session()->get('field')=='nama'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('dakis?field=alamat&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Alamat</a>
                {{request()->session()->get('field')=='alamat'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th><a href="javascript:ajaxLoad('{{url('dakis?field=regu_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">ID Regu</a>
                {{request()->session()->get('field')=='regu_id'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('dakis?field=tanggal_mendaki&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Tanggal Mendaki</a>
              {{request()->session()->get('field')=='tanggal_mendaki'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th width="160px" style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('dakis/create')}}')"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($dakis as $daki)
          <tr>
            <th>{{$i++}}</th>
            <td >{{ $daki->nama }}</td>
            <td>{{ $daki->alamat }}</td>
            <td>{{ $daki->regu_id }}</td>
            <td>{{ $daki->tanggal_mendaki }}</td>
            <td>
              <a class="btn btn-info btn-xs" regu_id="Show"
                 href="javascript:ajaxLoad('{{url('dakis/show/'.$daki->id)}}')">
                  Show</a>
                <a class="btn btn-warning btn-xs" regu_id="Edit"
                   href="javascript:ajaxLoad('{{url('dakis/update/'.$daki->id)}}')">
                    Edit</a>
                <input type="hidden" name="_method" value="delete"/>
                <a class="btn btn-danger btn-xs" regu_id="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('dakis/delete/'.$daki->id)}}','{{csrf_token()}}')">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    Halaman : {{ $dakis->currentPage() }} <br/>
    Jumlah Data : {{ $dakis->total() }} <br/>
    Data Per Halaman : {{ $dakis->perPage() }} <br/>
        <ul class="pagination">
            {{ $dakis->links() }}
        </ul>
</div>