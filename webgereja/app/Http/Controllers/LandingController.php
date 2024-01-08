<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Generator;

use App\Models\PengurusModel;
use App\Models\TataIbadahModel;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!session()->get('selected_tipe_kegiatan')){
            session()->put('selected_tipe_kegiatan', "All");
        }

        $pengurus = PengurusModel::select('nama','jabatan','img_url')
            ->orderBy('nama', 'DESC')
            ->get();

        $tataibadah = TataIbadahModel::select('id','nama','tanggal','file_url','created_at', 'created_by', 'updated_at', 'updated_by')
            ->orderBy('tanggal', 'DESC')
            ->get();

        return view('landing.index')
            ->with('pengurus', $pengurus)
            ->with('tataibadah', $tataibadah);
    }

    public function tambahtataibadah(Request $request)
    {
        TataIbadahModel::create([
            'id' => Generator::getUUID(), 
            'nama' => $request->nama, 
            'tanggal' => $request->tanggal." ".$request->jam, 
            'file_url' => $request->file_url, 
            'created_at' => date("Y-m-d H:i"), 
            'created_by' => Generator::getUserId(), 
            'updated_at' => null, 
            'updated_by' => null
        ]);

        return redirect()->back();
    }

    public function ubahtataibadah(Request $request, $id)
    {
        TataIbadahModel::where('id', $id)->update([
            'nama' => $request->nama, 
            'tanggal' => $request->tanggal." ".$request->jam, 
            'file_url' => $request->file_url, 
            'updated_at' => date("Y-m-d H:i"), 
            'updated_by' => Generator::getUserId()
        ]);

        return redirect()->back();
    }

    public function hapustataibadah($id){
        TataIbadahModel::destroy($id);

        return redirect()->back();
    }
}
