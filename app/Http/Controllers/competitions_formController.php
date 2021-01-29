<?php

namespace App\Http\Controllers;

use App\DataTables\competitions_formDataTable;
use App\Http\Requests;
use App\Http\Requests\Createcompetitions_formRequest;
use App\Http\Requests\Updatecompetitions_formRequest;
use App\Repositories\competitions_formRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Http\Request;

class competitions_formController extends AppBaseController
{
    /** @var  competitions_formRepository */
    private $competitionsFormRepository;

    public function __construct(competitions_formRepository $competitionsFormRepo)
    {
        $this->competitionsFormRepository = $competitionsFormRepo;
        // $this->middleware('auth');
       $this->middleware('auth', ['except' => ['store']]);
    }

    /**
     * Display a listing of the competitions_form.
     *
     * @param competitions_formDataTable $competitionsFormDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(competitions_formDataTable $competitionsFormDataTable)
    {
        return $competitionsFormDataTable->render('competitions_forms.index');
    }

    /**
     * Show the form for creating a new competitions_form.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('competitions_forms.create');
    }

    /**
     * Store a newly created competitions_form in storage.
     *
     * @param Createcompetitions_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createcompetitions_formRequest $request)
    {
        // return $request;
        $input = $request->all();

        $competitionsForm = $this->competitionsFormRepository->create($input);

        Flash::success('Competitions Form saved successfully.');
        return redirect()->back()->with('success', 'successfully ');   

        // return redirect(route('competitionsForms.index'));
    }

    /**
     * Display the specified competitions_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $competitionsForm = $this->competitionsFormRepository->find($id);

        if (empty($competitionsForm)) {
            Flash::error('Competitions Form not found');

            return redirect(route('competitionsForms.index'));
        }

        return view('competitions_forms.show')->with('competitionsForm', $competitionsForm);
    }

    /**
     * Show the form for editing the specified competitions_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $competitionsForm = $this->competitionsFormRepository->find($id);

        if (empty($competitionsForm)) {
            Flash::error('Competitions Form not found');

            return redirect(route('competitionsForms.index'));
        }

        return view('competitions_forms.edit')->with('competitionsForm', $competitionsForm);
    }

    /**
     * Update the specified competitions_form in storage.
     *
     * @param  int              $id
     * @param Updatecompetitions_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatecompetitions_formRequest $request)
    {
        $competitionsForm = $this->competitionsFormRepository->find($id);

        if (empty($competitionsForm)) {
            Flash::error('Competitions Form not found');

            return redirect(route('competitionsForms.index'));
        }

        $competitionsForm = $this->competitionsFormRepository->update($request->all(), $id);

        Flash::success('Competitions Form updated successfully.');

        return redirect(route('competitionsForms.index'));
    }

    /**
     * Remove the specified competitions_form from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $competitionsForm = $this->competitionsFormRepository->find($id);

        if (empty($competitionsForm)) {
            Flash::error('Competitions Form not found');

            return redirect(route('competitionsForms.index'));
        }

        $this->competitionsFormRepository->delete($id);

        Flash::success('Competitions Form deleted successfully.');

        return redirect(route('competitionsForms.index'));
    }
}
