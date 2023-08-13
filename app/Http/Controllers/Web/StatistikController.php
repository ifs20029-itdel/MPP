<?php

namespace App\Http\Controllers\Web;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatistikController extends Controller
{
    public function index()
    {

        


        return view('pages.web.statistik');
    }
}
