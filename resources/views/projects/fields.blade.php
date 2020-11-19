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

<div id="div_img_more" ></div>
 <button type="button" id="more_img" class="btn btn-success" style="margin-top:13px" 
 >Add More Images</button>

<!-- more images -->
@if(isset($images))
<div class="form-group">
  {!! Form::label('images', 'Images:') !!}
   @foreach($images as $image) 
    <div class="col-sm-6" id="div_{{$image->id}}"> 
<img src="{{URL($image->images)}}" alt="{{$projects->name_en}}"  height="300px" width="300px">
<a class="btn btn-danger" onclick="removeImg(this)" id="{{$image->id}}"> Remove This Image</a>
</div>
@endforeach
</div>
@endif
<div></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projects.index') }}" class="btn btn-default">Cancel</a>
</div>
