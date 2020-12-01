<?php

namespace App\Http\Controllers;

use App\DataTables\bank_informationDataTable;
use App\Http\Requests;
use App\Http\Requests\Createbank_informationRequest;
use App\Http\Requests\Updatebank_informationRequest;
use App\Repositories\bank_informationRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class bank_informationController extends AppBaseController
{
    /** @var  bank_informationRepository */
    private $bankInformationRepository;

    public function __construct(bank_informationRepository $bankInformationRepo)
    {
        $this->bankInformationRepository = $bankInformationRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the bank_information.
     *
     * @param bank_informationDataTable $bankInformationDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(bank_informationDataTable $bankInformationDataTable)
    {
        return $bankInformationDataTable->render('bank_informations.index');
    }

    /**
     * Show the form for creating a new bank_information.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('bank_informations.create');
    }

    /**
     * Store a newly created bank_information in storage.
     *
     * @param Createbank_informationRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createbank_informationRequest $request)
    {
        $input = $request->all();
        $destination = 'images/info_bank';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $bankInformation = $this->bankInformationRepository->create($input);

        Flash::success('Bank Information saved successfully.');

        return redirect(route('bankInformations.index'));
    }

    /**
     * Display the specified bank_information.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $bankInformation = $this->bankInformationRepository->find($id);

        if (empty($bankInformation)) {
            Flash::error('Bank Information not found');

            return redirect(route('bankInformations.index'));
        }

        return view('bank_informations.show')->with('bankInformation', $bankInformation);
    }

    /**
     * Show the form for editing the specified bank_information.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $bankInformation = $this->bankInformationRepository->find($id);

        if (empty($bankInformation)) {
            Flash::error('Bank Information not found');

            return redirect(route('bankInformations.index'));
        }

        return view('bank_informations.edit')->with('bankInformation', $bankInformation);
    }

    /**
     * Update the specified bank_information in storage.
     *
     * @param  int              $id
     * @param Updatebank_informationRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatebank_informationRequest $request)
    {
        $bankInformation = $this->bankInformationRepository->find($id);
        $input = $request->all();
        $destination = 'images/info_bank';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        if (empty($bankInformation)) {
            Flash::error('Bank Information not found');

            return redirect(route('bankInformations.index'));
        }

        $bankInformation = $this->bankInformationRepository->update($input ,$id);

        Flash::success('Bank Information updated successfully.');

        return redirect(route('bankInformations.index'));
    }

    /**
     * Remove the specified bank_information from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $bankInformation = $this->bankInformationRepository->find($id);

        if (empty($bankInformation)) {
            Flash::error('Bank Information not found');

            return redirect(route('bankInformations.index'));
        }

        $this->bankInformationRepository->delete($id);

        Flash::success('Bank Information deleted successfully.');

        return redirect(route('bankInformations.index'));
    }
}
