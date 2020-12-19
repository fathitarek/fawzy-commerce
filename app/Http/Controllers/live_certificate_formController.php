<?php

namespace App\Http\Controllers;

use App\DataTables\live_certificate_formDataTable;
use App\Http\Requests;
use App\Http\Requests\Createlive_certificate_formRequest;
use App\Http\Requests\Updatelive_certificate_formRequest;
use App\Repositories\live_certificate_formRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class live_certificate_formController extends AppBaseController
{
    /** @var  live_certificate_formRepository */
    private $liveCertificateFormRepository;

    public function __construct(live_certificate_formRepository $liveCertificateFormRepo)
    {
        $this->liveCertificateFormRepository = $liveCertificateFormRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the live_certificate_form.
     *
     * @param live_certificate_formDataTable $liveCertificateFormDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(live_certificate_formDataTable $liveCertificateFormDataTable)
    {
        return $liveCertificateFormDataTable->render('live_certificate_forms.index');
    }

    /**
     * Show the form for creating a new live_certificate_form.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('live_certificate_forms.create');
    }

    /**
     * Store a newly created live_certificate_form in storage.
     *
     * @param Createlive_certificate_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createlive_certificate_formRequest $request)
    {
        $input = $request->all();

        $liveCertificateForm = $this->liveCertificateFormRepository->create($input);

        Flash::success('Live Certificate Form saved successfully.');
        return redirect()->back()->with('success', 'successfully ');   

        // return redirect(route('liveCertificateForms.index'));
    }

    /**
     * Display the specified live_certificate_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $liveCertificateForm = $this->liveCertificateFormRepository->find($id);

        if (empty($liveCertificateForm)) {
            Flash::error('Live Certificate Form not found');

            return redirect(route('liveCertificateForms.index'));
        }

        return view('live_certificate_forms.show')->with('liveCertificateForm', $liveCertificateForm);
    }

    /**
     * Show the form for editing the specified live_certificate_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $liveCertificateForm = $this->liveCertificateFormRepository->find($id);

        if (empty($liveCertificateForm)) {
            Flash::error('Live Certificate Form not found');

            return redirect(route('liveCertificateForms.index'));
        }

        return view('live_certificate_forms.edit')->with('liveCertificateForm', $liveCertificateForm);
    }

    /**
     * Update the specified live_certificate_form in storage.
     *
     * @param  int              $id
     * @param Updatelive_certificate_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatelive_certificate_formRequest $request)
    {
        $liveCertificateForm = $this->liveCertificateFormRepository->find($id);

        if (empty($liveCertificateForm)) {
            Flash::error('Live Certificate Form not found');

            return redirect(route('liveCertificateForms.index'));
        }

        $liveCertificateForm = $this->liveCertificateFormRepository->update($request->all(), $id);

        Flash::success('Live Certificate Form updated successfully.');

        return redirect(route('liveCertificateForms.index'));
    }

    /**
     * Remove the specified live_certificate_form from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $liveCertificateForm = $this->liveCertificateFormRepository->find($id);

        if (empty($liveCertificateForm)) {
            Flash::error('Live Certificate Form not found');

            return redirect(route('liveCertificateForms.index'));
        }

        $this->liveCertificateFormRepository->delete($id);

        Flash::success('Live Certificate Form deleted successfully.');

        return redirect(route('liveCertificateForms.index'));
    }
}
