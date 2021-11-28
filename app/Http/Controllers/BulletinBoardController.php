<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class BulletinBoardController extends Controller
{
    function get(): view
    {
        return view('bulletin_board');
    }
}
