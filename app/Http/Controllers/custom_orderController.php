<?php

namespace App\Http\Controllers;

use App\DataTables\custom_orderDataTable;
use App\Http\Requests;
use App\Http\Requests\Createcustom_orderRequest;
use App\Http\Requests\Updatecustom_orderRequest;
use App\Repositories\custom_orderRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Input;
class custom_orderController extends AppBaseController
{
    /** @var  custom_orderRepository */
    private $customOrderRepository;

    public function __construct(custom_orderRepository $customOrderRepo)
    {
        $this->customOrderRepository = $customOrderRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the custom_order.
     *
     * @param custom_orderDataTable $customOrderDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(custom_orderDataTable $customOrderDataTable)
    {
        return $customOrderDataTable->render('custom_orders.index');
    }

    /**
     * Show the form for creating a new custom_order.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('custom_orders.create');
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
     * Store a newly created custom_order in storage.
     *
     * @param Createcustom_orderRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createcustom_orderRequest $request)
    {
        $input = $request->all();
        $destination = 'images/custom_order';
        
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        $customOrder = $this->customOrderRepository->create($input);

        Flash::success('Custom Order saved successfully.');

        return redirect(route('customOrders.index'));
    }

    /**
     * Display the specified custom_order.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $customOrder = $this->customOrderRepository->find($id);

        if (empty($customOrder)) {
            Flash::error('Custom Order not found');

            return redirect(route('customOrders.index'));
        }

        return view('custom_orders.show')->with('customOrder', $customOrder);
    }

    /**
     * Show the form for editing the specified custom_order.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $customOrder = $this->customOrderRepository->find($id);

        if (empty($customOrder)) {
            Flash::error('Custom Order not found');

            return redirect(route('customOrders.index'));
        }

        return view('custom_orders.edit')->with('customOrder', $customOrder);
    }

    /**
     * Update the specified custom_order in storage.
     *
     * @param  int              $id
     * @param Updatecustom_orderRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updatecustom_orderRequest $request)
    {
        $customOrder = $this->customOrderRepository->find($id);
        $input = $request->all();
        $destination = 'images/custom_order';
       
        if (!is_null(Input::file('image'))) {
            $image = $this->uploadFile('image', $destination);
            if (gettype($image) == 'string') {

                $input['image'] = $destination . '/' . $image;
            }
        }
        if (empty($customOrder)) {
            Flash::error('Custom Order not found');

            return redirect(route('customOrders.index'));
        }

        $customOrder = $this->customOrderRepository->update($request->all(), $id);

        Flash::success('Custom Order updated successfully.');

        return redirect(route('customOrders.index'));
    }

    /**
     * Remove the specified custom_order from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $customOrder = $this->customOrderRepository->find($id);

        if (empty($customOrder)) {
            Flash::error('Custom Order not found');

            return redirect(route('customOrders.index'));
        }

        $this->customOrderRepository->delete($id);

        Flash::success('Custom Order deleted successfully.');

        return redirect(route('customOrders.index'));
    }
}
