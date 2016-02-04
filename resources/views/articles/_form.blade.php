<div class="form-group @if($errors->first('title')) has-error @endif">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
	<small class="text-danger">{{ $errors->first('title') }}</small>
</div>

<div class="form-group @if($errors->first('body')) has-error @endif">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('body') }}</small>
</div>

<div class="form-group @if($errors->first('published_at')) has-error @endif">
    {!! Form::label('published_at', 'Publish On:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('published_at') }}</small>
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>