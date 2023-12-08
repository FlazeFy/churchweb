<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RenunganModel;
use App\Models\KamusModel;

class DetailRenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $renungan = RenunganModel::select('id','judul','perikop','isi','for_date')
            ->first();

        $kitab = KamusModel::select('kamus_slug', 'kamus_nama')
            ->where('kamus_type', 'kitab')
            ->orderBy('id', 'ASC')
            ->get();

        return view('detailrenungan.index')
            ->with('renungan', $renungan)
            ->with('kitab', $kitab);
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
