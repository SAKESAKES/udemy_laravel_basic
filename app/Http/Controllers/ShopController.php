<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    //
    public function index()
    {
        // 1対多 親->子 area->shop
        $shops = Area::find(1)->shops;
        // 親 <- 子 area<-shop
        $area = Shop::find(2)->area;

        //多対多
        $routes = Shop::find(1)->routes()->get(); //1つめの店舗の紐づいている山手線と京浜東北線を作成

        dd($shops, $area, $routes);
    }
}
