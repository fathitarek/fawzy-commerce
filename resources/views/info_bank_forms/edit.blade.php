@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Info Bank Forms
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($infoBankForm, ['route' => ['infoBankForms.update', $infoBankForm->id], 'method' => 'patch']) !!}

                        @include('info_bank_forms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection