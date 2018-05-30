<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Carbon\Carbon;


class BuyController extends Controller
{
    public function buy(Request $request)
    {
    	$customer = new Customer();

    	$customer->fill($request->all());

    	$customer->save();

    	$bill = new Bill();

    	$bill->customer_id = $customer->id;
    	$bill->date_order = Carbon::now();
    	$bill->total = $request->total;
        $bill->status = Bill::STATUS[1];
    	$bill->save();


        $items = [];
        $items = $request->items;
        // print_r($items);
        foreach($items as $item)
        {
            $item_cart = explode(",", $item);
            $billDetail = new BillDetail();
            $billDetail->bill_id = $bill->id;
            $billDetail->product_id = $item_cart[0];
            $billDetail->qty = $item_cart[1];
            $billDetail->save();

        }
    	return redirect()->route('home');
    }

}
