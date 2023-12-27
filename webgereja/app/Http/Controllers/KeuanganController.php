<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KeuanganModel;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keuangan = KeuanganModel::select('id', 'tipe', 'kategori', 'sektor', 'konteks', 'nominal', 'tanggal_terima', 'masuk_pada', 'created_at', 'created_by', 'updated_at', 'updated_by')
            ->orderBy('created_at', 'ASC')
            ->get();

        return view('keuangan.index')
            ->with('keuangan', $keuangan);
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
