<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{isset($regu)?'Edit':'New'}} Regu</h1>
        <hr/>
        @if(isset($regu))
            {!! Form::model($regu,['method'=>'put','id'=>'frm']) !!}
        @else
            {!! Form::open(['id'=>'frm']) !!}
        @endif
        <div class="form-group row required">
            {!! Form::label("regu","Regu",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("regu",null,["class"=>"form-control".($errors->has('regu')?" is-invalid":""),"autofocus",'placeholder'=>'Regu']) !!}
                <span id="error-regu" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("jumlah_anggota","Jumlah_Anggota",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("jumlah_anggota",null,["class"=>"form-control".($errors->has('jumlah_anggota')?" is-invalid":""),"autofocus",'placeholder'=>'Jumlah Anggota']) !!}
                <span id="error-jumlah_anggota" class="invalid-feedback"></span>
            </div>
        </div>


        <div class="form-group row required">
            {!! Form::label("jalur_id","Jalur",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("jalur_id",null,["class"=>"form-control".($errors->has('jalur')?" is-invalid":""),"autofocus",'placeholder'=>'Id Jalur']) !!}
                <span id="error-jalur" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-4">
                <a href="javascript:ajaxLoad('{{url('regus')}}')" class="btn btn-danger btn-xl">
                    Back</a>
                {!! Form::button("Save",["type" => "submit","class"=>"btn btn-primary btn-xl"])!!}
            </div>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</div>
