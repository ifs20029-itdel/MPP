<?php

namespace App\Http\Controllers\Web;

use App\Models\News;
use App\Models\Agency;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\CriticSuggestion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function home()
    {
        return view('pages.web.home.index', ['agencies' => Agency::all(), 'news' => News::all()]);
    }

    public function news()
    {
        return view('pages.web.news.index', ['news' => News::all()]);
    }

    public function newsDetail($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('pages.web.news.detail', compact('news'));
    }

    public function criticSuggestion()
    {

        return view('pages.web.critic-suggestion.index', ['agencies' => Agency::all()]);
    }

    public function getAgencyServices($agency_id)
    {
        $agency = Agency::findOrFail($agency_id);
        $agency->load('agencyServices');
        $list = "<option value=''>Pilih Layanan</option>";
        foreach ($agency->agencyServices as $agencyService) {
            $list .= "<option value='$agencyService->id'>$agencyService->name</option>";
        }
        echo $list;
    }

    public function getBookings($agency_service_id)
    {
        $bookings = Booking::where('agency_service_id', $agency_service_id)
            ->where('status', '2')
            ->whereDate('date', date('Y-m-d'))
            ->orderBy('created_at', 'asc')
            ->get();

        $list = "<option value=''>Pilih Nomor Antrian</option>";
        foreach ($bookings as $booking) {
            $list .= "<option value='$booking->id'>$booking->queue_number</option>";
        }
        echo $list;
    }

    public function storeCriticSuggestion(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'booking_id' =>  ['required', 'string', 'max:255'],
            'message' =>  ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        CriticSuggestion::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Kritik dan saran berhasil dikirim',
        ]);
    }
}
