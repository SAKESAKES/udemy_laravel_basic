<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB; //ハザードのDBの機能使用

class TestController extends Controller
{
    public function index()
    {
        dd('test'); //ダミーデータ

        // Eloquent(エロクアント)　DBから情報を取得する方法
        $values=Test::all();//test全件取得

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get(); //getでCllection全て取得

        // クエリビルダ DBから情報を取得する方法
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id','text')
        ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder); // dd(変数)で変数の中身を見る

        return view('tests.test', compact('values')); //view側にvaluesの文字列を渡す
    }
}
