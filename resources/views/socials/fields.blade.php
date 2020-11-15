<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Instgram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instgram', 'Instgram:') !!}
    {!! Form::text('instgram', null, ['class' => 'form-control']) !!}
</div>

<!-- Linkedin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linkedin', 'Linkedin:') !!}
    {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<!-- Youtube Field -->
<div class="form-group col-sm-6">
    {!! Form::label('youtube', 'Youtube:') !!}
    {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('socials.index') }}" class="btn btn-default">Cancel</a>
</div>
