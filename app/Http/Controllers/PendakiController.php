<?php

namespace App\Http\Controllers;

use App\DataTables\PendakiDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePendakiRequest;
use App\Http\Requests\UpdatePendakiRequest;
use App\Repositories\PendakiRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PendakiController extends AppBaseController
{
    /** @var  PendakiRepository */
    private $pendakiRepository;

    public function __construct(PendakiRepository $pendakiRepo)
    {
        $this->pendakiRepository = $pendakiRepo;
    }

    /**
     * Display a listing of the Pendaki.
     *
     * @param PendakiDataTable $pendakiDataTable
     * @return Response
     */
    public function index(PendakiDataTable $pendakiDataTable)
    {
        return $pendakiDataTable->render('pendakis.index');
    }

    /**
     * Show the form for creating a new Pendaki.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendakis.create');
    }

    /**
     * Store a newly created Pendaki in storage.
     *
     * @param CreatePendakiRequest $request
     *
     * @return Response
     */
    public function store(CreatePendakiRequest $request)
    {
        $input = $request->all();

        $pendaki = $this->pendakiRepository->create($input);

        Flash::success('Pendaki saved successfully.');

        return redirect(route('pendakis.index'));
    }

    /**
     * Display the specified Pendaki.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pendaki = $this->pendakiRepository->find($id);

        if (empty($pendaki)) {
            Flash::error('Pendaki not found');

            return redirect(route('pendakis.index'));
        }

        return view('pendakis.show')->with('pendaki', $pendaki);
    }

    /**
     * Show the form for editing the specified Pendaki.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pendaki = $this->pendakiRepository->find($id);

        if (empty($pendaki)) {
            Flash::error('Pendaki not found');

            return redirect(route('pendakis.index'));
        }

        return view('pendakis.edit')->with('pendaki', $pendaki);
    }

    /**
     * Update the specified Pendaki in storage.
     *
     * @param  int              $id
     * @param UpdatePendakiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePendakiRequest $request)
    {
        $pendaki = $this->pendakiRepository->find($id);

        if (empty($pendaki)) {
            Flash::error('Pendaki not found');

            return redirect(route('pendakis.index'));
        }

        $pendaki = $this->pendakiRepository->update($request->all(), $id);

        Flash::success('Pendaki updated successfully.');

        return redirect(route('pendakis.index'));
    }

    /**
     * Remove the specified Pendaki from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pendaki = $this->pendakiRepository->find($id);

        if (empty($pendaki)) {
            Flash::error('Pendaki not found');

            return redirect(route('pendakis.index'));
        }

        $this->pendakiRepository->delete($id);

        Flash::success('Pendaki deleted successfully.');

        return redirect(route('pendakis.index'));
    }
}
