@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Order Details
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($orderDetails, ['route' => ['orderDetails.update', $orderDetails->id], 'method' => 'patch']) !!}

                        @include('order_details.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection