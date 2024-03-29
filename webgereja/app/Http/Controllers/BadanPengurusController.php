<?php

namespace App\Http\Controllers;

use App\Models\BphModel;
use App\Models\KamusModel;

use App\Helpers\Generator;

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

        $kamus = KamusModel::select('kamus_slug', 'kamus_type', 'kamus_nama')
            ->where('kamus_type', 'grup')
            ->orWhere('kamus_type', 'jabatan')
            ->get();

        //Set active nav
        session()->put('active_nav', 'tentang_gereja');
        session()->put('active_subnav', 'badan_pengurus');

        return view('badanpengurus.index')
            ->with('bph', $bph)
            ->with('kamus', $kamus);
    }

    public function tambah(Request $request)
    {
        BphModel::create([
            'id' => Generator::getUUID(),  
            'nama' => $request->nama, 
            'jabatan' => $request->jabatan, 
            'grup' => $request->grup, 
            'created_at' => date("Y-m-d H:i:s"), 
            'created_by' => Generator::getUserId(), 
            'updated_at' => null, 
            'updated_by' => null
        ]);

        return redirect()->back()->with('success_message', "Sukses menambah BPH");
    }

    public function hapus($id)
    {
        BphModel::destroy($id);

        return redirect()->back()->with('success_message', "Sukses menghapus BPH");        
    }

    public function ubah(Request $request, $id)
    {
        BphModel::where('id',$id)->update([
            'nama' => $request->nama, 
            'jabatan' => $request->jabatan, 
            'grup' => $request->grup, 
            'updated_at' => date("Y-m-d H:i:s"), 
            'updated_by' => Generator::getUserId()
        ]);

        return redirect()->back()->with('success_message', "Sukses mengubah BPH");        
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
