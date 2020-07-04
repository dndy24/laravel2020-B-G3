<?php

namespace App\Http\Controllers;

use App\DataTables\ReguDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateReguRequest;
use App\Http\Requests\UpdateReguRequest;
use App\Repositories\ReguRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ReguController extends AppBaseController
{
    /** @var  ReguRepository */
    private $reguRepository;

    public function __construct(ReguRepository $reguRepo)
    {
        $this->reguRepository = $reguRepo;
    }

    /**
     * Display a listing of the Regu.
     *
     * @param ReguDataTable $reguDataTable
     * @return Response
     */
    public function index(ReguDataTable $reguDataTable)
    {
        return $reguDataTable->render('regus.index');
    }

    /**
     * Show the form for creating a new Regu.
     *
     * @return Response
     */
    public function create()
    {
        return view('regus.create');
    }

    /**
     * Store a newly created Regu in storage.
     *
     * @param CreateReguRequest $request
     *
     * @return Response
     */
    public function store(CreateReguRequest $request)
    {
        $input = $request->all();

        $regu = $this->reguRepository->create($input);

        Flash::success('Regu saved successfully.');

        return redirect(route('regus.index'));
    }

    /**
     * Display the specified Regu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $regu = $this->reguRepository->find($id);

        if (empty($regu)) {
            Flash::error('Regu not found');

            return redirect(route('regus.index'));
        }

        return view('regus.show')->with('regu', $regu);
    }

    /**
     * Show the form for editing the specified Regu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $regu = $this->reguRepository->find($id);

        if (empty($regu)) {
            Flash::error('Regu not found');

            return redirect(route('regus.index'));
        }

        return view('regus.edit')->with('regu', $regu);
    }

    /**
     * Update the specified Regu in storage.
     *
     * @param  int              $id
     * @param UpdateReguRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReguRequest $request)
    {
        $regu = $this->reguRepository->find($id);

        if (empty($regu)) {
            Flash::error('Regu not found');

            return redirect(route('regus.index'));
        }

        $regu = $this->reguRepository->update($request->all(), $id);

        Flash::success('Regu updated successfully.');

        return redirect(route('regus.index'));
    }

    /**
     * Remove the specified Regu from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $regu = $this->reguRepository->find($id);

        if (empty($regu)) {
            Flash::error('Regu not found');

            return redirect(route('regus.index'));
        }

        $this->reguRepository->delete($id);

        Flash::success('Regu deleted successfully.');

        return redirect(route('regus.index'));
    }
}
