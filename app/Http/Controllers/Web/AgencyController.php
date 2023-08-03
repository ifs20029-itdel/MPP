<?php

namespace App\Http\Controllers\Web;

use App\Models\Agency;
use Illuminate\Http\Request;
use App\Models\AgencyService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Services\Whatsapp\WhatsappService;

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
    public function store(Request $request, $slug)
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
        // create queue number based on total bookings today
        $queue_number = $service->bookings()->whereDate('created_at', date('Y-m-d'))->count() + 1;
        $booking = $service->bookings()->create([
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'date' => $request->date,
            'queue_number' => $queue_number,
        ]);
        $date = $request->date ? date('d-m-Y', strtotime($request->date)) : date('d-m-Y');
        // send whatsapp message
        $message = "Halo {$request->name},\n\n";
        $message .= "Terima kasih telah melakukan booking di {$service->agency->name}.\n";
        $message .= "Berikut adalah detail booking anda:\n\n";
        $message .= "Nama: {$request->name}\n";
        $message .= "Whatsapp: {$request->whatsapp}\n";
        $message .= "Tanggal: {$date}\n";
        $message .= "Nomor antrian: {$queue_number}\n\n";
        $message .= "Silahkan menunggu konfirmasi dari {$service->agency->name}.\n";
        $message .= "Terima kasih.";

        $whatsapp = new WhatsappService();
        $whatsapp->sendMessage($request->whatsapp, $message);

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);

        // try {

        // } catch (\Exception $e) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Data berhasil ditambahkan, namun terjadi kesalahan saat mengirim pesan whatsapp'
        //     ]);
        // }
    }
}
