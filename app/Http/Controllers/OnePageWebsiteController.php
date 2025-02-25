<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnePageWebsiteController extends Controller
{
    public function index()
    {
        // 返回你想要的視圖或其他邏輯
        return view('onepagewebsite.index');
    }
}