<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PengurusModel;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!session()->get('selected_tipe_kegiatan')){
            session()->put('selected_tipe_kegiatan', "All");
        }

        $pengurus = PengurusModel::select('nama','jabatan','img_url')
            ->orderBy('nama', 'DESC')
            ->get();

        return view('landing.index')
            ->with('pengurus', $pengurus);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
