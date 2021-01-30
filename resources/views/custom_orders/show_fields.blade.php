<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('name_en', 'Name English:') !!}
    <p>{{ $customOrder->name_en }}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('name_ar', 'Name Arabic:') !!}
    <p>{{ $customOrder->name_ar }}</p>
</div>

<!-- Description En Field -->
<div class="form-group">
    {!! Form::label('description_en', 'Description English:') !!}
    <p>{{ $customOrder->description_en }}</p>
</div>

<!-- Description Ar Field -->
<div class="form-group">
    {!! Form::label('description_ar', 'Description Arabic:') !!}
    <p>{{ $customOrder->description_ar }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src= "{{URL($customOrder->image )}}" height="160"/>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $customOrder->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $customOrder->updated_at }}</p>
</div>

