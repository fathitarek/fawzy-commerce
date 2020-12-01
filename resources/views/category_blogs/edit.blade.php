@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Category Blog
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoryBlog, ['route' => ['categoryBlogs.update', $categoryBlog->id], 'method' => 'patch']) !!}

                        @include('category_blogs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection