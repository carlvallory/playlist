<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Album;
use App\Tema;
use App\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    
    public function index(Request $request){
        
        $pl = Playlist::where('active', 1)->pluck('tema_id')->toArray();
        
        $temas = Tema::whereNotIn('id', $pl)
                ->get();
        
        \Log::info($temas);
        
        
        return view('index', compact('temas'));
    }
    
    public function playlist(Request $request){
        
        $pl = Playlist::where('active', 1)
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
