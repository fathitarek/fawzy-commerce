@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Custom Order Form
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($customOrderForm, ['route' => ['customOrderForms.update', $customOrderForm->id], 'method' => 'patch']) !!}

                        @include('custom_order_forms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection