<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('name_en', 'Name English:') !!}
    <p>{{ $projects->name_en }}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('name_ar', 'Name Arabic:') !!}
    <p>{{ $projects->name_ar }}</p>
</div>
<!-- show more images -->
{!! Form::label('images', 'Images:') !!}
<div class="form-group">

   @foreach($images as $image) 
        <div class="col-lg-6"> 
         <img src="{{URL($image->images)}}" alt="{{$projects->name_en}}"  height="200px" width="200px">
        </div>
@endforeach
</div>
<!-- end more images -->
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $projects->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $projects->updated_at }}</p>
</div>

