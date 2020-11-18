@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Competitions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($competitions, ['route' => ['competitions.update', $competitions->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('competitions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection