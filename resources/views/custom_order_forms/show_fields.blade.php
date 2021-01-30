<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $customOrderForm->name }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('email', 'E-mail:') !!}
    <p>{{ $customOrderForm->email }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $customOrderForm->message }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $customOrderForm->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $customOrderForm->updated_at }}</p>
</div>

