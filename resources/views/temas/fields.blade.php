
<div class="row">
    <div class="col-md-6">
        <!-- Name Field -->
        <div class="form-group m-form__group ">
            {!! Form::label('artist', 'Artista:') !!}
            {!! Form::select('artist', $artists, (isset($tema->artist->id)?$tema->artist->id: 0), ['class' => 'form-control']) !!}
        
        </div>
    </div>
    <div class="col-md-6">
        <!-- Name Field -->
        <div class="form-group m-form__group ">
            {!! Form::label('album', 'Albums:') !!}
            {!! Form::select('album', $albums, (isset($tema->album->id)?$tema->album->id: 0), ['class' => 'form-control']) !!}
        
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <!-- Slug Field -->
        <div class="form-group m-form__group ">
            {!! Form::label('name', 'Titulo:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('temas.index') }}" class="btn btn-default">Cancel</a>
</div>
