<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Board;
// use Carbon\Carbon;

class BoardController extends Controller
{
    /**
     * 掲示板一覧
     *
     * @param Board $board
     * @return void
     */
    public function index(Board $board)
    {
        $boardList = $board->getList();

        return view('board/index', ['boardList' => $boardList]);
    }

    /**
     * 掲示板作成
     *
     * @return void
     */
    public function create()
    {
        return view('board/create');
    }

    /**
     * 掲示板登録
     *
     * @return void
     */
    public function store(Board $board, Request $request)
    {
        $board->create([
            'user_id' => Auth::id(),
            'title'   => $request->title,
            'body'    => $request->body,
            'status'  => 1,
        ]);

        return redirect(route('board.index'));
    }
}
