@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pendaki
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pendaki, ['route' => ['pendakis.update', $pendaki->id], 'method' => 'patch']) !!}

                        @include('pendakis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection