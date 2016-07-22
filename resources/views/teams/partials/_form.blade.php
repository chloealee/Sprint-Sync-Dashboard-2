<div class="body">
	<div class="form">
		<div class="form-item">
		    {!! Form::label('name', 'Name:', ['class'=>'field-label']) !!}
		    {!! Form::text('name', $team->name, ['class'=>'text-field']) !!}
		</div>
		<div class="form-item">
		    {!! Form::label('slug', 'Slug:', ['class'=>'field-label']) !!}
		    {!! Form::text('slug', $team->slug, ['class'=>'text-field']) !!}
		</div>
		<div class="form-actions -padded">
		    {!! Form::submit($submit_text, ['class'=>'button -secondary']) !!}
		</div>
	</div>
</div>