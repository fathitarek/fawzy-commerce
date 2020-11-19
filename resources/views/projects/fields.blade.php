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



<!-- more images -->
@if(isset($images))
<div class="form-group row">
  {!! Form::label('images', 'Images:') !!}
   @foreach($images as $image) 
    <div class="col-sm-6" id="div_{{$image->id}}" style="margin-top: 30px;"> 
<img src="{{URL($image->images)}}" alt="{{$projects->name_en}}"   height="300px" width="300px">
<a class="btn btn-danger" onclick="removeImgProject(this)" id="{{$image->id}}"> Remove This Image</a>
</div>
@endforeach
</div>
@endif
<div></div>
<div class="form-group col-sm-12" style="">
<!-- <div class=" col-sm-6"></div> -->
<button type="button" id="more_img" class="btn btn-success col-sm-3" style="margin-top:13px"  >Add More Images</button>
</div>
<div id="div_img_more" class=" col-sm-6"></div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projects.index') }}" class="btn btn-default">Cancel</a>
</div>
