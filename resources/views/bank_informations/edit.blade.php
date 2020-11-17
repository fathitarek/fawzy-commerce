@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bank Information
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bankInformation, ['route' => ['bankInformations.update', $bankInformation->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('bank_informations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection