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
<div class="form-group col-sm-6">
    {!! Form::label('details_en', 'Details English:') !!}
    {!! Form::textarea('details_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Ar Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('details_ar', 'Details Arabic:') !!}
    {!! Form::textarea('details_ar', null, ['class' => 'form-control']) !!}
</div>
<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Video Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_url', 'Video Url:') !!}
    {!! Form::url('video_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bankInformations.index') }}" class="btn btn-default">Cancel</a>
</div>
