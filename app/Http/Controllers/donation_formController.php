<?php

namespace App\Http\Controllers;

use App\DataTables\donation_formDataTable;
use App\Http\Requests;
use App\Http\Requests\Createdonation_formRequest;
use App\Http\Requests\Updatedonation_formRequest;
use App\Repositories\donation_formRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Http\Request;
class donation_formController extends AppBaseController
{
    /** @var  donation_formRepository */
    private $donationFormRepository;

    public function __construct(donation_formRepository $donationFormRepo)
    {
        $this->donationFormRepository = $donationFormRepo;
        $this->middleware('auth', ['except' => ['store']]);
    }

    /**
     * Display a listing of the donation_form.
     *
     * @param donation_formDataTable $donationFormDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(donation_formDataTable $donationFormDataTable)
    {
        return $donationFormDataTable->render('donation_forms.index');
    }

    /**
     * Show the form for creating a new donation_form.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('donation_forms.create');
    }

    /**
     * Store a newly created donation_form in storage.
     *
     * @param Createdonation_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $donationForm = $this->donationFormRepository->create($input);

        Flash::success('Donation Form saved successfully.');
        return redirect()->back()->with('success', 'successfully '); 
        // return redirect(route('donationForms.index'));
    }

    /**
     * Display the specified donation_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $donationForm = $this->donationFormRepository->find($id);

        if (empty($donationForm)) {
            Flash::error('Donation Form not found');

            return redirect(route('donationForms.index'));
        }

        return view('donation_forms.show')->with('donationForm', $donationForm);
    }

    /**
     * Show the form for editing the specified donation_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $donationForm = $this->donationFormRepository->find($id);

        if (empty($donationForm)) {
            Flash::error('Donation Form not found');

            return redirect(route('donationForms.index'));
        }

        return view('donation_forms.edit')->with('donationForm', $donationForm);
    }

    /**
     * Update the specified donation_form in storage.
     *
     * @param  int              $id
     * @param Updatedonation_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatedonation_formRequest $request)
    {
        $donationForm = $this->donationFormRepository->find($id);

        if (empty($donationForm)) {
            Flash::error('Donation Form not found');

            return redirect(route('donationForms.index'));
        }

        $donationForm = $this->donationFormRepository->update($request->all(), $id);

        Flash::success('Donation Form updated successfully.');

        return redirect(route('donationForms.index'));
    }

    /**
     * Remove the specified donation_form from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $donationForm = $this->donationFormRepository->find($id);

        if (empty($donationForm)) {
            Flash::error('Donation Form not found');

            return redirect(route('donationForms.index'));
        }

        $this->donationFormRepository->delete($id);

        Flash::success('Donation Form deleted successfully.');

        return redirect(route('donationForms.index'));
    }
}
