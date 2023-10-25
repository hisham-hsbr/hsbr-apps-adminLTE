<?php

namespace App\Http\Controllers;

use App\Models\PriceList;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:Price List Read', ['only' => ['index']]);
        $this->middleware('permission:Price List Create', ['only' => ['create','store']]);
        $this->middleware('permission:Price List Edit', ['only' => ['Edit','Update']]);
        $this->middleware('permission:Price List Delete', ['only' => ['destroy']]);

    }

    public function index()
    {
        $priceLists = PriceList::all();
        return view('back_end.price_lists.index',compact('priceLists'))->with('i');
    }

    public function getPriceLists()
    {
        // dd('dd');
        return Datatables::of(PriceList::query())

        ->setRowId(function ($priceList) {
            return $priceList->id;
            })

        ->editColumn('status', function (PriceList $priceList) {

            $active='<span style="background-color: #04AA6D;color: white;padding: 3px;width:100px;">Active</span>';
            $inActive='<span style="background-color: #ff9800;color: white;padding: 3px;width:100px;">In Active</span>';

            $activeId = ($priceList->status);

                if($activeId==1){
                    $activeId = $active;
                }
                else {
                    $activeId = $inActive;
                }
                return $activeId;
        })
        ->addColumn('created_at', function (PriceList $priceList) {
            return $priceList->created_at->format('d-M-Y h:m');
        })
        ->addColumn('updated_at', function (PriceList $priceList) {

            return $priceList->updated_at->format('d-M-Y h:m');
        })
        ->editColumn('created_by', function (PriceList $priceList) {

            return ucwords($priceList->CreatedBy->name);
        })
        ->editColumn('updated_by', function (PriceList $priceList) {
        return ucwords($priceList->UpdatedBy->name);
        })
        ->addColumn('editLink', function (PriceList $priceList) {

            $editLink ='<a href="'. route('priceLists.edit', $priceList->id) .'" class="ml-2"><i class="fa-solid fa-edit"></i></a>';
               return $editLink;
        })
        ->addColumn('deleteLink', function (PriceList $priceList) {
           $CSRFToken = "csrf_field()";
            $deleteLink ='
                                           <button class="btn btn-link delete-PriceList" data-PriceList_id="'.$priceList->id.'" type="submit"><i
                                                   class="fa-solid fa-trash-can text-danger"></i>
                                           </button>';
               return $deleteLink;
        })

       ->rawColumns(['status','editLink','deleteLink'])
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back_end.price_lists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'code' => 'required|unique:price_lists',
            'name' => 'required',
            'group' => 'required',
        ]);

        $priceList = new PriceList();

        $priceList->code = strtoupper($request->code);
        $priceList->name = strtoupper($request->name);
        $priceList->group = strtoupper($request->group);
        $priceList->packing = strtoupper($request->packing);
        $priceList->uom = strtoupper($request->uom);
        $priceList->box_price = $request->box_price;
        $priceList->half_box_price = $request->half_box_price;
        $priceList->wholesale_price = $request->wholesale_price;
        $priceList->cash_price = $request->cash_price;
        $priceList->credit_price = $request->credit_price;
        $priceList->description = strtoupper($request->description);

        if ($request->status==0)
            {
                $priceList->status==0;
            }

        $priceList->status = $request->status;

        $priceList->created_by = Auth::user()->id;
        $priceList->updated_by = Auth::user()->id;

        $priceList->save();

        return redirect()->route('priceLists.index')
                        ->with('message_store', 'Price List Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(PriceList $priceList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $priceList = PriceList::find($id);
        return view('back_end.price_lists.edit',compact('priceList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'code' => "required|unique:price_lists,code,$id",
            'name' => 'required',
            'group' => 'required',
        ]);

        $priceList = PriceList::find($id);

        $priceList->code = strtoupper($request->code);
        $priceList->name = strtoupper($request->name);
        $priceList->group = strtoupper($request->group);
        $priceList->packing = strtoupper($request->packing);
        $priceList->uom = strtoupper($request->uom);
        $priceList->box_price = $request->box_price;
        $priceList->half_box_price = $request->half_box_price;
        $priceList->wholesale_price = $request->wholesale_price;
        $priceList->cash_price = $request->cash_price;
        $priceList->credit_price = $request->credit_price;
        $priceList->description = strtoupper($request->description);

        if ($request->status==0)
            {
                $priceList->status==0;
            }

        $priceList->status = $request->status;

        $priceList->updated_by = Auth::user()->id;

        $priceList->save();

        return redirect()->route('priceLists.index')
                        ->with('message_store', 'Price List Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PriceList $priceList)
    {
        //
    }
}
