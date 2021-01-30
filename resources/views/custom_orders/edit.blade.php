@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Custom Order
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($customOrder, ['route' => ['customOrders.update', $customOrder->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('custom_orders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection