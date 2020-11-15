@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Social
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($social, ['route' => ['socials.update', $social->id], 'method' => 'patch']) !!}

                        @include('socials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection