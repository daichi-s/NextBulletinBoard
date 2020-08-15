<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            // ログインしている場合、掲示板画面に遷移
            // return redirect($this->routeParseUrl('board.index'));
            return redirect(route('board.index'));
        }
        // return redirect($this->routeParseUrl('login'));
        return redirect(route('login'));
    }
}
