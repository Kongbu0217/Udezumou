<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        $lists = Task::all();
        return view('lists.index');
    }
}
