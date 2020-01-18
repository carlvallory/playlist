<div class="row">
    <div class="col-md-6">
        <!-- Name Field -->
        <div class="form-group m-form__group ">
            {!! Form::label('tema_id', 'Tema:') !!}
            {!! Form::select('tema_id', $temas, (isset($playlist->tema->name)?$playlist->tema->id: 0), ['class' => 'form-control']) !!}
        
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('playlists.index') }}" class="btn btn-default">Cancel</a>
</div>
