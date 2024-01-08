<?php

namespace App\Http\Controllers;

use App\Models\PengurusModel;
use App\Models\KamusModel;
use App\Models\BphModel;

use App\Helpers\Converter;

use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengurus = PengurusModel::select('id', 'nama', 'jabatan')
            ->orderBy('nama', 'ASC')
            ->get();

        $bph = BphModel::select('id', 'nama', 'grup')
            ->where('jabatan','pembimbing')
            ->orderBy('grup', 'ASC')
            ->get();

        $kamus = KamusModel::select('kamus_slug', 'kamus_type', 'kamus_nama')
            ->where('kamus_type', 'grup')
            ->orWhere('kamus_type', 'jabatan')
            ->get();

        return view('struktur.index')
            ->with('struktur_organisasi', $pengurus)
            ->with('bph', $bph)
            ->with('kamus', $kamus);

    }

    public function tambahgrupjabatan(Request $request, $type)
    {
        $nama = $request->kamus_nama;
        $check = KamusModel::select('kamus_nama')
            ->where('kamus_nama', $nama)
            ->where('kamus_type', $type)
            ->limit(1)
            ->get();

        if(count($check) == 0){
            KamusModel::create([
                'id' => null,
                'kamus_slug' => Converter::getSlugKamus($nama), 
                'kamus_type' => $type, 
                'kamus_nama' => $nama
            ]); 

            return redirect()->back()->with('success_mini_message', "Sukses menambahkan $type");
        } else {
            return redirect()->back()->with('failed_message', "Gagal menambahkan $type, gunakan nama yang unik");
        }
    }
}
