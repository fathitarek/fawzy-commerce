<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $liveCertificateForm->name }}</p>
</div>

<!-- Mobile Field -->
<div class="form-group">
    {!! Form::label('mobile', 'Mobile:') !!}
    <p>{{ $liveCertificateForm->mobile }}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    <p>{{ $liveCertificateForm->note }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $liveCertificateForm->address }}</p>
</div>

<!-- Live Certificates Id Field -->
<div class="form-group">
    {!! Form::label('live_certificates_id', 'Live Certificates Id:') !!}
    <p>{{ $liveCertificateForm->live_certificates_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $liveCertificateForm->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $liveCertificateForm->updated_at }}</p>
</div>

