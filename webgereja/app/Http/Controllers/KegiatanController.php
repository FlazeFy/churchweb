<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KamusModel;
use App\Models\KegiatanModel;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all kamus
        $kamus = KamusModel::select('kamus_slug', 'kamus_nama')
            ->where('kamus_type','tipe_kegiatan')
            ->orderBy('kamus_nama', 'DESC')
            ->get();

        // Get all kegiatan by tipe
        $kegiatan = KegiatanModel::select('id', 'tipe_jadwal', 'tgl_jadwal', 'waktu_mulai', 'waktu_selesai', 'tempat', 'penanggung_jawab', 'keterangan', 'hasil')
            ->orderBy('tgl_jadwal', 'DESC');

            // Filtering
            $slct_tipe_kegiatan = session()->get('selected_tipe_kegiatan');
            if($slct_tipe_kegiatan != "All" && $slct_tipe_kegiatan !== null){
                $kegiatan = $kegiatan->where('tipe_jadwal', $slct_tipe_kegiatan);
            }
            $kegiatan = $kegiatan->get();

        return view('kegiatan.index')
            ->with('kamus', $kamus)
            ->with('kegiatan', $kegiatan);
    }

    public function filter_tipe_kegiatan(Request $request)
    {
        session()->put('selected_tipe_kegiatan', $request->filter_tipe);

        return redirect()->back()->with('success_mini_message', 'Tipe kegiatan disaring');
    }
}
