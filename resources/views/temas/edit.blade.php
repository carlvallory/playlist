@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tema
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tema, ['route' => ['temas.update', $tema->id], 'method' => 'patch']) !!}

                        @include('temas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection