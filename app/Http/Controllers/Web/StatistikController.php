<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        return view('pages.web.statistik');
    }
}