@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Live Certificate Form
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($liveCertificateForm, ['route' => ['liveCertificateForms.update', $liveCertificateForm->id], 'method' => 'patch']) !!}

                        @include('live_certificate_forms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection