<?php

namespace App\Http\Controllers;

use App\DataTables\PerlengkapanDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePerlengkapanRequest;
use App\Http\Requests\UpdatePerlengkapanRequest;
use App\Repositories\PerlengkapanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PerlengkapanController extends AppBaseController
{
    /** @var  PerlengkapanRepository */
    private $perlengkapanRepository;

    public function __construct(PerlengkapanRepository $perlengkapanRepo)
    {
        $this->perlengkapanRepository = $perlengkapanRepo;
    }

    /**
     * Display a listing of the Perlengkapan.
     *
     * @param PerlengkapanDataTable $perlengkapanDataTable
     * @return Response
     */
    public function index(PerlengkapanDataTable $perlengkapanDataTable)
    {
        return $perlengkapanDataTable->render('perlengkapans.index');
    }

    /**
     * Show the form for creating a new Perlengkapan.
     *
     * @return Response
     */
    public function create()
    {
        return view('perlengkapans.create');
    }

    /**
     * Store a newly created Perlengkapan in storage.
     *
     * @param CreatePerlengkapanRequest $request
     *
     * @return Response
     */
    public function store(CreatePerlengkapanRequest $request)
    {
        $input = $request->all();

        $perlengkapan = $this->perlengkapanRepository->create($input);

        Flash::success('Perlengkapan saved successfully.');

        return redirect(route('perlengkapans.index'));
    }

    /**
     * Display the specified Perlengkapan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perlengkapan = $this->perlengkapanRepository->find($id);

        if (empty($perlengkapan)) {
            Flash::error('Perlengkapan not found');

            return redirect(route('perlengkapans.index'));
        }

        return view('perlengkapans.show')->with('perlengkapan', $perlengkapan);
    }

    /**
     * Show the form for editing the specified Perlengkapan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perlengkapan = $this->perlengkapanRepository->find($id);

        if (empty($perlengkapan)) {
            Flash::error('Perlengkapan not found');

            return redirect(route('perlengkapans.index'));
        }

        return view('perlengkapans.edit')->with('perlengkapan', $perlengkapan);
    }

    /**
     * Update the specified Perlengkapan in storage.
     *
     * @param  int              $id
     * @param UpdatePerlengkapanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerlengkapanRequest $request)
    {
        $perlengkapan = $this->perlengkapanRepository->find($id);

        if (empty($perlengkapan)) {
            Flash::error('Perlengkapan not found');

            return redirect(route('perlengkapans.index'));
        }

        $perlengkapan = $this->perlengkapanRepository->update($request->all(), $id);

        Flash::success('Perlengkapan updated successfully.');

        return redirect(route('perlengkapans.index'));
    }

    /**
     * Remove the specified Perlengkapan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perlengkapan = $this->perlengkapanRepository->find($id);

        if (empty($perlengkapan)) {
            Flash::error('Perlengkapan not found');

            return redirect(route('perlengkapans.index'));
        }

        $this->perlengkapanRepository->delete($id);

        Flash::success('Perlengkapan deleted successfully.');

        return redirect(route('perlengkapans.index'));
    }
}
