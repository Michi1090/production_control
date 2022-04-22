<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Transaction;
use App\Inventory;

class TransactionController extends Controller
{
    // 検索画面
    public function search()
    {
        $products = Product::all();

        return view('transaction.search', ['products' => $products]);
    }

    // 一覧画面
    public function index(Request $request)
    {
        $productId = (int)$request->input('product_id');
        $products = Product::all();
        $transactions = Transaction::with('product')
                                    ->where('product_id', $productId)
                                    ->orderByRaw('date ASC, quantity DESC')
                                    ->get();
        $inventory = Inventory::findOrFail($productId);

        $params = [
            'productId' => $productId,
            'products' => $products,
            'transactions' => $transactions,
            'inventory' => $inventory,
        ];

        return view('transaction.index', $params);
    }
}
