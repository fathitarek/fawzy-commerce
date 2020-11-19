<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('name_en', 'Name English:') !!}
    <p>{{ $shopItems->name_en }}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('name_ar', 'Name Arabic:') !!}
    <p>{{ $shopItems->name_ar }}</p>
</div>

<!-- Description En Field -->
<div class="form-group">
    {!! Form::label('description_en', 'Description English:') !!}
    <p>{{ $shopItems->description_en }}</p>
</div>

<!-- Description Ar Field -->
<div class="form-group">
    {!! Form::label('description_ar', 'Description Arabic:') !!}
    <p>{{ $shopItems->description_ar }}</p>
</div>

<!-- Main Price Field -->
<div class="form-group">
    {!! Form::label('main_price', 'Main Price:') !!}
    <p>{{ $shopItems->main_price }}</p>
</div>

<!-- Sale Price Field -->
<div class="form-group">
    {!! Form::label('sale_price', 'Sale Price:') !!}
    <p>{{ $shopItems->sale_price }}</p>
</div>

<!-- Main Image Field -->
<div class="form-group">
    {!! Form::label('main_image', 'Main Image:') !!}
    <img src= "{{URL($shopItems->main_image )}}" height="160"/>

</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category :') !!}
    <p>{{ $shopItems->category->name_en }}</p>
</div>

<!-- Sub Category Id Field -->
<div class="form-group">
    {!! Form::label('sub_category_id', 'Sub Category:') !!}
    <p>{{ $shopItems->sub_category->name_en }}</p>
</div>

<!-- Tags Field -->
<div class="form-group">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $shopItems->tags }}</p>
</div>

<!-- Publish Field -->
<div class="form-group">
    {!! Form::label('publish', 'Publish:') !!}
    <p>
    @if($shopItems->publish==1)
    Yes
    @else
    No 
    @endif
    </p>
</div>
<!-- show more images -->
{!! Form::label('images', 'Images:') !!}
<div class="form-group">

   @foreach($images as $image) 
        <div class="col-lg-6"> 
         <img src="{{URL($image->images)}}" alt="{{$shopItems->name_en}}"  height="200px" width="200px">
        </div>
@endforeach
</div>
<!-- end more images -->
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $shopItems->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $shopItems->updated_at }}</p>
</div>

