<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Services\UserPurchaseService;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function __construct(UserPurchaseService $service)
    {
        $this->service = $service;
    }

    /**
     * 指定ユーザーの商品購入履歴
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $user_id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $user = $this->service->retrievePurchase($id);
        return view('purchase.index', compact('user'));
    }

    /**
     * 購入処理
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $result = Purchase::create([
            'name' => $request->name,
            'user_id' => 1,
        ]);

        return response()->json(['name'=> $result->name]);
    }
}
