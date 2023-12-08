<?php

namespace App\Http\Controllers;

use App\Models\JemaatModel;
use App\Models\KamusModel;

use App\Helpers\Generator;

use Illuminate\Http\Request;

class JemaatController extends Controller
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
            
        $jemaat = JemaatModel::select('id', 'nama', 'jenis_kelamin', 'alamat', 'sektor', 'no_telp', 'created_at', 'created_by', 'updated_at', 'updated_by')
            ->whereNull('deleted_at')
            ->orderBy('nama', 'DESC')
            ->get();

        return view('jemaat.index')
            ->with('jemaat', $jemaat)
            ->with('sektor', $sektor);
    }

    public function tambah(Request $request)
    {
        JemaatModel::create([
            'id' => Generator::getUUID(), 
            'nama' => $request->nama, 
            'jenis_kelamin' => $request->jenis_kelamin, 
            'alamat' => $request->alamat,
            'sektor' => $request->sektor, 
            'no_telp' => $request->no_telp, 
            'created_at' => date("Y-m-d H:i:s"), 
            'created_by' => Generator::getUserId(), 
            'updated_at' => null, 
            'updated_by' => null, 
            'deleted_at' => null,
            'deleted_by' => null
        ]);

        return redirect()->back();
    }

    public function ubah(Request $request, $id)
    {
        JemaatModel::where('id',$id)->update([
            'nama' => $request->nama, 
            'jenis_kelamin' => $request->jenis_kelamin, 
            'alamat' => $request->alamat,
            'sektor' => $request->sektor, 
            'no_telp' => $request->no_telp,
            'updated_at' => date("Y-m-d H:i:s"), 
            'updated_by' => Generator::getUserId()
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        JemaatModel::where('id',$id)->update([
            'deleted_at' => date("Y-m-d H:i:s"), 
            'deleted_by' => Generator::getUserId()
        ]);

        return redirect()->back();
    }
}
