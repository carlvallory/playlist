<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Album;
use App\Http\Requests\CreateTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use App\Repositories\TemaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TemaController extends AppBaseController
{
    /** @var  TemaRepository */
    private $temaRepository;

    public function __construct(TemaRepository $temaRepo)
    {
        $this->temaRepository = $temaRepo;
    }

    /**
     * Display a listing of the Tema.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $temas = $this->temaRepository->all();

        return view('temas.index')
            ->with('temas', $temas);
    }

    /**
     * Show the form for creating a new Tema.
     *
     * @return Response
     */
    public function create()
    {
        $artists = Artist::all()->pluck('name');
        $albums = Album::all()->pluck('name');
        
        return view('temas.create', compact('artists', 'albums'));
    }

    /**
     * Store a newly created Tema in storage.
     *
     * @param CreateTemaRequest $request
     *
     * @return Response
     */
    public function store(CreateTemaRequest $request)
    {
        $input = $request->all();

        $tema = $this->temaRepository->create($input);

        Flash::success('Tema saved successfully.');

        return redirect(route('temas.index'));
    }

    /**
     * Display the specified Tema.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tema = $this->temaRepository->find($id);

        if (empty($tema)) {
            Flash::error('Tema not found');

            return redirect(route('temas.index'));
        }

        return view('temas.show')->with('tema', $tema);
    }

    /**
     * Show the form for editing the specified Tema.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $artists = Artist::all()->pluck('name');
        $albums = Album::all()->pluck('name');
        $tema = $this->temaRepository->find($id);

        if (empty($tema)) {
            Flash::error('Tema not found');

            return redirect(route('temas.index'));
        }

        return view('temas.edit', compact('artists','albums'))->with('tema', $tema);
    }

    /**
     * Update the specified Tema in storage.
     *
     * @param int $id
     * @param UpdateTemaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTemaRequest $request)
    {
        $tema = $this->temaRepository->find($id);

        if (empty($tema)) {
            Flash::error('Tema not found');

            return redirect(route('temas.index'));
        }

        $tema = $this->temaRepository->update($request->all(), $id);

        Flash::success('Tema updated successfully.');

        return redirect(route('temas.index'));
    }

    /**
     * Remove the specified Tema from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tema = $this->temaRepository->find($id);

        if (empty($tema)) {
            Flash::error('Tema not found');

            return redirect(route('temas.index'));
        }

        $this->temaRepository->delete($id);

        Flash::success('Tema deleted successfully.');

        return redirect(route('temas.index'));
    }
}
