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


        // dd($lastWeekLabels, $countsByDate);
        

        // dd($weeklyBookings);



        // dd($todayBookings, $lastWeekLabels);
        $countAgency = Agency::get();
        
        $agencyNames = []; // Array untuk menyimpan nama-nama agensi
        
        foreach ($countAgency as $agency){
            $agencyNames[] = $agency->name;
        }

        return view('pages.web.statistik', compact('countsByDate', 'lastWeekLabels', 'agencyNames'));
    }

}