<!-- Artista Id Field -->
<div class="form-group">
    {!! Form::label('artista_id', 'Artista Id:') !!}
    <p>{{ (!is_null($album->artist) ? $album->artist->name: $album->artist_id ) }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $album->name }}</p>
</div>

<!-- Images Field -->
<div class="form-group">
    {!! Form::label('image', 'Images:') !!}
    <p>{{ $album->image }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $album->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $album->updated_at }}</p>
</div>

