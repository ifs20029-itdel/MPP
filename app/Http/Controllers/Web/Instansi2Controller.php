<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Instansi2Controller extends Controller
{
    public function index()
    {
        return view('pages.web.instansi2');
    }
}