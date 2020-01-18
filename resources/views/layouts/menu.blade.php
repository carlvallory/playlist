<li class="{!! Request::is('home*') ? 'active' : '' !!}">
    <a href="{!! url('/home') !!}" class="nav-link nav-toggle">
        <i class="icon-home"></i>
        <span class="title">Home</span>
    </a>
</li>

<li class="{!! Request::is('temas*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('temas.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Temas</span></a>
</li>
<li class="{{ Request::is('artists*') ? 'active' : '' }}">
    <a href="{{ route('artists.index') }}"><i class="fa fa-edit"></i><span>Artists</span></a>
</li>

<li class="{{ Request::is('albums*') ? 'active' : '' }}">
    <a href="{{ route('albums.index') }}"><i class="fa fa-edit"></i><span>Albums</span></a>
</li>

<li class="{{ Request::is('playlists*') ? 'active' : '' }}">
    <a href="{{ route('playlists.index') }}"><i class="fa fa-edit"></i><span>Playlists</span></a>
</li>

