<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agency;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.agency.index', [
            'agencies' => Agency::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.agency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>  ['required', 'string', 'max:255'],
            'address' =>  ['required', 'string', 'max:255'],
            'phone' =>  ['required', 'string', 'max:255'],
            'email' =>  ['required', 'string', 'max:255'],
            'website' =>  ['required', 'string', 'max:255'],
            'logo' =>  ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:2048'],
            'description' =>  ['required', 'string', 'max:255'],
            'status' =>  ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $file  = $request->file('logo');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/agencies/', $fileName);

        Agency::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $fileName,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan',
            'redirect' => route('backend.agency.index'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function edit(Agency $agency)
    {
        return view('pages.admin.agency.edit', [
            'agency' => $agency,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agency $agency)
    {
        $validator = Validator::make($request->all(), [
            'name' =>  ['required', 'string', 'max:255'],
            'address' =>  ['required', 'string', 'max:255'],
            'phone' =>  ['required', 'string', 'max:255'],
            'email' =>  ['required', 'string', 'max:255'],
            'website' =>  ['required', 'string', 'max:255'],
            'logo' =>  ['nullable', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:2048'],
            'description' =>  ['required', 'string', 'max:255'],
            'status' =>  ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        if ($request->file('logo')) {
            $oldFile = 'uploads/agencies/' . $agency->logo;
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
            $file  = $request->file('logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/agencies/', $fileName);
        } else {
            $fileName = $agency->logo;
        }

        $agency->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $fileName,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil diubah',
            'redirect' => route('backend.agency.index'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agency $agency)
    {
        $oldFile = 'uploads/agencies/' . $agency->logo;
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
        $agency->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil dihapus',
        ]);
    }
}
