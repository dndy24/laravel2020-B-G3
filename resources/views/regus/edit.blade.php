@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Regu
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($regu, ['route' => ['regus.update', $regu->id], 'method' => 'patch']) !!}

                        @include('regus.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection