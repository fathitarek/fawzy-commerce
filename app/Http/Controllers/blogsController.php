<?php

namespace App\Http\Controllers;

use App\DataTables\blogsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateblogsRequest;
use App\Http\Requests\UpdateblogsRequest;
use App\Repositories\blogsRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class blogsController extends AppBaseController
{
    /** @var  blogsRepository */
    private $blogsRepository;

    public function __construct(blogsRepository $blogsRepo)
    {
        $this->blogsRepository = $blogsRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the blogs.
     *
     * @param blogsDataTable $blogsDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(blogsDataTable $blogsDataTable)
    {
        return $blogsDataTable->render('blogs.index');
    }

    /**
     * Show the form for creating a new blogs.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created blogs in storage.
     *
     * @param CreateblogsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreateblogsRequest $request)
    {
        $input = $request->all();
        $destination = 'images/blogs';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $blogs = $this->blogsRepository->create($input);

        Flash::success('Blogs saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified blogs.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blogs', $blogs);
    }

    /**
     * Show the form for editing the specified blogs.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blogs', $blogs);
    }

    /**
     * Update the specified blogs in storage.
     *
     * @param  int              $id
     * @param UpdateblogsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdateblogsRequest $request)
    {
        $blogs = $this->blogsRepository->find($id);
        $input = $request->all();
        $destination = 'images/blogs';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        $blogs = $this->blogsRepository->update($input, $id);

        Flash::success('Blogs updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified blogs from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        $this->blogsRepository->delete($id);

        Flash::success('Blogs deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
