<?php

namespace App\Http\Controllers;

use App\DataTables\donationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatedonationRequest;
use App\Http\Requests\UpdatedonationRequest;
use App\Repositories\donationRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class donationController extends AppBaseController
{
    /** @var  donationRepository */
    private $donationRepository;

    public function __construct(donationRepository $donationRepo)
    {
        $this->donationRepository = $donationRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the donation.
     *
     * @param donationDataTable $donationDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(donationDataTable $donationDataTable)
    {
        return $donationDataTable->render('donations.index');
    }

    /**
     * Show the form for creating a new donation.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('donations.create');
    }

    /**
     * Store a newly created donation in storage.
     *
     * @param CreatedonationRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */

    function saveFile($image , $directory)
    {
         $filename = str_random(6).'_'.time() . "." . $image->getClientOriginalExtension();
        //$filename = $image->getClientOriginalName();
        $path = public_path() . $directory ;
        $image->move($directory , $filename);
        return $filename;
    }
    public function store(CreatedonationRequest $request)
    {
        $input = $request->all();
        $destination = 'images/donation';
        
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $donation = $this->donationRepository->create($input);

        Flash::success('Donation saved successfully.');

        return redirect(route('donations.index'));
    }

    /**
     * Display the specified donation.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $donation = $this->donationRepository->find($id);

        if (empty($donation)) {
            Flash::error('Donation not found');

            return redirect(route('donations.index'));
        }

        return view('donations.show')->with('donation', $donation);
    }

    /**
     * Show the form for editing the specified donation.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $donation = $this->donationRepository->find($id);

        if (empty($donation)) {
            Flash::error('Donation not found');

            return redirect(route('donations.index'));
        }

        return view('donations.edit')->with('donation', $donation);
    }

    /**
     * Update the specified donation in storage.
     *
     * @param  int              $id
     * @param UpdatedonationRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdatedonationRequest $request)
    {
        $donation = $this->donationRepository->find($id);

        if (empty($donation)) {
            Flash::error('Donation not found');

            return redirect(route('donations.index'));
        }

        $donation = $this->donationRepository->update($request->all(), $id);

        Flash::success('Donation updated successfully.');

        return redirect(route('donations.index'));
    }

    /**
     * Remove the specified donation from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $donation = $this->donationRepository->find($id);

        if (empty($donation)) {
            Flash::error('Donation not found');

            return redirect(route('donations.index'));
        }

        $this->donationRepository->delete($id);

        Flash::success('Donation deleted successfully.');

        return redirect(route('donations.index'));
    }
}
