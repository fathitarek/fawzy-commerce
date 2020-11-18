@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Live Certificate
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($liveCertificate, ['route' => ['liveCertificates.update', $liveCertificate->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('live_certificates.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection