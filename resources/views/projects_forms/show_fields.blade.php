<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $projectsForm->name }}</p>
</div>

<!-- Mobile Field -->
<div class="form-group">
    {!! Form::label('mobile', 'Mobile:') !!}
    <p>{{ $projectsForm->mobile }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $projectsForm->address }}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    <p>{{ $projectsForm->note }}</p>
</div>

<!-- Project Id Field -->
<div class="form-group">
    {!! Form::label('project_id', 'Project Id:') !!}
    <p>{{ $projectsForm->project_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $projectsForm->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $projectsForm->updated_at }}</p>
</div>

