<?php

namespace App\Http\Controllers;

use App\DataTables\about_usDataTable;
use App\Http\Requests;
use App\Http\Requests\Createabout_usRequest;
use App\Http\Requests\Updateabout_usRequest;
use App\Repositories\about_usRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class about_usController extends AppBaseController
{
    /** @var  about_usRepository */
    private $aboutUsRepository;

    public function __construct(about_usRepository $aboutUsRepo)
    {
        $this->aboutUsRepository = $aboutUsRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the about_us.
     *
     * @param about_usDataTable $aboutUsDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(about_usDataTable $aboutUsDataTable)
    {
        return $aboutUsDataTable->render('about_uses.index');
    }

    /**
     * Show the form for creating a new about_us.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('about_uses.create');
    }

    /**
     * Store a newly created about_us in storage.
     *
     * @param Createabout_usRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createabout_usRequest $request)
    {
        $input = $request->all();
        $destination = 'images/about_us';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $aboutUs = $this->aboutUsRepository->create($input);

        Flash::success('About Us saved successfully.');

        return redirect(route('aboutUses.index'));
    }

    /**
     * Display the specified about_us.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $aboutUs = $this->aboutUsRepository->find($id);

        if (empty($aboutUs)) {
            Flash::error('About Us not found');

            return redirect(route('aboutUses.index'));
        }

        return view('about_uses.show')->with('aboutUs', $aboutUs);
    }

    /**
     * Show the form for editing the specified about_us.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $aboutUs = $this->aboutUsRepository->find($id);

        if (empty($aboutUs)) {
            Flash::error('About Us not found');

            return redirect(route('aboutUses.index'));
        }

        return view('about_uses.edit')->with('aboutUs', $aboutUs);
    }

    /**
     * Update the specified about_us in storage.
     *
     * @param  int              $id
     * @param Updateabout_usRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updateabout_usRequest $request)
    {
        $aboutUs = $this->aboutUsRepository->find($id);
        $input = $request->all();
        $destination = 'images/slider';
        if (!is_null(Input::file('image'))) {

            $image = $this->uploadFile('image', $destination);
            // return $similar_sections['image_en'].$image_en ;
            if (gettype($image) == 'string') {
                $input['image'] = $destination . '/' . $image;
            }
        }
        if (empty($aboutUs)) {
            Flash::error('About Us not found');

            return redirect(route('aboutUses.index'));
        }

        $aboutUs = $this->aboutUsRepository->update($input, $id);

        Flash::success('About Us updated successfully.');

        return redirect(route('aboutUses.index'));
    }

    /**
     * Remove the specified about_us from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $aboutUs = $this->aboutUsRepository->find($id);

        if (empty($aboutUs)) {
            Flash::error('About Us not found');

            return redirect(route('aboutUses.index'));
        }

        $this->aboutUsRepository->delete($id);

        Flash::success('About Us deleted successfully.');

        return redirect(route('aboutUses.index'));
    }
}
