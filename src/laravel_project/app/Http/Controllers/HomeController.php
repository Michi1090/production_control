<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = [
            ['title' => '入出庫明細 / 登録', 'url' => 'transaction.search'],
            ['title' => '検収処理', 'url' => 'home'],
            ['title' => '在庫照会', 'url' => 'home'],
            ['title' => '部品発注', 'url' => 'home'],
            ['title' => '製品マスタ照会', 'url' => 'product.search'],
            ['title' => '部品マスタ照会', 'url' => 'material.search'],
            ['title' => 'ユーザー情報照会・変更', 'url' => 'home'],
            ['title' => '操作マニュアル', 'url' => 'home'],
        ];

        return view('home', ['menus' => $menus]);
    }
}
