<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{isset($perlengkapan)?'Edit':'Tambah'}} Perlengkapan</h1>
        <hr/>
        @if(isset($perlengkapan))
            {!! Form::model($perlengkapan,['method'=>'put','id'=>'frm']) !!}
        @else
            {!! Form::open(['id'=>'frm']) !!}
        @endif
        <div class="form-group row required">
            {!! Form::label("regu_id","ID Regu",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("regu_id",null,["class"=>"form-control".($errors->has('regu_id')?" is-invalid":""),"autofocus",'placeholder'=>'ID Regu']) !!}
                <span id="error-regu_id" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("surat_ijin","Surat Ijin",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("surat_ijin",null,["class"=>"form-control".($errors->has('surat_ijin')?" is-invalid":""),"autofocus",'placeholder'=>'Ada / Tidak']) !!}
                <span id="error-surat_ijin" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("p3k","P3K",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("p3k",null,["class"=>"form-control".($errors->has('p3k')?" is-invalid":""),"autofocus",'placeholder'=>'Ada / Tidak']) !!}
                <span id="error-p3k" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("navigasi","Navigasi",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("navigasi",null,["class"=>"form-control".($errors->has('navigasi')?" is-invalid":""),"autofocus",'placeholder'=>'GPS / Peta / Kompas']) !!}
                <span id="error-navigasi" class="invalid-feedback"></span>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-4">
                <a href="javascript:ajaxLoad('{{url('perlengkapans')}}')" class="btn btn-danger btn-xl">
                    Back</a>
                {!! Form::button("Save",["type" => "submit","class"=>"btn btn-primary btn-xl"])!!}
            </div></br></br></br></br></br></br></br></br></br></br></br></br>
        </div>
        {!! Form::close() !!}
    </div>
</div>