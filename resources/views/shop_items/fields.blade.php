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
    {{ Form::select('sub_category_id',$sub_categories,null,['placeholder' => 'Select Sub Category...','class'=> 'form-control','id'=>'sub_category_id'],['option'=>' Sub Categories']) }}

</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control','data-role'=>"tagsinput" ,'id'=>"tags"]) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish', 'Publish:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('publish', 0) !!}
        {!! Form::checkbox('publish', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shopItems.index') }}" class="btn btn-default">Cancel</a>
</div>
