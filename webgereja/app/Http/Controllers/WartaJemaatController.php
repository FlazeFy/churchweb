<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WartaModel;

class WartaJemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warta = WartaModel::select('id','judul','url_warta')
            ->orderBy('created_at', 'DESC')
            ->get();

        //Set active nav
        session()->put('active_nav', 'data_gereja');
        session()->put('active_subnav', 'warta');

        return view('warta.index')
            ->with('warta',$warta);
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
