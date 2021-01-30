<?php

namespace App\Http\Controllers;

use App\DataTables\reportsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatereportsRequest;
use App\Http\Requests\UpdatereportsRequest;
use App\Repositories\reportsRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;

class reportsController extends AppBaseController
{
    /** @var  reportsRepository */
    private $reportsRepository;

    public function __construct(reportsRepository $reportsRepo)
    {
        $this->reportsRepository = $reportsRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the reports.
     *
     * @param reportsDataTable $reportsDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(reportsDataTable $reportsDataTable)
    {
        return $reportsDataTable->render('reports.index');
    }

    /**
     * Show the form for creating a new reports.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('reports.create');
    }

    function saveFile($image , $directory)
    {
         $filename = str_random(6).'_'.time() . "." . $image->getClientOriginalExtension();
        //$filename = $image->getClientOriginalName();
        $path = public_path() . $directory ;
        $image->move($directory , $filename);
        return $filename;
    }

    /**
     * Store a newly created reports in storage.
     *
     * @param CreatereportsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreatereportsRequest $request)
    {
       
        $input = $request->all();
        $destination = 'images/reports';
        $destination2 = 'files/reports';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }

        if (!is_null(Input::file('file'))) {
            $image = $this->uploadFile('file', $destination2);
            if (gettype($image) == 'string') {

                $input['file'] = $destination2 . '/' . $image;
            }
        }
        $reports = $this->reportsRepository->create($input);

        Flash::success('Reports saved successfully.');

        return redirect(route('reports.index'));
    }

    /**
     * Display the specified reports.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            Flash::error('Reports not found');

            return redirect(route('reports.index'));
        }

        return view('reports.show')->with('reports', $reports);
    }

    /**
     * Show the form for editing the specified reports.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            Flash::error('Reports not found');

            return redirect(route('reports.index'));
        }

        return view('reports.edit')->with('reports', $reports);
    }

    /**
     * Update the specified reports in storage.
     *
     * @param  int              $id
     * @param UpdatereportsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdatereportsRequest $request)
    {
        $reports = $this->reportsRepository->find($id);
        $input = $request->all();
        $destination = 'images/reports';
        $destination2 = 'files/reports';
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }

        if (!is_null(Input::file('file'))) {
            $image = $this->uploadFile('file', $destination2);
            if (gettype($image) == 'string') {

                $input['file'] = $destination2 . '/' . $image;
            }
        }
        
        if (empty($reports)) {
            Flash::error('Reports not found');

            return redirect(route('reports.index'));
        }

        $reports = $this->reportsRepository->update($input, $id);

        Flash::success('Reports updated successfully.');

        return redirect(route('reports.index'));
    }

    /**
     * Remove the specified reports from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            Flash::error('Reports not found');

            return redirect(route('reports.index'));
        }

        $this->reportsRepository->delete($id);

        Flash::success('Reports deleted successfully.');

        return redirect(route('reports.index'));
    }
}
