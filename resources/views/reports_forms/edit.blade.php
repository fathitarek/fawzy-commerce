@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reports Form
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reportsForm, ['route' => ['reportsForms.update', $reportsForm->id], 'method' => 'patch']) !!}

                        @include('reports_forms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection