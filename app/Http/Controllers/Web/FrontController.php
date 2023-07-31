<?php

namespace App\Http\Controllers\Web;

use App\Models\News;
use App\Models\Agency;
use Illuminate\Http\Request;
use App\Models\CriticSuggestion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function home()
    {
        return view('pages.web.main', ['agencies' => Agency::all()]);
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

    public function storeCriticSuggestion(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>  ['required', 'string', 'max:255'],
            'agency_id' =>  ['required', 'string', 'max:255'],
            'message' =>  ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        CriticSuggestion::create([
            'name' => $request->name,
            'agency_id' => $request->agency_id,
            'message' => $request->message,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Kritik dan saran berhasil dikirim',
        ]);
    }
}
