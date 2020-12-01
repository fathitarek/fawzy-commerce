<?php

namespace App\Http\Controllers;

use App\DataTables\categoriesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;
use App\Repositories\categoriesRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class categoriesController extends AppBaseController
{
    /** @var  categoriesRepository */
    private $categoriesRepository;

    public function __construct(categoriesRepository $categoriesRepo)
    {
        $this->categoriesRepository = $categoriesRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the categories.
     *
     * @param categoriesDataTable $categoriesDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(categoriesDataTable $categoriesDataTable)
    {
        return $categoriesDataTable->render('categories.index');
    }

    /**
     * Show the form for creating a new categories.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created categories in storage.
     *
     * @param CreatecategoriesRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreatecategoriesRequest $request)
    {
        $input = $request->all();

        $categories = $this->categoriesRepository->create($input);

        Flash::success('Categories saved successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified categories.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified categories.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('categories', $categories);
    }

    /**
     * Update the specified categories in storage.
     *
     * @param  int              $id
     * @param UpdatecategoriesRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdatecategoriesRequest $request)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        $categories = $this->categoriesRepository->update($request->all(), $id);

        Flash::success('Categories updated successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified categories from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        $this->categoriesRepository->delete($id);

        Flash::success('Categories deleted successfully.');

        return redirect(route('categories.index'));
    }
}
