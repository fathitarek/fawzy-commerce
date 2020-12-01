<?php

namespace App\Http\Controllers;

use App\DataTables\projects_formDataTable;
use App\Http\Requests;
use App\Http\Requests\Createprojects_formRequest;
use App\Http\Requests\Updateprojects_formRequest;
use App\Repositories\projects_formRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class projects_formController extends AppBaseController
{
    /** @var  projects_formRepository */
    private $projectsFormRepository;

    public function __construct(projects_formRepository $projectsFormRepo)
    {
        $this->projectsFormRepository = $projectsFormRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the projects_form.
     *
     * @param projects_formDataTable $projectsFormDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(projects_formDataTable $projectsFormDataTable)
    {
        return $projectsFormDataTable->render('projects_forms.index');
    }

    /**
     * Show the form for creating a new projects_form.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('projects_forms.create');
    }

    /**
     * Store a newly created projects_form in storage.
     *
     * @param Createprojects_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createprojects_formRequest $request)
    {
        $input = $request->all();

        $projectsForm = $this->projectsFormRepository->create($input);

        Flash::success('Projects Form saved successfully.');

        return redirect(route('projectsForms.index'));
    }

    /**
     * Display the specified projects_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $projectsForm = $this->projectsFormRepository->find($id);

        if (empty($projectsForm)) {
            Flash::error('Projects Form not found');

            return redirect(route('projectsForms.index'));
        }

        return view('projects_forms.show')->with('projectsForm', $projectsForm);
    }

    /**
     * Show the form for editing the specified projects_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $projectsForm = $this->projectsFormRepository->find($id);

        if (empty($projectsForm)) {
            Flash::error('Projects Form not found');

            return redirect(route('projectsForms.index'));
        }

        return view('projects_forms.edit')->with('projectsForm', $projectsForm);
    }

    /**
     * Update the specified projects_form in storage.
     *
     * @param  int              $id
     * @param Updateprojects_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updateprojects_formRequest $request)
    {
        $projectsForm = $this->projectsFormRepository->find($id);

        if (empty($projectsForm)) {
            Flash::error('Projects Form not found');

            return redirect(route('projectsForms.index'));
        }

        $projectsForm = $this->projectsFormRepository->update($request->all(), $id);

        Flash::success('Projects Form updated successfully.');

        return redirect(route('projectsForms.index'));
    }

    /**
     * Remove the specified projects_form from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $projectsForm = $this->projectsFormRepository->find($id);

        if (empty($projectsForm)) {
            Flash::error('Projects Form not found');

            return redirect(route('projectsForms.index'));
        }

        $this->projectsFormRepository->delete($id);

        Flash::success('Projects Form deleted successfully.');

        return redirect(route('projectsForms.index'));
    }
}
