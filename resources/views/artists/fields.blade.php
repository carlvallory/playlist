<div class="row">
    <div class="col-md-6">
        <!-- Slug Field -->
        <div class="form-group m-form__group ">
            {!! Form::label('name', 'Artista:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('artists.index') }}" class="btn btn-default">Cancel</a>
</div>
