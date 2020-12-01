<?php

namespace App\Http\Controllers;

use App\DataTables\live_certificateDataTable;
use App\Http\Requests;
use App\Http\Requests\Createlive_certificateRequest;
use App\Http\Requests\Updatelive_certificateRequest;
use App\Repositories\live_certificateRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class live_certificateController extends AppBaseController
{
    /** @var  live_certificateRepository */
    private $liveCertificateRepository;

    public function __construct(live_certificateRepository $liveCertificateRepo)
    {
        $this->liveCertificateRepository = $liveCertificateRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the live_certificate.
     *
     * @param live_certificateDataTable $liveCertificateDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(live_certificateDataTable $liveCertificateDataTable)
    {
        return $liveCertificateDataTable->render('live_certificates.index');
    }

    /**
     * Show the form for creating a new live_certificate.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('live_certificates.create');
    }

    /**
     * Store a newly created live_certificate in storage.
     *
     * @param Createlive_certificateRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createlive_certificateRequest $request)
    {
        $input = $request->all();
        $destination = 'images/live_certificate';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $liveCertificate = $this->liveCertificateRepository->create($input);

        Flash::success('Live Certificate saved successfully.');

        return redirect(route('liveCertificates.index'));
    }

    /**
     * Display the specified live_certificate.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $liveCertificate = $this->liveCertificateRepository->find($id);

        if (empty($liveCertificate)) {
            Flash::error('Live Certificate not found');

            return redirect(route('liveCertificates.index'));
        }

        return view('live_certificates.show')->with('liveCertificate', $liveCertificate);
    }

    /**
     * Show the form for editing the specified live_certificate.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $liveCertificate = $this->liveCertificateRepository->find($id);

        if (empty($liveCertificate)) {
            Flash::error('Live Certificate not found');

            return redirect(route('liveCertificates.index'));
        }

        return view('live_certificates.edit')->with('liveCertificate', $liveCertificate);
    }

    /**
     * Update the specified live_certificate in storage.
     *
     * @param  int              $id
     * @param Updatelive_certificateRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatelive_certificateRequest $request)
    {
        $liveCertificate = $this->liveCertificateRepository->find($id);
        
        $input = $request->all();
        $destination = 'images/live_certificate';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        if (empty($liveCertificate)) {
            Flash::error('Live Certificate not found');

            return redirect(route('liveCertificates.index'));
        }

        $liveCertificate = $this->liveCertificateRepository->update($input, $id);

        Flash::success('Live Certificate updated successfully.');

        return redirect(route('liveCertificates.index'));
    }

    /**
     * Remove the specified live_certificate from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $liveCertificate = $this->liveCertificateRepository->find($id);

        if (empty($liveCertificate)) {
            Flash::error('Live Certificate not found');

            return redirect(route('liveCertificates.index'));
        }

        $this->liveCertificateRepository->delete($id);

        Flash::success('Live Certificate deleted successfully.');

        return redirect(route('liveCertificates.index'));
    }
}
