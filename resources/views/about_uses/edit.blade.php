@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            About Us
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($aboutUs, ['route' => ['aboutUses.update', $aboutUs->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('about_uses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection