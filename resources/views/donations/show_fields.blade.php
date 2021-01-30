<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('name_en', 'Name English:') !!}
    <p>{{ $donation->name_en }}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('name_ar', 'Name Arabic:') !!}
    <p>{{ $donation->name_ar }}</p>
</div>



<!-- Description En Field -->
<div class="form-group">
    {!! Form::label('description_en', 'Description English:') !!}
    <p>{{ $donation->description_en }}</p>
</div>

<!-- Description Ar Field -->
<div class="form-group">
    {!! Form::label('description_ar', 'Description Arabic:') !!}
    <p>{{ $donation->description_ar }}</p>
</div>
<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src= "{{URL($donation->image )}}" height="160"/>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $donation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $donation->updated_at }}</p>
</div>

