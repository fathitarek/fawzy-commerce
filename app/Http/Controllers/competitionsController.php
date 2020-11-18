<?php

namespace App\Http\Controllers;

use App\DataTables\competitionsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatecompetitionsRequest;
use App\Http\Requests\UpdatecompetitionsRequest;
use App\Repositories\competitionsRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class competitionsController extends AppBaseController
{
    /** @var  competitionsRepository */
    private $competitionsRepository;

    public function __construct(competitionsRepository $competitionsRepo)
    {
        $this->competitionsRepository = $competitionsRepo;
    }

    /**
     * Display a listing of the competitions.
     *
     * @param competitionsDataTable $competitionsDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(competitionsDataTable $competitionsDataTable)
    {
        return $competitionsDataTable->render('competitions.index');
    }

    /**
     * Show the form for creating a new competitions.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('competitions.create');
    }

    /**
     * Store a newly created competitions in storage.
     *
     * @param CreatecompetitionsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreatecompetitionsRequest $request)
    {
        $input = $request->all();
        $destination = 'images/competitions';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $competitions = $this->competitionsRepository->create($input);

        Flash::success('Competitions saved successfully.');

        return redirect(route('competitions.index'));
    }

    /**
     * Display the specified competitions.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $competitions = $this->competitionsRepository->find($id);

        if (empty($competitions)) {
            Flash::error('Competitions not found');

            return redirect(route('competitions.index'));
        }

        return view('competitions.show')->with('competitions', $competitions);
    }

    /**
     * Show the form for editing the specified competitions.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $competitions = $this->competitionsRepository->find($id);

        if (empty($competitions)) {
            Flash::error('Competitions not found');

            return redirect(route('competitions.index'));
        }

        return view('competitions.edit')->with('competitions', $competitions);
    }

    /**
     * Update the specified competitions in storage.
     *
     * @param  int              $id
     * @param UpdatecompetitionsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdatecompetitionsRequest $request)
    {
        $competitions = $this->competitionsRepository->find($id);
        $input = $request->all();
        $destination = 'images/competitions';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        if (empty($competitions)) {
            Flash::error('Competitions not found');

            return redirect(route('competitions.index'));
        }

        $competitions = $this->competitionsRepository->update($input, $id);

        Flash::success('Competitions updated successfully.');

        return redirect(route('competitions.index'));
    }

    /**
     * Remove the specified competitions from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $competitions = $this->competitionsRepository->find($id);

        if (empty($competitions)) {
            Flash::error('Competitions not found');

            return redirect(route('competitions.index'));
        }

        $this->competitionsRepository->delete($id);

        Flash::success('Competitions deleted successfully.');

        return redirect(route('competitions.index'));
    }
}
