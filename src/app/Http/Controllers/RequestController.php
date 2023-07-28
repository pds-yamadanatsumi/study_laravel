<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        $name = Request::get('name', "ゲスト");
        return view('request.index', compact('name'));
    }

    public function store(Request $request)
    {
        $inputs = Request::all();

        $file = Request::file('file');

        return redirect()->route('request.index')->with('message', 'アンケートが送信されました！');

    }
}