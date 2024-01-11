<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Generator;

use App\Models\PengurusModel;
use App\Models\TataIbadahModel;
use Illuminate\Support\Facades\DB;

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


        $pengurus = PengurusModel::selectRaw("
            *,
            CASE 
                WHEN jabatan = 'Pendeta Resort / Pimpinan Jemaat' THEN 1 
                WHEN jabatan = 'Sekretaris Jemaat' THEN 2
                WHEN jabatan = 'Bendahara Jemaat' THEN 3
            ELSE 4
            END AS ord_jabatan 
        ")->orderByRaw('ord_jabatan ASC')->get();

        $tataibadah = TataIbadahModel::select('id','nama','tanggal','file_url','created_at', 'created_by', 'updated_at', 'updated_by')
            ->orderBy('tanggal', 'DESC')
            ->get();

        //Set active nav
        session()->put('active_nav', 'beranda');
        session()->forget('active_subnav');

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

        return redirect()->back()->with('success_message', "Sukses menambah tata ibadah");;
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

        return redirect()->back()->with('success_message', "Sukses mengubah tata ibadah");;
    }

    public function hapustataibadah($id){
        TataIbadahModel::destroy($id);

        return redirect()->back()->with('success_message', "Sukses menghapus tata ibadah");;
    }
}
