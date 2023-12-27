<?php

namespace App\Http\Controllers;

use App\Models\JemaatModel;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statsStatus = JemaatModel::selectRaw('status as context, COUNT(1) as total')
            ->groupBy('status')
            ->get();

        $statsSektor = JemaatModel::selectRaw('sektor as context, COUNT(1) as total')
            ->groupBy('sektor')
            ->get();

        return view('statistik.index')
            ->with('statsStatus', $statsStatus)
            ->with('statsSektor', $statsSektor);
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
