<?php

namespace App\Http\Controllers;

use App\DataTables\shop_itemsDataTable;
use App\Http\Requests;
use App\Http\Requests\Createshop_itemsRequest;
use App\Http\Requests\Updateshop_itemsRequest;
use App\Repositories\shop_itemsRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use App\Models\categories;
use App\Models\sub_categories;
class shop_itemsController extends AppBaseController
{
    /** @var  shop_itemsRepository */
    private $shopItemsRepository;

    public function __construct(shop_itemsRepository $shopItemsRepo)
    {
        $this->shopItemsRepository = $shopItemsRepo;
    }

    /**
     * Display a listing of the shop_items.
     *
     * @param shop_itemsDataTable $shopItemsDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(shop_itemsDataTable $shopItemsDataTable)
    {
        return $shopItemsDataTable->render('shop_items.index');
    }

    /**
     * Show the form for creating a new shop_items.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        $categories = categories::latest()->pluck('name_en', 'id');
        $sub_categories=sub_categories::latest()->pluck('name_en', 'id');
        return view('shop_items.create')->with('categories',$categories)->with('sub_categories',$sub_categories);
    }

    /**
     * Store a newly created shop_items in storage.
     *
     * @param Createshop_itemsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(Createshop_itemsRequest $request)
    {
        $input = $request->all();

        $shopItems = $this->shopItemsRepository->create($input);

        Flash::success('Shop Items saved successfully.');

        return redirect(route('shopItems.index'));
    }

    /**
     * Display the specified shop_items.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $shopItems = $this->shopItemsRepository->find($id);

        if (empty($shopItems)) {
            Flash::error('Shop Items not found');

            return redirect(route('shopItems.index'));
        }

        return view('shop_items.show')->with('shopItems', $shopItems);
    }

    /**
     * Show the form for editing the specified shop_items.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $shopItems = $this->shopItemsRepository->find($id);
        $sub_categories=sub_categories::latest()->pluck('name_en', 'id');
        $categories = categories::latest()->pluck('name_en', 'id');
        if (empty($shopItems)) {
            Flash::error('Shop Items not found');

            return redirect(route('shopItems.index'));
        }

        return view('shop_items.edit')->with('shopItems', $shopItems)->with('categories',$categories)->with('sub_categories',$sub_categories);
    }

    /**
     * Update the specified shop_items in storage.
     *
     * @param  int              $id
     * @param Updateshop_itemsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, Updateshop_itemsRequest $request)
    {
        $shopItems = $this->shopItemsRepository->find($id);

        if (empty($shopItems)) {
            Flash::error('Shop Items not found');

            return redirect(route('shopItems.index'));
        }

        $shopItems = $this->shopItemsRepository->update($request->all(), $id);

        Flash::success('Shop Items updated successfully.');

        return redirect(route('shopItems.index'));
    }

    /**
     * Remove the specified shop_items from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $shopItems = $this->shopItemsRepository->find($id);

        if (empty($shopItems)) {
            Flash::error('Shop Items not found');

            return redirect(route('shopItems.index'));
        }

        $this->shopItemsRepository->delete($id);

        Flash::success('Shop Items deleted successfully.');

        return redirect(route('shopItems.index'));
    }
}
