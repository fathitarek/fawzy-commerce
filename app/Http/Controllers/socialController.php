<?php

namespace App\Http\Controllers;

use App\DataTables\socialDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatesocialRequest;
use App\Http\Requests\UpdatesocialRequest;
use App\Repositories\socialRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class socialController extends AppBaseController
{
    /** @var  socialRepository */
    private $socialRepository;

    public function __construct(socialRepository $socialRepo)
    {
        $this->socialRepository = $socialRepo;
    }

    /**
     * Display a listing of the social.
     *
     * @param socialDataTable $socialDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(socialDataTable $socialDataTable)
    {
        return $socialDataTable->render('socials.index');
    }

    /**
     * Show the form for creating a new social.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('socials.create');
    }

    /**
     * Store a newly created social in storage.
     *
     * @param CreatesocialRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreatesocialRequest $request)
    {
        $input = $request->all();

        $social = $this->socialRepository->create($input);

        Flash::success('Social saved successfully.');

        return redirect(route('socials.index'));
    }

    /**
     * Display the specified social.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $social = $this->socialRepository->find($id);

        if (empty($social)) {
            Flash::error('Social not found');

            return redirect(route('socials.index'));
        }

        return view('socials.show')->with('social', $social);
    }

    /**
     * Show the form for editing the specified social.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $social = $this->socialRepository->find($id);

        if (empty($social)) {
            Flash::error('Social not found');

            return redirect(route('socials.index'));
        }

        return view('socials.edit')->with('social', $social);
    }

    /**
     * Update the specified social in storage.
     *
     * @param  int              $id
     * @param UpdatesocialRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdatesocialRequest $request)
    {
        $social = $this->socialRepository->find($id);

        if (empty($social)) {
            Flash::error('Social not found');

            return redirect(route('socials.index'));
        }

        $social = $this->socialRepository->update($request->all(), $id);

        Flash::success('Social updated successfully.');

        return redirect(route('socials.index'));
    }

    /**
     * Remove the specified social from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $social = $this->socialRepository->find($id);

        if (empty($social)) {
            Flash::error('Social not found');

            return redirect(route('socials.index'));
        }

        $this->socialRepository->delete($id);

        Flash::success('Social deleted successfully.');

        return redirect(route('socials.index'));
    }
}
