<div class="container">

    <div class="row">
        <div class="col-sm-7">
          <h3>Pendataan Jalur Pendakian Gunung Slamet</h3>
        </div>
        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('jalurs')}}?search='+this.value)"
                       placeholder="Cari Nama" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('jalurs')}}?search='+$('#search').val())">
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
            <th><a href="javascript:ajaxLoad('{{url('jalurs?field=nama&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Nama</a>
                {{request()->session()->get('field')=='nama'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('jalurs?field=lokasi&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Lokasi</a>
                {{request()->session()->get('field')=='lokasi'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('jalurs?field=estimasi&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Estimasi
                </a>
                {{request()->session()->get('field')=='estimasi'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('jalurs?field=jumlah_pos&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Jumlah Pos
              </a>
              {{request()->session()->get('field')=='jumlah_pos'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('jalurs?field=status&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Status
                </a>
                {{request()->session()->get('field')=='status'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th width="160px" style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('jalurs/create')}}')"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Jalur</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($jalurs as $jalur)
          <tr>
            <th>{{$i++}}</th>
            <td>{{ $jalur->nama }}</td>
            <td >{{ $jalur->lokasi }}</td>
            <td>{{ $jalur->estimasi }}</td>
            <td>{{ $jalur->jumlah_pos }}</td>
            <td>{{ $jalur->status }}</td>
            <td>
              <a class="btn btn-info btn-xs" nama="Show"
                 href="javascript:ajaxLoad('{{url('jalurs/show/'.$jalur->id)}}')">
                  Show</a>
                <a class="btn btn-warning btn-xs" nama="Edit"
                   href="javascript:ajaxLoad('{{url('jalurs/update/'.$jalur->id)}}')">
                    Edit</a>
                <input type="hidden" name="_method" value="delete"/>
                <a class="btn btn-danger btn-xs" nama="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('jalurs/delete/'.$jalur->id)}}','{{csrf_token()}}')">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
      Halaman : {{ $jalurs->currentPage() }} <br/>
      Jumlah Data : {{ $jalurs->total() }} <br/>
      Data Per Halaman : {{ $jalurs->perPage() }} <br/>
<ul class="pagination">
  {{ $jalurs->links() }}
</ul>
</div>