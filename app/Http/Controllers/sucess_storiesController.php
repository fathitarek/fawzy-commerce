<?php

namespace App\Http\Controllers;

use App\DataTables\sucess_storiesDataTable;
use App\Http\Requests;
use App\Http\Requests\Createsucess_storiesRequest;
use App\Http\Requests\Updatesucess_storiesRequest;
use App\Repositories\sucess_storiesRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class sucess_storiesController extends AppBaseController
{
    /** @var  sucess_storiesRepository */
    private $sucessStoriesRepository;

    public function __construct(sucess_storiesRepository $sucessStoriesRepo)
    {
        $this->sucessStoriesRepository = $sucessStoriesRepo;
    }

    /**
     * Display a listing of the sucess_stories.
     *
     * @param sucess_storiesDataTable $sucessStoriesDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(sucess_storiesDataTable $sucessStoriesDataTable)
    {
        return $sucessStoriesDataTable->render('sucess_stories.index');
    }

    /**
     * Show the form for creating a new sucess_stories.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('sucess_stories.create');
    }

    /**
     * Store a newly created sucess_stories in storage.
     *
     * @param Createsucess_storiesRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createsucess_storiesRequest $request)
    {
        $input = $request->all();

        $sucessStories = $this->sucessStoriesRepository->create($input);

        Flash::success('Sucess Stories saved successfully.');

        return redirect(route('sucessStories.index'));
    }

    /**
     * Display the specified sucess_stories.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $sucessStories = $this->sucessStoriesRepository->find($id);

        if (empty($sucessStories)) {
            Flash::error('Sucess Stories not found');

            return redirect(route('sucessStories.index'));
        }

        return view('sucess_stories.show')->with('sucessStories', $sucessStories);
    }

    /**
     * Show the form for editing the specified sucess_stories.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $sucessStories = $this->sucessStoriesRepository->find($id);

        if (empty($sucessStories)) {
            Flash::error('Sucess Stories not found');

            return redirect(route('sucessStories.index'));
        }

        return view('sucess_stories.edit')->with('sucessStories', $sucessStories);
    }

    /**
     * Update the specified sucess_stories in storage.
     *
     * @param  int              $id
     * @param Updatesucess_storiesRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatesucess_storiesRequest $request)
    {
        $sucessStories = $this->sucessStoriesRepository->find($id);

        if (empty($sucessStories)) {
            Flash::error('Sucess Stories not found');

            return redirect(route('sucessStories.index'));
        }

        $sucessStories = $this->sucessStoriesRepository->update($request->all(), $id);

        Flash::success('Sucess Stories updated successfully.');

        return redirect(route('sucessStories.index'));
    }

    /**
     * Remove the specified sucess_stories from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $sucessStories = $this->sucessStoriesRepository->find($id);

        if (empty($sucessStories)) {
            Flash::error('Sucess Stories not found');

            return redirect(route('sucessStories.index'));
        }

        $this->sucessStoriesRepository->delete($id);

        Flash::success('Sucess Stories deleted successfully.');

        return redirect(route('sucessStories.index'));
    }
}
