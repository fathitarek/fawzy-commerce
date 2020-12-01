<?php

namespace App\Http\Controllers;

use App\DataTables\sliderDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatesliderRequest;
use App\Http\Requests\UpdatesliderRequest;
use App\Repositories\sliderRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class sliderController extends AppBaseController
{
    /** @var  sliderRepository */
    private $sliderRepository;

    public function __construct(sliderRepository $sliderRepo)
    {
        $this->sliderRepository = $sliderRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the slider.
     *
     * @param sliderDataTable $sliderDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(sliderDataTable $sliderDataTable)
    {
        return $sliderDataTable->render('sliders.index');
    }

    /**
     * Show the form for creating a new slider.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created slider in storage.
     *
     * @param CreatesliderRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreatesliderRequest $request)
    {
        $input = $request->all();
        $destination = 'images/slider';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $slider = $this->sliderRepository->create($input);

        Flash::success('Slider saved successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified slider.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.show')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified slider.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.edit')->with('slider', $slider);
    }

    /**
     * Update the specified slider in storage.
     *
     * @param  int              $id
     * @param UpdatesliderRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdatesliderRequest $request)
    {
        $slider = $this->sliderRepository->find($id);
        $input = $request->all();
        $destination = 'images/slider';
        if (!is_null(Input::file('image'))) {

            $image = $this->uploadFile('image', $destination);
            // return $similar_sections['image_en'].$image_en ;
            if (gettype($image) == 'string') {
                $input['image'] = $destination . '/' . $image;
            }
        }

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        $slider = $this->sliderRepository->update($input, $id);

        Flash::success('Slider updated successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified slider from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        $this->sliderRepository->delete($id);

        Flash::success('Slider deleted successfully.');

        return redirect(route('sliders.index'));
    }
}
