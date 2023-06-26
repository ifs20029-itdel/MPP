<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function index()
    {
        return view('pages.web.kritik');
    }
}