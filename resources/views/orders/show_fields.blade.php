<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $orders->full_name }}</p>
</div>
<div class="form-group">
    {!! Form::label('Customer_name', 'Customer Name:') !!}
    <p>{{ $orders->customer->name }}</p>
</div>
<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $orders->address }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{{ $orders->city }}</p>
</div>

<!-- Zip Field -->
<div class="form-group">
    {!! Form::label('zip', 'Zip:') !!}
    <p>{{ $orders->zip }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $orders->email }}</p>
</div>

<!-- Order Note Field -->
<div class="form-group">
    {!! Form::label('order_note', 'Order Note:') !!}
    <p>{{ $orders->order_note }}</p>
</div>
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $orders->total }} EGP</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $orders->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $orders->updated_at }}</p>
</div>

<table class="table">
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total Price</th>
    </tr>
    @foreach($orders->order_details as $order)
    <tr>
        <td>{{$order->shop_item->name_en}}</td>
        <td>{{$order->price}}</td>
        <td>{{$order->quantity}}</td>
        <td>{{$order->price *$order->quantity }}</td>
    </tr>
    @endforeach
</table>