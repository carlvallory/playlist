<!-- Artist Id Field -->
<div class="form-group">
    {!! Form::label('artist_id', 'Artist Id:') !!}
    <p>{{ $tema->artist_id }}</p>
</div>

<!-- Album Id Field -->
<div class="form-group">
    {!! Form::label('album_id', 'Album Id:') !!}
    <p>{{ $tema->album_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $tema->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tema->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tema->updated_at }}</p>
</div>

