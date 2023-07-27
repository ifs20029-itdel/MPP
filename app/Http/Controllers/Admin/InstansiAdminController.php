<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstansiAdminController extends Controller
{
    public function instansi()
    {
        return view('pages.admin.instansi.create');
    }
    public function listinstansi()
    {
        return view('pages.admin.instansi.list');
    }
    public function layananinstansi()
    {
        return view('pages.admin.layanan-instansi.create');
    }
    public function listlayananinstansi()
    {
        return view('pages.admin.layanan-instansi.list');
    }
}
