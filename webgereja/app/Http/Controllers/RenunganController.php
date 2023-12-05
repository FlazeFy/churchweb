<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RenunganModel;

use App\Helpers\Generator;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = date("Y-m-d");

        $user_id = Generator::getUserId();
        $role = "visitor";

        if($user_id == null){
            $renungan = RenunganModel::select('judul','perikop','isi','for_date')
                ->where('for_date', $today)
                ->first();
        } else {
            $role = "admin";
            $renungan = RenunganModel::select('id','judul','perikop','for_date')
                ->orderBy('created_at', 'DESC')
                ->get();
        }

        return view('renungan.index')
            ->with('renungan', $renungan)
            ->with('role', $role);
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
