<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RenunganModel;
use App\Models\KamusModel;

use App\Helpers\Generator;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = date("Y-m-d");
        $kitab = null;
        $user_id = Generator::getUserId();

        if($user_id == null){
            $renungan = RenunganModel::select('judul','perikop','isi','for_date')
                ->where('for_date', $today)
                ->first();
        } else {
            $renungan = RenunganModel::select('id','judul','perikop','for_date')
                ->orderBy('created_at', 'DESC')
                ->get();

            $kitab = KamusModel::select('kamus_slug', 'kamus_nama')
                ->where('kamus_type', 'kitab')
                ->orderBy('id', 'ASC')
                ->get();
        }

        return view('renungan.index')
            ->with('renungan', $renungan)
            ->with('kitab', $kitab);
    }

    public function tambah(Request $request)
    {
        RenunganModel::create([
            'id' => Generator::getUUID(), 
            'judul' => $request->judul, 
            'perikop' => "$request->kitab : $request->ayat", 
            'isi' => $request->isi, 
            'for_date' => $request->for_date, 
            'created_at' => date("Y-m-d H:i:s"), 
            'created_by' => Generator::getUserId(), 
            'updated_at' => null, 
            'updated_by' => null
        ]);

        return redirect()->back()->with('success_message', "Sukses menambah renungan");;
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
