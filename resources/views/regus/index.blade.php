<div class="container">

    <div class="row">
        <div class="col-sm-7">
          <h3>Regu Pendakian Gunung Slamet</h3>
        </div>
        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('regus')}}?search='+this.value)"
                       placeholder="Cari Regu" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('regus')}}?search='+$('#search').val())">
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
                <a href="javascript:ajaxLoad('{{url('regus?field=regu&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Regu
                </a>
                {{request()->session()->get('field')=='regu'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('regus?field=jumlah_anggota&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Jumlah Anggota
                </a>
                {{request()->session()->get('field')=='jumlah_anggota'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('regus?field=jalur&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Jalur
                </a>
                {{request()->session()->get('field')=='jalur'?(request()->session()->get('sort')=='asc'?'▲':'▼'):''}}
            </th>

            <th width="160px" style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('regus/create')}}')"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> New Data</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($regus as $rg)
          <tr>
            <th>{{$i++}}</th>
            <td>{{ $rg->regu }}</td>
            <td>{{ $rg->jumlah_anggota }}</td>
            <td>{{ $rg->jalur->nama }}</td>
            <td>
              <a class="btn btn-info btn-xs" nama="Show"
                 href="javascript:ajaxLoad('{{url('regus/show/'.$rg->id)}}')">
                  Show</a>
                <a class="btn btn-warning btn-xs" nama="Edit"
                   href="javascript:ajaxLoad('{{url('regus/update/'.$rg->id)}}')">
                    Edit</a>
                <input type="hidden" name="_method" value="delete"/>
                <a class="btn btn-danger btn-xs" nama="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('regus/delete/'.$rg->id)}}','{{csrf_token()}}')">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>

    Halaman : {{ $regus->currentPage() }} <br/>
    Jumlah Data : {{ $regus->total() }} <br/>
    Data Per Halaman : {{ $regus->perPage() }} <br/>

        <ul class="pagination">
            {{ $regus->links() }}
        </ul>
</div> 
