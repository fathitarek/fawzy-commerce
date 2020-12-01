<?php

namespace App\Http\Controllers;

use App\DataTables\category_blogDataTable;
use App\Http\Requests;
use App\Http\Requests\Createcategory_blogRequest;
use App\Http\Requests\Updatecategory_blogRequest;
use App\Repositories\category_blogRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class category_blogController extends AppBaseController
{
    /** @var  category_blogRepository */
    private $categoryBlogRepository;

    public function __construct(category_blogRepository $categoryBlogRepo)
    {
        $this->categoryBlogRepository = $categoryBlogRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the category_blog.
     *
     * @param category_blogDataTable $categoryBlogDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(category_blogDataTable $categoryBlogDataTable)
    {
        return $categoryBlogDataTable->render('category_blogs.index');
    }

    /**
     * Show the form for creating a new category_blog.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('category_blogs.create');
    }

    /**
     * Store a newly created category_blog in storage.
     *
     * @param Createcategory_blogRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createcategory_blogRequest $request)
    {
        $input = $request->all();

        $categoryBlog = $this->categoryBlogRepository->create($input);

        Flash::success('Category Blog saved successfully.');

        return redirect(route('categoryBlogs.index'));
    }

    /**
     * Display the specified category_blog.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $categoryBlog = $this->categoryBlogRepository->find($id);

        if (empty($categoryBlog)) {
            Flash::error('Category Blog not found');

            return redirect(route('categoryBlogs.index'));
        }

        return view('category_blogs.show')->with('categoryBlog', $categoryBlog);
    }

    /**
     * Show the form for editing the specified category_blog.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $categoryBlog = $this->categoryBlogRepository->find($id);

        if (empty($categoryBlog)) {
            Flash::error('Category Blog not found');

            return redirect(route('categoryBlogs.index'));
        }

        return view('category_blogs.edit')->with('categoryBlog', $categoryBlog);
    }

    /**
     * Update the specified category_blog in storage.
     *
     * @param  int              $id
     * @param Updatecategory_blogRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatecategory_blogRequest $request)
    {
        $categoryBlog = $this->categoryBlogRepository->find($id);

        if (empty($categoryBlog)) {
            Flash::error('Category Blog not found');

            return redirect(route('categoryBlogs.index'));
        }

        $categoryBlog = $this->categoryBlogRepository->update($request->all(), $id);

        Flash::success('Category Blog updated successfully.');

        return redirect(route('categoryBlogs.index'));
    }

    /**
     * Remove the specified category_blog from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $categoryBlog = $this->categoryBlogRepository->find($id);

        if (empty($categoryBlog)) {
            Flash::error('Category Blog not found');

            return redirect(route('categoryBlogs.index'));
        }

        $this->categoryBlogRepository->delete($id);

        Flash::success('Category Blog deleted successfully.');

        return redirect(route('categoryBlogs.index'));
    }
}
