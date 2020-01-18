<div class="table-responsive">
    <table class="table" id="albums-table">
        <thead>
            <tr>
                <th>Artista Id</th>
        <th>Name</th>
        <th>Images</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($albums as $album)
            <tr>
                <td>{{ (!is_null($album->artist) ? $album->artist->name: $album->artist_id ) }}</td>
            <td>{{ $album->name }}</td>
            <td>{{ $album->image }}</td>
                <td>
                    {!! Form::open(['route' => ['albums.destroy', $album->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('albums.show', [$album->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('albums.edit', [$album->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
