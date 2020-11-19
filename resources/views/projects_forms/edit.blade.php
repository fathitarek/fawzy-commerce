@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Projects Form
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($projectsForm, ['route' => ['projectsForms.update', $projectsForm->id], 'method' => 'patch']) !!}

                        @include('projects_forms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection