<?php

namespace App\Http\Controllers;

use App\DataTables\order_detailsDataTable;
use App\Http\Requests;
use App\Http\Requests\Createorder_detailsRequest;
use App\Http\Requests\Updateorder_detailsRequest;
use App\Repositories\order_detailsRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class order_detailsController extends AppBaseController
{
    /** @var  order_detailsRepository */
    private $orderDetailsRepository;

    public function __construct(order_detailsRepository $orderDetailsRepo)
    {
        $this->orderDetailsRepository = $orderDetailsRepo;
    }

    /**
     * Display a listing of the order_details.
     *
     * @param order_detailsDataTable $orderDetailsDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(order_detailsDataTable $orderDetailsDataTable)
    {
        return $orderDetailsDataTable->render('order_details.index');
    }

    /**
     * Show the form for creating a new order_details.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('order_details.create');
    }

    /**
     * Store a newly created order_details in storage.
     *
     * @param Createorder_detailsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createorder_detailsRequest $request)
    {
        $input = $request->all();

        $orderDetails = $this->orderDetailsRepository->create($input);

        Flash::success('Order Details saved successfully.');

        return redirect(route('orderDetails.index'));
    }

    /**
     * Display the specified order_details.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $orderDetails = $this->orderDetailsRepository->find($id);

        if (empty($orderDetails)) {
            Flash::error('Order Details not found');

            return redirect(route('orderDetails.index'));
        }

        return view('order_details.show')->with('orderDetails', $orderDetails);
    }

    /**
     * Show the form for editing the specified order_details.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $orderDetails = $this->orderDetailsRepository->find($id);

        if (empty($orderDetails)) {
            Flash::error('Order Details not found');

            return redirect(route('orderDetails.index'));
        }

        return view('order_details.edit')->with('orderDetails', $orderDetails);
    }

    /**
     * Update the specified order_details in storage.
     *
     * @param  int              $id
     * @param Updateorder_detailsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updateorder_detailsRequest $request)
    {
        $orderDetails = $this->orderDetailsRepository->find($id);

        if (empty($orderDetails)) {
            Flash::error('Order Details not found');

            return redirect(route('orderDetails.index'));
        }

        $orderDetails = $this->orderDetailsRepository->update($request->all(), $id);

        Flash::success('Order Details updated successfully.');

        return redirect(route('orderDetails.index'));
    }

    /**
     * Remove the specified order_details from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $orderDetails = $this->orderDetailsRepository->find($id);

        if (empty($orderDetails)) {
            Flash::error('Order Details not found');

            return redirect(route('orderDetails.index'));
        }

        $this->orderDetailsRepository->delete($id);

        Flash::success('Order Details deleted successfully.');

        return redirect(route('orderDetails.index'));
    }
}
