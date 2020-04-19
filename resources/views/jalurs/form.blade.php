<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{isset($jalur)?'Edit':'Tambah'}} Jalur</h1>
        <hr/>
        @if(isset($jalur))
            {!! Form::model($jalur,['method'=>'put','id'=>'frm']) !!}
        @else
            {!! Form::open(['id'=>'frm']) !!}
        @endif
        <div class="form-group row required">
            {!! Form::label("nama","Nama Jalur",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("nama",null,["class"=>"form-control".($errors->has('nama')?" is-invalid":""),"autofocus",'placeholder'=>'Nama Jalur']) !!}
                <span id="error-nama" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("lokasi","Lokasi Jalur",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("lokasi",null,["class"=>"form-control".($errors->has('lokasi')?" is-invalid":""),"autofocus",'placeholder'=>'Lokasi Jalur']) !!}
                <span id="error-lokasi" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("estimasi","Estimasi Pendakian",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("estimasi",null,["class"=>"form-control".($errors->has('estimasi')?" is-invalid":""),"autofocus",'placeholder'=>'Estimasi Pendakian']) !!}
                <span id="error-estimasi" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("jumlah_pos","Jumlah Pos",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("jumlah_pos",null,["class"=>"form-control".($errors->has('jumlah_pos')?" is-invalid":""),"autofocus",'placeholder'=>'Jumlah Pos']) !!}
                <span id="error-jumlah_pos" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("status","Status",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("status",null,["class"=>"form-control".($errors->has('status')?" is-invalid":""),"autofocus",'placeholder'=>'Status']) !!}
                <span id="error-status" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-4">
                <a href="javascript:ajaxLoad('{{url('jalurs')}}')" class="btn btn-danger btn-xl">
                    Back</a>
                {!! Form::button("Save",["type" => "submit","class"=>"btn btn-primary btn-xl"])!!}
            </div></br></br></br></br></br></br></br></br></br>
        </div>
        {!! Form::close() !!}
    </div>
</div>