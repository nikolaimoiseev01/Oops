<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Good;
use App\Models\GoodCategory;
use App\Models\Post;
use App\Models\ShopOffline;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index');
    }

    public function post_page($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        return view('portal.post_page', [
            'post' => $post
        ]);
    }

    public function where2buy_page()
    {
        $shops = ShopOffline::orderBy('created_at')->get();
//        dd($shops);
        return view('portal.where2buy_page', [
            'shops' => $shops
        ]);
    }



    public function good_page($good_id)
    {
        $good = Good::where('id', $good_id)->first();
        return view('portal.good_page', [
            'good' => $good
        ]);
    }

}
