<?php

namespace App\Http\Controllers;

use App\DataTables\sub_categoriesDataTable;
use App\Http\Requests;
use App\Http\Requests\Createsub_categoriesRequest;
use App\Http\Requests\Updatesub_categoriesRequest;
use App\Repositories\sub_categoriesRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use App\Models\categories;

class sub_categoriesController extends AppBaseController
{
    /** @var  sub_categoriesRepository */
    private $subCategoriesRepository;

    public function __construct(sub_categoriesRepository $subCategoriesRepo)
    {
        $this->subCategoriesRepository = $subCategoriesRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the sub_categories.
     *
     * @param sub_categoriesDataTable $subCategoriesDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(sub_categoriesDataTable $subCategoriesDataTable)
    {
        return $subCategoriesDataTable->render('sub_categories.index');
    }

    /**
     * Show the form for creating a new sub_categories.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        $categories = categories::latest()->pluck('name_en', 'id');

        return view('sub_categories.create')->with('categories',$categories);
    }

    /**
     * Store a newly created sub_categories in storage.
     *
     * @param Createsub_categoriesRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createsub_categoriesRequest $request)
    {
        $input = $request->all();

        $subCategories = $this->subCategoriesRepository->create($input);

        Flash::success('Sub Categories saved successfully.');

        return redirect(route('subCategories.index'));
    }

    /**
     * Display the specified sub_categories.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $subCategories = $this->subCategoriesRepository->find($id);

        if (empty($subCategories)) {
            Flash::error('Sub Categories not found');

            return redirect(route('subCategories.index'));
        }

        return view('sub_categories.show')->with('subCategories', $subCategories);
    }

    /**
     * Show the form for editing the specified sub_categories.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $subCategories = $this->subCategoriesRepository->find($id);
        $categories = categories::latest()->pluck('name_en', 'id');

        if (empty($subCategories)) {
            Flash::error('Sub Categories not found');

            return redirect(route('subCategories.index'));
        }

        return view('sub_categories.edit')->with('subCategories', $subCategories)->with('categories',$categories);
    }

    /**
     * Update the specified sub_categories in storage.
     *
     * @param  int              $id
     * @param Updatesub_categoriesRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatesub_categoriesRequest $request)
    {
        $subCategories = $this->subCategoriesRepository->find($id);

        if (empty($subCategories)) {
            Flash::error('Sub Categories not found');

            return redirect(route('subCategories.index'));
        }

        $subCategories = $this->subCategoriesRepository->update($request->all(), $id);

        Flash::success('Sub Categories updated successfully.');

        return redirect(route('subCategories.index'));
    }

    /**
     * Remove the specified sub_categories from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $subCategories = $this->subCategoriesRepository->find($id);

        if (empty($subCategories)) {
            Flash::error('Sub Categories not found');

            return redirect(route('subCategories.index'));
        }

        $this->subCategoriesRepository->delete($id);

        Flash::success('Sub Categories deleted successfully.');

        return redirect(route('subCategories.index'));
    }
}
