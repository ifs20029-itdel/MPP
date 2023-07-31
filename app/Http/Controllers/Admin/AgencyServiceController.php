<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agency;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AgencyService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AgencyServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.agency-service.index', [
            'agencyServices' => AgencyService::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agencies = Agency::all();
        return view('pages.admin.agency-service.create', [
            'agencies' => $agencies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->except('_token'), [
            'agency_id' =>  ['required', 'string', 'max:255'],
            'name' =>  ['required', 'string', 'max:255'],
            'description' =>  ['required', 'string', 'max:255'],
            'status' =>  ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        AgencyService::create([
            'agency_id' => $request->agency_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan',
            'redirect' => route('backend.agency-service.index'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgencyService  $agencyService
     * @return \Illuminate\Http\Response
     */
    public function show(AgencyService $agencyService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgencyService  $agencyService
     * @return \Illuminate\Http\Response
     */
    public function edit(AgencyService $agencyService)
    {
        return view('pages.admin.agency-service.edit', [
            'agencyService' => $agencyService,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgencyService  $agencyService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgencyService $agencyService)
    {
        $validator = Validator::make($request->except('_token'), [
            'agency_id' =>  ['required', 'string', 'max:255'],
            'name' =>  ['required', 'string', 'max:255'],
            'description' =>  ['required', 'string', 'max:255'],
            'status' =>  ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $agencyService->update([
            'agency_id' => $request->agency_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil diubah',
            'redirect' => route('backend.agency-service.index'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgencyService  $agencyService
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgencyService $agencyService)
    {
        $agencyService->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
