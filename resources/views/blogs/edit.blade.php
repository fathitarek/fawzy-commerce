@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blogs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($blogs, ['route' => ['blogs.update', $blogs->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('blogs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection