<!-- Title En Field -->
<div class="form-group">
    {!! Form::label('title_en', 'Title English:') !!}
    <p>{{ $slider->title_en }}</p>
</div>

<!-- Title Ar Field -->
<div class="form-group">
    {!! Form::label('title_ar', 'Title Arabic:') !!}
    <p>{{ $slider->title_ar }}</p>
</div>

<!-- Description En Field -->
<div class="form-group">
    {!! Form::label('description_en', 'Description English:') !!}
    <p>{{ $slider->description_en }}</p>
</div>

<!-- Description Ar Field -->
<div class="form-group">
    {!! Form::label('description_ar', 'Description Arabic:') !!}
    <p>{{ $slider->description_ar }}</p>
</div>

<div class="form-group">
    {!! Form::label('btn_en', 'Button English:') !!}
    <p>{{ $slider->btn_en }}</p>
</div>

<!-- Title Ar Field -->
<div class="form-group">
    {!! Form::label('btn_ar', 'Button Arabic:') !!}
    <p>{{ $slider->btn_ar }}</p>
</div>

<!-- Title Ar Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $slider->url }}</p>
</div>
<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    
    <img src= "{{URL($slider->image )}}" height="160"/>
</div>

<!-- Slide Order Field -->
<div class="form-group">
    {!! Form::label('slide_order', 'Slide Order:') !!}
    <p>{{ $slider->slide_order }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $slider->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $slider->updated_at }}</p>
</div>

