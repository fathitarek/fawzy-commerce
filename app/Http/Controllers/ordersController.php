<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DataTables\ordersDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateordersRequest;
use App\Http\Requests\UpdateordersRequest;
use App\Repositories\ordersRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Facades\Auth;
use App\Models\order_details;
use App\Models\carts;
use App\Models\shop_items;

class ordersController extends AppBaseController
{
    /** @var  ordersRepository */
    private $ordersRepository;

    public function __construct(ordersRepository $ordersRepo)
    {
        $this->ordersRepository = $ordersRepo;
       $this->middleware('auth', ['except' => ['store']]);
    }

    /**
     * Display a listing of the orders.
     *
     * @param ordersDataTable $ordersDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(ordersDataTable $ordersDataTable)
    {
        return $ordersDataTable->render('orders.index');
    }

    /**
     * Show the form for creating a new orders.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created orders in storage.
     *
     * @param CreateordersRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreateordersRequest $request)
    {
        // dd("f");
        // return $request;
        $input = $request->all();

        $orders = $this->ordersRepository->create($input);
        $carts=  carts::where('is_order',0)->where('customer_id',Auth::guard('customer')->user()->id)->get();
        foreach ($carts as  $cart) {
            $shop_items=shop_items::find($cart->product_id);
            if ($shop_items->sale_price) {
                $order_details= order_details::insert(['price'=>$shop_items->sale_price,'quantity'=>$cart->quantity,'product_id'=>$cart->product_id,'customer_id'=>Auth::guard('customer')->user()->id,'order_id'=>$orders->id]);
            }else{
                $order_details= order_details::insert(['price'=>$shop_items->main_price,'quantity'=>$cart->quantity,'product_id'=>$cart->product_id,'customer_id'=>Auth::guard('customer')->user()->id,'order_id'=>$orders->id]);
            }
    }
        $update_cart=carts::where('is_order',0)->where('customer_id',Auth::guard('customer')->user()->id)->update(['is_order'=>1]);

        Flash::success('Orders saved successfully.');
        return redirect()->back()->with('success', 'successfully ');   
        // return redirect(route('orders.index'));
    }

    /**
     * Display the specified orders.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        return view('orders.show')->with('orders', $orders);
    }

    /**
     * Show the form for editing the specified orders.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        return view('orders.edit')->with('orders', $orders);
    }

    /**
     * Update the specified orders in storage.
     *
     * @param  int              $id
     * @param UpdateordersRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdateordersRequest $request)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        $orders = $this->ordersRepository->update($request->all(), $id);

        Flash::success('Orders updated successfully.');

        return redirect(route('orders.index'));
    }

    /**
     * Remove the specified orders from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        $this->ordersRepository->delete($id);

        Flash::success('Orders deleted successfully.');

        return redirect(route('orders.index'));
    }
}
