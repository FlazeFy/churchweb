<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Generator;

use App\Models\KeuanganModel;
use App\Models\KamusModel;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sektor = KamusModel::select('kamus_slug', 'kamus_nama')
            ->where('kamus_type', 'sektor')
            ->orderBy('id', 'ASC')
            ->get();

        $masuk_pada = KamusModel::select('kamus_slug', 'kamus_nama')
            ->where('kamus_type', 'masuk_pada')
            ->orderBy('id', 'ASC')
            ->get();

        $kategori = KamusModel::select('kamus_slug', 'kamus_nama')
            ->where('kamus_type', 'kategori_keuangan')
            ->orderBy('id', 'ASC')
            ->get();

        $keuangan = KeuanganModel::select('id', 'tipe', 'kategori', 'sektor', 'konteks', 'nominal', 'tanggal_terima', 'masuk_pada', 'created_at', 'created_by', 'updated_at', 'updated_by')
            ->orderBy('created_at', 'ASC')
            ->get();

        //Set active nav
        session()->put('active_nav', 'data_gereja');
        session()->put('active_subnav', 'keuangan');

        return view('keuangan.index')
            ->with('keuangan', $keuangan)
            ->with('kategori', $kategori)
            ->with('masuk_pada', $masuk_pada)
            ->with('sektor', $sektor);
    }

    public function tambah(Request $request)
    {
        KeuanganModel::create([
            'id' => Generator::getUUID(),
            'tipe' => $request->tipe, 
            'kategori' => $request->kategori, 
            'sektor' => $request->sektor, 
            'konteks' => $request->konteks, 
            'nominal' => $request->nominal, 
            'tanggal_terima' => $request->tanggal_terima, 
            'masuk_pada' => $request->masuk_pada,
            'created_at' => date("Y-m-d H:i:s"), 
            'created_by' => Generator::getUserId(),
            'updated_at' => null,
            'updated_by' => null
        ]);

        return redirect()->back()->with('success_message', "Sukses menambah keuangan");
    }

    public function ubah(Request $request, $id)
    {
        KeuanganModel::where('id', $id)->update([
            'tipe' => $request->tipe, 
            'kategori' => $request->kategori, 
            'sektor' => $request->sektor, 
            'konteks' => $request->konteks, 
            'nominal' => $request->nominal, 
            'tanggal_terima' => $request->tanggal_terima, 
            'masuk_pada' => $request->masuk_pada,
            'updated_at' => date("Y-m-d H:i:s"), 
            'updated_by' => Generator::getUserId()
        ]);

        return redirect()->back()->with('success_message', "Sukses mengubah keuangan");
    }

    public function hapus($id)
    {
        KeuanganModel::destroy($id);

        return redirect()->back()->with('success_message', "Sukses menghapus keuangan");
    }
}
