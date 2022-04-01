<?php

namespace Src\controller;

use App\Http\Controllers\Controller;
use App\User;

class SpaController extends Controller
{
    /**
     * トップ画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        User::find(1);
        return view('index');
    }
}
