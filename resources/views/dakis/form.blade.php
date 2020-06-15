<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{isset($daki)?'Edit':'Tambah'}} Data</h1>
        <hr/>
        @if(isset($daki))
            {!! Form::model($daki,['method'=>'put','id'=>'frm']) !!}
        @else
            {!! Form::open(['id'=>'frm']) !!}
        @endif

        <div class="form-group row required">
            {!! Form::label("nama","Nama",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("nama",null,["class"=>"form-control".($errors->has('nama')?" is-invalid":""),"autofocus",'placeholder'=>'nama']) !!}
                <span id="error-nama" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("alamat","Alamat",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("alamat",null,["class"=>"form-control".($errors->has('alamat')?" is-invalid":""),"autofocus",'placeholder'=>'alamat lengkap']) !!}
                <span id="error-alamat" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("regu_id","ID Regu",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("regu_id",null,["class"=>"form-control".($errors->has('regu_id')?" is-invalid":""),"autofocus",'placeholder'=>'ID Regu']) !!}
                <span id="error-regu_id" class="invalid-feedback"></span>
            </div>
        </div>
        
<div class="form-group row required">
            {!! Form::label("tanggal_mendaki","Tanggal Mendaki",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("tanggal_mendaki",null,["class"=>"form-control".($errors->has('tanggal_mendaki')?" is-invalid":""),"autofocus",'placeholder'=>'tanggal mendaki']) !!}
                <span id="error-tanggal_mendaki" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-4">
                <a href="javascript:ajaxLoad('{{url('dakis')}}')" class="btn btn-danger btn-xl">
                    Back</a>
                {!! Form::button("Save",["type" => "submit","class"=>"btn btn-primary btn-xl"])!!}
            </div></br></br></br></br></br></br></br></br></br></br></br></br>
        </div>
        {!! Form::close() !!}
    </div>
</div>