<!-- Tema Id Field -->
<div class="form-group">
    {!! Form::label('tema_id', 'Tema Id:') !!}
    <p>{{ $playlist->tema_id }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $playlist->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $playlist->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $playlist->updated_at }}</p>
</div>

