<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Title English:') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ar', 'Title Arabic:') !!}
    {!! Form::text('title_ar', null, ['class' => 'form-control']) !!}
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

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Slide Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slide_order', 'Slide Order:') !!}
    {!! Form::number('slide_order', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sliders.index') }}" class="btn btn-default">Cancel</a>
</div>
