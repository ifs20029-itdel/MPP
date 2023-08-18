<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AgencyService;
use App\Services\Whatsapp\WhatsappService;

class BookingController extends Controller
{
    public function index($slug)
    {
        $role = auth()->user()->getRoleNames();

        $bookings = Booking::whereHas('agencyService', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })
            ->whereDate('date', date('Y-m-d'))
            ->get();
        $agencyServiceName = $bookings->isEmpty() ? null : $bookings[0]->agencyService->name;

        return view('pages.admin.booking.index', compact('bookings', 'slug', 'agencyServiceName'));
    }

    public function detail($id)
    {
        $booking = Booking::findOrFail($id);
        return view('pages.admin.booking.detail', compact('booking'));
    }

    public function process($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update([
            'status' => '1',
            'start_time' => date('H:i:s'),
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Booking berhasil diproses',
        ]);
    }

    public function finish($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update([
            'status' => '2',
            'end_time' => date('H:i:s'),
        ]);

        // send whatsapp message to next queue
        $nextBooking = Booking::where('agency_service_id', $booking->agency_service_id)
            ->where('status', '0')
            ->orderBy('created_at', 'asc')
            ->first();

        if ($nextBooking) {
            $nextBooking->load('agencyService.agency');
            $whatsapp = new WhatsappService();
            $whatsapp->sendMessage($nextBooking->agencyService->agency->phone, 'Halo, ' . $nextBooking->agencyService->agency->name . '. Booking anda sudah diproses. Silahkan datang ke ' . $nextBooking->agencyService->agency->name . ' untuk melakukan pelayanan.');
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Booking berhasil diselesaikan',
        ]);
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Booking berhasil dihapus',
        ]);
    }


    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('pages.admin.booking.detail-booking', compact('booking'));
    }
}
