<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KamusModel;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamus = KamusModel::select('kamus_slug', 'kamus_nama')
            ->where('kamus_type','tipe_kegiatan')
            ->orderBy('kamus_nama', 'DESC')
            ->get();

        return view('kegiatan.index')
            ->with('kamus',$kamus);
    }

    public function filter_tipe_kegiatan(Request $request)
    {
        session()->put('selected_tipe_kegiatan', $request->filter_tipe);

        return redirect()->back()->with('success_mini_message', 'Tipe kegiatan disaring');
    }
}
