@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Partners
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($partners, ['route' => ['partners.update', $partners->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('partners.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection