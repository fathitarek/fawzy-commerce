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
    {!! Form::label('description_en', 'Description English:') !!}
    {!! Form::textarea('description_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description_ar', 'Description Arabic:') !!}
    {!! Form::textarea('description_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Company En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_en', 'Company Name English:') !!}
    {!! Form::text('company_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_ar', 'Company Name Arabic:') !!}
    {!! Form::text('company_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('liveCertificates.index') }}" class="btn btn-default">Cancel</a>
</div>
