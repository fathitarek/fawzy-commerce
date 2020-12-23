@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Newsletters
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($newsletters, ['route' => ['newsletters.update', $newsletters->id], 'method' => 'patch']) !!}

                        @include('newsletters.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection