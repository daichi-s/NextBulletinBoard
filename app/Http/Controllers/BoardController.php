<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index(Board $board)
    {
        $boardList = $board->getList();

        return view('board/index', ['boardList' => $boardList]);
    }
}
