<?php

namespace App\Http\Controllers;

use App\DataTables\partnersDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatepartnersRequest;
use App\Http\Requests\UpdatepartnersRequest;
use App\Repositories\partnersRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class partnersController extends AppBaseController
{
    /** @var  partnersRepository */
    private $partnersRepository;

    public function __construct(partnersRepository $partnersRepo)
    {
        $this->partnersRepository = $partnersRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the partners.
     *
     * @param partnersDataTable $partnersDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(partnersDataTable $partnersDataTable)
    {
        return $partnersDataTable->render('partners.index');
    }

    /**
     * Show the form for creating a new partners.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created partners in storage.
     *
     * @param CreatepartnersRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreatepartnersRequest $request)
    {
        $input = $request->all();
        $destination = 'images/partners';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $partners = $this->partnersRepository->create($input);

        Flash::success('Partners saved successfully.');

        return redirect(route('partners.index'));
    }

    /**
     * Display the specified partners.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $partners = $this->partnersRepository->find($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        return view('partners.show')->with('partners', $partners);
    }

    /**
     * Show the form for editing the specified partners.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $partners = $this->partnersRepository->find($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        return view('partners.edit')->with('partners', $partners);
    }

    /**
     * Update the specified partners in storage.
     *
     * @param  int              $id
     * @param UpdatepartnersRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdatepartnersRequest $request)
    {
        $partners = $this->partnersRepository->find($id);
        $input = $request->all();
        $destination = 'images/partners';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        $partners = $this->partnersRepository->update($input, $id);

        Flash::success('Partners updated successfully.');

        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified partners from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $partners = $this->partnersRepository->find($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        $this->partnersRepository->delete($id);

        Flash::success('Partners deleted successfully.');

        return redirect(route('partners.index'));
    }
}
