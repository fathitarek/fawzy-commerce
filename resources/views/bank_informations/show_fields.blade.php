<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('name_en', 'Name English:') !!}
    <p>{{ $bankInformation->name_en }}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('name_ar', 'Name Arabic:') !!}
    <p>{{ $bankInformation->name_ar }}</p>
</div>


<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('details_en', 'Details English:') !!}
    <p>{{ $bankInformation->details_en }}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('details_ar', 'Details Arabic:') !!}
    <p>{{ $bankInformation->details_ar }}</p>
</div>


<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src= "{{URL($bankInformation->image )}}" height="160"/>
</div>

<!-- Video Url Field -->
<div class="form-group">
    {!! Form::label('video_url', 'Video Url:') !!}
    <p>{{ $bankInformation->video_url }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $bankInformation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $bankInformation->updated_at }}</p>
</div>

