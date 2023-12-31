<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CriticSuggestion;
use Illuminate\Http\Request;

class CriticSuggestionController extends Controller
{
    public function index()
    {
        return view('pages.admin.critic-suggestion.main', ['critics' => CriticSuggestion::with('booking.agencyService.agency')->latestFirst()->get()]);
    }
}
