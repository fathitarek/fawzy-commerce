<!-- Name En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_en', 'Name English:') !!}
    {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_ar', 'Name Arabic:') !!}
    {!! Form::text('name_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Description En Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('description_en', 'Description English:') !!}
    {!! Form::textarea('description_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Ar Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('description_ar', 'Description Arabic:') !!}
    {!! Form::textarea('description_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Main Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main_price', 'Main Price:') !!}
    {!! Form::number('main_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_price', 'Sale Price:') !!}
    {!! Form::number('sale_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Main Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main_image', 'Main Image:') !!}
    {!! Form::file('main_image') !!}
</div>
<div class="clearfix"></div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category :') !!}
    {{ Form::select('category_id',$categories,null,['placeholder' => 'Select Category...','class'=> 'form-control','id'=>'category_id'],['option'=>'Categories']) }}

</div>
<!-- Sub Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_category_id', 'Sub Category:') !!}
    <select class="form-control" name="sub_category_id" id="sub_category_id">
    <option>Select Sub Category...</option>
    @if($shopItems->sub_category_id)
    <option selected value="{{$shopItems->sub_category_id}}">{{$shopItems->sub_category->name_en}}</option>
    @endif
    </select>
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control','data-role'=>"tagsinput" ,'id'=>"tags"]) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6" style="padding-top: 25px;">
    {!! Form::label('publish', 'Publish:') !!}
    <label class=""> 
    <!-- checkbox-inline -->
        {!! Form::hidden('publish', 0) !!}
        {!! Form::checkbox('publish', '1', null) !!}
    </label>
</div>




<!-- more images -->
@if(isset($images))
<div class="form-group">
  {!! Form::label('images', 'Images:') !!}
   @foreach($images as $image) 
    <div class="col-sm-6" id="div_{{$image->id}}"> 
<img src="{{URL($image->images)}}" alt="{{$shopItems->name_en}}"  height="300px" width="300px">
<a class="btn btn-danger" onclick="removeImgItem(this)" id="{{$image->id}}"> Remove This Image</a>
</div>
@endforeach
</div>
@endif
<div></div>

<!-- end more images -->

<div class="form-group col-sm-12" style="">
<!-- <div class=" col-sm-6"></div> -->
<button type="button" id="more_img" class="btn btn-success col-sm-3" style="margin-top:13px" 
 >Add More Images</button>
</div>
<div id="div_img_more" class=" col-sm-6" style="padding-right: 17px;"></div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shopItems.index') }}" class="btn btn-default">Cancel</a>
</div>
