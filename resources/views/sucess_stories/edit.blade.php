@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sucess Stories
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sucessStories, ['route' => ['sucessStories.update', $sucessStories->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('sucess_stories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection