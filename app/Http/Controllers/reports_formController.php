<?php

namespace App\Http\Controllers;

use App\DataTables\reports_formDataTable;
use App\Http\Requests;
use App\Http\Requests\Createreports_formRequest;
use App\Http\Requests\Updatereports_formRequest;
use App\Repositories\reports_formRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class reports_formController extends AppBaseController
{
    /** @var  reports_formRepository */
    private $reportsFormRepository;

    public function __construct(reports_formRepository $reportsFormRepo)
    {
        $this->reportsFormRepository = $reportsFormRepo;
        $this->middleware('auth', ['except' => ['store']]);
    }

    /**
     * Display a listing of the reports_form.
     *
     * @param reports_formDataTable $reportsFormDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(reports_formDataTable $reportsFormDataTable)
    {
        return $reportsFormDataTable->render('reports_forms.index');
    }

    /**
     * Show the form for creating a new reports_form.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('reports_forms.create');
    }

    /**
     * Store a newly created reports_form in storage.
     *
     * @param Createreports_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createreports_formRequest $request)
    {
        $input = $request->all();

        $reportsForm = $this->reportsFormRepository->create($input);

        Flash::success('Reports Form saved successfully.');
        return redirect()->back()->with('success', 'successfully ');

        // return redirect(route('reportsForms.index'));
    }

    /**
     * Display the specified reports_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $reportsForm = $this->reportsFormRepository->find($id);

        if (empty($reportsForm)) {
            Flash::error('Reports Form not found');

            return redirect(route('reportsForms.index'));
        }

        return view('reports_forms.show')->with('reportsForm', $reportsForm);
    }

    /**
     * Show the form for editing the specified reports_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $reportsForm = $this->reportsFormRepository->find($id);

        if (empty($reportsForm)) {
            Flash::error('Reports Form not found');

            return redirect(route('reportsForms.index'));
        }

        return view('reports_forms.edit')->with('reportsForm', $reportsForm);
    }

    /**
     * Update the specified reports_form in storage.
     *
     * @param  int              $id
     * @param Updatereports_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatereports_formRequest $request)
    {
        $reportsForm = $this->reportsFormRepository->find($id);

        if (empty($reportsForm)) {
            Flash::error('Reports Form not found');

            return redirect(route('reportsForms.index'));
        }

        $reportsForm = $this->reportsFormRepository->update($request->all(), $id);

        Flash::success('Reports Form updated successfully.');

        return redirect(route('reportsForms.index'));
    }

    /**
     * Remove the specified reports_form from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $reportsForm = $this->reportsFormRepository->find($id);

        if (empty($reportsForm)) {
            Flash::error('Reports Form not found');

            return redirect(route('reportsForms.index'));
        }

        $this->reportsFormRepository->delete($id);

        Flash::success('Reports Form deleted successfully.');

        return redirect(route('reportsForms.index'));
    }
}
