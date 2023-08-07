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
        // get bookings where agency slug is same with role name and agency service is same with $slug
        // agency has many agency service
        // agency service has many booking

        $bookings = Booking::whereHas('agencyService.agency', function ($query) use ($slug, $role) {
            $query->where('slug', $role[0]);
        })->whereHas('agencyService', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->get();

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
}
