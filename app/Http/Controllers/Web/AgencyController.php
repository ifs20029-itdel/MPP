<?php

namespace App\Http\Controllers\Web;

use App\Models\Agency;
use Illuminate\Http\Request;
use App\Models\AgencyService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agency::all();
        return view('pages.web.agency.index', compact('agencies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $agency = Agency::where('slug', $slug)->first();
        if (!$agency) {
            return redirect()->back()->with(['error' => 'Data tidak ditemukan']);
        }
        $agency->load('agencyServices');
        return view('pages.web.agency.detail', compact('agency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>  ['required', 'string', 'max:255'],
            'whatsapp' =>  ['required', 'string', 'max:255'],
            'date' =>  ['nullable', 'date'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $service = AgencyService::find($request->service_id);

        if (!$service) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan',
            ]);
        }

        $booking = $service->bookings()->create([
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'date' => $request->date,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan',
            'data' => $booking,
        ]);
    }
}
