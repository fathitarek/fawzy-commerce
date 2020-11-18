<!-- Name En Field -->
<div class="form-group">
    {!! Form::label('name_en', 'Name English:') !!}
    <p>{{ $liveCertificate->name_en }}</p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    {!! Form::label('name_ar', 'Name Arabic:') !!}
    <p>{{ $liveCertificate->name_ar }}</p>
</div>

<!-- Description En Field -->
<div class="form-group">
    {!! Form::label('description_en', 'Description English:') !!}
    <p>{{ $liveCertificate->description_en }}</p>
</div>

<!-- Description Ar Field -->
<div class="form-group">
    {!! Form::label('description_ar', 'Description Arabic:') !!}
    <p>{{ $liveCertificate->description_ar }}</p>
</div>

<!-- Company En Field -->
<div class="form-group">
    {!! Form::label('company_en', 'Company Name English:') !!}
    <p>{{ $liveCertificate->company_en }}</p>
</div>

<!-- Company Ar Field -->
<div class="form-group">
    {!! Form::label('company_ar', 'Company Name Arabic:') !!}
    <p>{{ $liveCertificate->company_ar }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src= "{{URL($liveCertificate->image )}}" height="160"/>

</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $liveCertificate->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $liveCertificate->updated_at }}</p>
</div>

