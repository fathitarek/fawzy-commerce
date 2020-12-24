<?php

namespace App\Http\Controllers;

use App\DataTables\newslettersDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatenewslettersRequest;
use App\Http\Requests\UpdatenewslettersRequest;
use App\Repositories\newslettersRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class newslettersController extends AppBaseController
{
    /** @var  newslettersRepository */
    private $newslettersRepository;

    public function __construct(newslettersRepository $newslettersRepo)
    {
        $this->newslettersRepository = $newslettersRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the newsletters.
     *
     * @param newslettersDataTable $newslettersDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(newslettersDataTable $newslettersDataTable)
    {
        return $newslettersDataTable->render('newsletters.index');
    }

    /**
     * Show the form for creating a new newsletters.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('newsletters.create');
    }

    /**
     * Store a newly created newsletters in storage.
     *
     * @param CreatenewslettersRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreatenewslettersRequest $request){
        $input = $request->all();
        $newsletters = $this->newslettersRepository->create($input);
        return $newsletters;
       // Flash::success('Newsletters saved successfully.');
      //  return redirect(route('newsletters.index'));
    }

    /**
     * Display the specified newsletters.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $newsletters = $this->newslettersRepository->find($id);

        if (empty($newsletters)) {
            Flash::error('Newsletters not found');

            return redirect(route('newsletters.index'));
        }

        return view('newsletters.show')->with('newsletters', $newsletters);
    }

    /**
     * Show the form for editing the specified newsletters.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $newsletters = $this->newslettersRepository->find($id);

        if (empty($newsletters)) {
            Flash::error('Newsletters not found');

            return redirect(route('newsletters.index'));
        }

        return view('newsletters.edit')->with('newsletters', $newsletters);
    }

    /**
     * Update the specified newsletters in storage.
     *
     * @param  int              $id
     * @param UpdatenewslettersRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdatenewslettersRequest $request)
    {
        $newsletters = $this->newslettersRepository->find($id);

        if (empty($newsletters)) {
            Flash::error('Newsletters not found');

            return redirect(route('newsletters.index'));
        }

        $newsletters = $this->newslettersRepository->update($request->all(), $id);

        Flash::success('Newsletters updated successfully.');

        return redirect(route('newsletters.index'));
    }

    /**
     * Remove the specified newsletters from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $newsletters = $this->newslettersRepository->find($id);

        if (empty($newsletters)) {
            Flash::error('Newsletters not found');

            return redirect(route('newsletters.index'));
        }

        $this->newslettersRepository->delete($id);

        Flash::success('Newsletters deleted successfully.');

        return redirect(route('newsletters.index'));
    }
}
