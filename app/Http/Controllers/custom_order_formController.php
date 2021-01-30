<?php

namespace App\Http\Controllers;

use App\DataTables\custom_order_formDataTable;
use App\Http\Requests;
use App\Http\Requests\Createcustom_order_formRequest;
use App\Http\Requests\Updatecustom_order_formRequest;
use App\Repositories\custom_order_formRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Http\Request;

class custom_order_formController extends AppBaseController
{
    /** @var  custom_order_formRepository */
    private $customOrderFormRepository;

    public function __construct(custom_order_formRepository $customOrderFormRepo)
    {
        $this->customOrderFormRepository = $customOrderFormRepo;
        $this->middleware('auth', ['except' => ['store']]);

    }

    /**
     * Display a listing of the custom_order_form.
     *
     * @param custom_order_formDataTable $customOrderFormDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(custom_order_formDataTable $customOrderFormDataTable)
    {
        return $customOrderFormDataTable->render('custom_order_forms.index');
    }

    /**
     * Show the form for creating a new custom_order_form.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('custom_order_forms.create');
    }

    /**
     * Store a newly created custom_order_form in storage.
     *
     * @param Createcustom_order_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $customOrderForm = $this->customOrderFormRepository->create($input);

        Flash::success('Custom Order Form saved successfully.');
        return redirect()->back()->with('success', 'successfully ');   
        // return redirect(route('customOrderForms.index'));
    }

    /**
     * Display the specified custom_order_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $customOrderForm = $this->customOrderFormRepository->find($id);

        if (empty($customOrderForm)) {
            Flash::error('Custom Order Form not found');

            return redirect(route('customOrderForms.index'));
        }

        return view('custom_order_forms.show')->with('customOrderForm', $customOrderForm);
    }

    /**
     * Show the form for editing the specified custom_order_form.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $customOrderForm = $this->customOrderFormRepository->find($id);

        if (empty($customOrderForm)) {
            Flash::error('Custom Order Form not found');

            return redirect(route('customOrderForms.index'));
        }

        return view('custom_order_forms.edit')->with('customOrderForm', $customOrderForm);
    }

    /**
     * Update the specified custom_order_form in storage.
     *
     * @param  int              $id
     * @param Updatecustom_order_formRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatecustom_order_formRequest $request)
    {
        $customOrderForm = $this->customOrderFormRepository->find($id);

        if (empty($customOrderForm)) {
            Flash::error('Custom Order Form not found');

            return redirect(route('customOrderForms.index'));
        }

        $customOrderForm = $this->customOrderFormRepository->update($request->all(), $id);

        Flash::success('Custom Order Form updated successfully.');

        return redirect(route('customOrderForms.index'));
    }

    /**
     * Remove the specified custom_order_form from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $customOrderForm = $this->customOrderFormRepository->find($id);

        if (empty($customOrderForm)) {
            Flash::error('Custom Order Form not found');

            return redirect(route('customOrderForms.index'));
        }

        $this->customOrderFormRepository->delete($id);

        Flash::success('Custom Order Form deleted successfully.');

        return redirect(route('customOrderForms.index'));
    }
}
