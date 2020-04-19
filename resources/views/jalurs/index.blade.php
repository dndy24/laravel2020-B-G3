<div class="container">

    <div class="row">
        <div class="col-sm-7">
<<<<<<< HEAD
<<<<<<< HEAD
          <h3>Pendataan Jalur Pendakian Gunung Slamet</h3>
=======
          <h3>Regu Pendakian Gunung Slamet</h3>
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
          <h3>Regu Pendakian Gunung Slamet</h3>
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
        </div>
        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
<<<<<<< HEAD
<<<<<<< HEAD
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('jalurs')}}?search='+this.value)"
                       placeholder="Cari Nama" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('jalurs')}}?search='+$('#search').val())">
=======
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('regus')}}?search='+this.value)"
                       placeholder="Cari Regu" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('regus')}}?search='+$('#search').val())">
<<<<<<< HEAD
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
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
<<<<<<< HEAD
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
            </th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
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
<<<<<<< HEAD
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
<<<<<<< HEAD
<<<<<<< HEAD
        </tbody>
    </table>
        Halaman : {{ $jalurs->currentPage() }} <br/>
        Jumlah Data : {{ $jalurs->total() }} <br/>
        Data Per Halaman : {{ $jalurs->perPage() }} <br/>
    <ul class="pagination">
        {{ $jalurs->links() }}
    </ul>
</div>
=======
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053

        </tbody>
    </table>

    Halaman : {{ $regus->currentPage() }} <br/>
    Jumlah Data : {{ $regus->total() }} <br/>
    Data Per Halaman : {{ $regus->perPage() }} <br/>

        <ul class="pagination">
            {{ $regus->links() }}
        </ul>
</div> 
<<<<<<< HEAD
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
