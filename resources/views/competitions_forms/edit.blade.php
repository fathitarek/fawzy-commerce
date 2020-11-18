@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Competitions Form
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($competitionsForm, ['route' => ['competitionsForms.update', $competitionsForm->id], 'method' => 'patch']) !!}

                        @include('competitions_forms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection