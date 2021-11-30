<?php

namespace Src\controller;

use App\Http\Controllers\Controller;

class SpaController extends Controller
{
    /**
     * トップ画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }
}
