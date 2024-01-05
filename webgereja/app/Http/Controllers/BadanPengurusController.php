<?php

namespace App\Http\Controllers;

use App\Models\BphModel;
use Illuminate\Http\Request;

class BadanPengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bph = BphModel::select('id', 'nama', 'jabatan', 'grup', 'created_at', 'created_by', 'updated_at', 'updated_by')
        ->orderBy('grup', 'ASC')
        ->orderBy('jabatan', 'ASC')
        ->get();

        return view('badanpengurus.index')
        ->with('bph', $bph);
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
