<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\Tema;
use App\Http\Requests\CreatePlaylistRequest;
use App\Http\Requests\UpdatePlaylistRequest;
use App\Repositories\PlaylistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PlaylistController extends AppBaseController
{
    /** @var  PlaylistRepository */
    private $playlistRepository;

    public function __construct(PlaylistRepository $playlistRepo)
    {
        $this->playlistRepository = $playlistRepo;
    }

    /**
     * Display a listing of the Playlist.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $playlists = $this->playlistRepository->all();

        return view('playlists.index')
            ->with('playlists', $playlists);
    }

    /**
     * Show the form for creating a new Playlist.
     *
     * @return Response
     */
    public function create()
    {
        $temas = Tema::all()->pluck('name');
        return view('playlists.create', compact('temas'));
    }

    /**
     * Store a newly created Playlist in storage.
     *
     * @param CreatePlaylistRequest $request
     *
     * @return Response
     */
    public function store(CreatePlaylistRequest $request)
    {
        $input = $request->all();

        $playlist = $this->playlistRepository->create($input);

        Flash::success('Playlist saved successfully.');

        return redirect(route('playlists.index'));
    }

    /**
     * Display the specified Playlist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $playlist = $this->playlistRepository->find($id);

        if (empty($playlist)) {
            Flash::error('Playlist not found');

            return redirect(route('playlists.index'));
        }

        return view('playlists.show')->with('playlist', $playlist);
    }

    /**
     * Show the form for editing the specified Playlist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $temas = Tema::all()->pluck('name');
        $playlist = $this->playlistRepository->find($id);

        if (empty($playlist)) {
            Flash::error('Playlist not found');

            return redirect(route('playlists.index'));
        }

        return view('playlists.edit', compact('temas'))->with('playlist', $playlist);
    }

    /**
     * Update the specified Playlist in storage.
     *
     * @param int $id
     * @param UpdatePlaylistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlaylistRequest $request)
    {
        $playlist = $this->playlistRepository->find($id);

        if (empty($playlist)) {
            Flash::error('Playlist not found');

            return redirect(route('playlists.index'));
        }

        $playlist = $this->playlistRepository->update($request->all(), $id);

        Flash::success('Playlist updated successfully.');

        return redirect(route('playlists.index'));
    }

    /**
     * Remove the specified Playlist from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $playlist = $this->playlistRepository->find($id);

        if (empty($playlist)) {
            Flash::error('Playlist not found');

            return redirect(route('playlists.index'));
        }

        $this->playlistRepository->delete($id);

        Flash::success('Playlist deleted successfully.');

        return redirect(route('playlists.index'));
    }
    
    public function home(Request $request){
        
        $pl = Playlist::where('active', 1)
                ->whereNull('deleted_at')
                ->pluck('tema_id')->toArray();
        
        $temas = Tema::whereNotIn('id', $pl)
                ->get();
        
        \Log::info($temas);
        
        
        return view('index', compact('temas'));
    }
    
    public function playlist(Request $request){
        
        $pl = Playlist::where('active', 1)
                ->whereNull('deleted_at')
                ->with('temas')
                ->get();
        
        \Log::info($pl);
        
        return view('playlist', compact('pl'));
    }
    
    public function add(Request $request){
        
        $tema = Tema::where('id', $request->id);
        
        $pl = new Playlist;

        $pl->tema_id = $request->id;
        $pl->active = 1;

        $pl->save();
        
        if($request->ajax()){
            
            return response()->json([
                'success' => true,
            ]);
        }
        
    }
}
