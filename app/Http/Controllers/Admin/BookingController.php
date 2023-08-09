<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return view('pages.admin.booking.index', compact('bookings'));
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
        ]);
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
}
