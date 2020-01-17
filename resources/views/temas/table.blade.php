<div class="table-responsive">
    <table class="table" id="temas-table">
        <thead>
            <tr>
                <th>Artist Id</th>
        <th>Album Id</th>
        <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($temas as $tema)
            <tr>
                <td>{{ $tema->artist_id }}</td>
            <td>{{ $tema->album_id }}</td>
            <td>{{ $tema->name }}</td>
                <td>
                    {!! Form::open(['route' => ['temas.destroy', $tema->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('temas.show', [$tema->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('temas.edit', [$tema->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
