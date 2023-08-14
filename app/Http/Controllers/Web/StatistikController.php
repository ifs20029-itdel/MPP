<?php

namespace App\Http\Controllers\Web;

use Carbon\Carbon;
use App\Models\Agency;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StatistikController extends Controller
{
    public function index()
    {
        $lastWeekLabels = [];
        $endDate = Carbon::today();
        $countsByDate = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = $endDate->copy()->subDays($i);
            $date->setLocale('id'); // Set lokal ke bahasa Indonesia
            $formattedDate = $date->format('Y-m-d'); // Format tanggal dalam bentuk YYYY-MM-DD
            
            $lastWeekLabels[] = $date->isoFormat('dddd, D MMMM YYYY');
            
            // Menghitung jumlah Booking yang memiliki created_at pada tanggal tertentu
            $count = Booking::whereDate('created_at', $formattedDate)->count();
            $countsByDate[] = $count;
        }
        $countsByDate = array_values($countsByDate);


        $lastMonthLabels = [];
        $endDate = Carbon::today();
        $countsByMonth = [];

        for ($i = 0; $i < 3; $i++) {  // Mengubah iterasi menjadi penambahan bulan
            $date = $endDate->copy()->subMonths($i);  // Mengurangi bulan
            $date->setLocale('id'); // Set lokal ke bahasa Indonesia
            $formattedMonth = $date->format('Y-m'); // Format bulan dalam bentuk YYYY-MM
            
            $lastMonthLabels[] = $date->isoFormat('MMMM YYYY');
            
            // Menghitung jumlah Booking yang memiliki created_at pada bulan tertentu
            $count = Booking::whereYear('created_at', $date->year)
                            ->whereMonth('created_at', $date->month)
                            ->count();
            $countsByMonth[] = $count;
        }
        $countsByMonth = array_reverse($countsByMonth);  // Membalik urutan array
        $lastMonthLabels = array_reverse($lastMonthLabels);  // Membalik urutan array

        $today = Carbon::today();
        $agencyVisitors = DB::table('agencies')
            ->select('agencies.name as agency_name', DB::raw('COUNT(bookings.id) as total_visitors'))
            ->join('agency_services', 'agencies.id', '=', 'agency_services.agency_id')
            ->join('bookings', 'agency_services.id', '=', 'bookings.agency_service_id')
            ->whereDate('bookings.created_at', $today)
            ->groupBy('agencies.id')
            ->get();

        // dd($agencyVisitors);


        // dd($lastWeekLabels, $countsByDate, $countsByMonth, $lastMonthLabels);

        $today = Carbon::today();
        $agencyVisitorsThisMonth = DB::table('agencies')
            ->select('agencies.name as agency_name', DB::raw('COUNT(bookings.id) as total_visitors'))
            ->join('agency_services', 'agencies.id', '=', 'agency_services.agency_id')
            ->join('bookings', 'agency_services.id', '=', 'bookings.agency_service_id')
            ->whereMonth('bookings.created_at', $today->month) // Menggunakan whereMonth
            ->whereYear('bookings.created_at', $today->year) // Menambahkan whereYear untuk memastikan bulan ini pada tahun ini
            ->groupBy('agencies.id')
            ->get();


        // dd($todayBookings, $lastWeekLabels);
        $countAgency = Agency::get();
        
        $agencyNames = []; // Array untuk menyimpan nama-nama agensi
        
        foreach ($countAgency as $agency){
            $agencyNames[] = $agency->name;
        }

        return view('pages.web.statistik', compact('countsByDate', 'lastWeekLabels', 'countsByMonth', 'lastMonthLabels', 'agencyVisitorsThisMonth', 'agencyVisitors'));
    }

}