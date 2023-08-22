<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\PenyakitDetail;
use App\Models\Gejala;
use App\Models\history;
use App\Models\rule;

class PenyakitController extends Controller
{
   function index(){
        $data['list_penyakit'] = Penyakit::where('flag_erase',1)->get();
        $data['list_gejala'] = Gejala::where('flag_erase',1)->get();
        $count_penyakit = Penyakit::count();
        $buat_kode = $count_penyakit + 1;
        $data['kode_penyakit'] = "P".$buat_kode;
       

        return view('admin.penyakit.index',$data);
    }

    function create(){
        return view('admin.penyakit.create');
    }

    function store(Request $request){

  
        $penyakit = new Penyakit;
        $penyakit->kode_penyakit = request('kode_penyakit');
        $penyakit->nama_penyakit = request('nama_penyakit');
        $penyakit->keterangan = request('keterangan');
        $penyakit->solusi = request('solusi');
        $simpan = $penyakit->save();

        $gejala = $request->kode_gejala;
        
        if ($simpan == 1) {
            foreach ($gejala as $data) {
                PenyakitDetail::create([
                    'kode_detail' => request('kode_detail'),
                    'kode_penyakit' => request('kode_penyakit'),
                    'kode_gejala' => $data
                ]);
            }
           
            
            return back()->with('success','Data penyakit berhasil dibuat');
        }
        return back()->with('success','Data penyakit gagal dibuat');

    }

    function destroy($penyakit){

        // Hapus semua table yang bersangkutan dengan penyakit
        $p = Penyakit::where('kode_penyakit', $penyakit)->delete();
        $h = history::where('id_penyakit', $penyakit)->delete();
        $pd = PenyakitDetail::where('kode_penyakit', $penyakit)->delete();

        return back()->with('success','Data penyakit berhasil dihapus');
    }
}
