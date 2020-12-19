<?php

namespace App\Http\Controllers;

use App\DataTables\info_bank_formDataTable;
use App\Http\Requests;
use App\Http\Requests\Createinfo_bank_formRequest;
use App\Http\Requests\Updateinfo_bank_formRequest;
use App\Repositories\info_bank_formRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class info_bank_formController extends AppBaseController
{
    /** @var  info_bank_formRepository */
    private $infoBankFormRepository;

    public function __construct(info_bank_formRepository $infoBankFormRepo)
    {
        $this->infoBankFormRepository = $infoBankFormRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the info_bank_form.
     *
     * @param info_bank_formDataTable $infoBankFormDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(info_bank_formDataTable $infoBankFormDataTable)
    {
        return $infoBankFormDataTable->render('info_bank_forms.index');
    }

    /**
     * Show the form for creating a new info_bank_form.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('info_bank_forms.create');
    }

    /**
     * Store a newly created info_bank_form in storage.
     *
     * @param Createinfo_bank_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createinfo_bank_formRequest $request)
    {
        $input = $request->all();

        $infoBankForm = $this->infoBankFormRepository->create($input);

        Flash::success('Info Bank Form saved successfully.');
        return redirect()->back()->with('success', 'successfully ');   

        // return redirect(route('infoBankForms.index'));
    }

    /**
     * Display the specified info_bank_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $infoBankForm = $this->infoBankFormRepository->find($id);

        if (empty($infoBankForm)) {
            Flash::error('Info Bank Form not found');

            return redirect(route('infoBankForms.index'));
        }

        return view('info_bank_forms.show')->with('infoBankForm', $infoBankForm);
    }

    /**
     * Show the form for editing the specified info_bank_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $infoBankForm = $this->infoBankFormRepository->find($id);

        if (empty($infoBankForm)) {
            Flash::error('Info Bank Form not found');

            return redirect(route('infoBankForms.index'));
        }

        return view('info_bank_forms.edit')->with('infoBankForm', $infoBankForm);
    }

    /**
     * Update the specified info_bank_form in storage.
     *
     * @param  int              $id
     * @param Updateinfo_bank_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updateinfo_bank_formRequest $request)
    {
        $infoBankForm = $this->infoBankFormRepository->find($id);

        if (empty($infoBankForm)) {
            Flash::error('Info Bank Form not found');

            return redirect(route('infoBankForms.index'));
        }

        $infoBankForm = $this->infoBankFormRepository->update($request->all(), $id);

        Flash::success('Info Bank Form updated successfully.');

        return redirect(route('infoBankForms.index'));
    }

    /**
     * Remove the specified info_bank_form from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $infoBankForm = $this->infoBankFormRepository->find($id);

        if (empty($infoBankForm)) {
            Flash::error('Info Bank Form not found');

            return redirect(route('infoBankForms.index'));
        }

        $this->infoBankFormRepository->delete($id);

        Flash::success('Info Bank Form deleted successfully.');

        return redirect(route('infoBankForms.index'));
    }
}
