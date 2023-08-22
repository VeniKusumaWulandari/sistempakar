<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\PenyakitDetail;

class RuleController extends Controller
{
    function index(){
        $data['list_penyakit'] = Penyakit::where('flag_erase',1)->get();
        $data['list_gejala'] = Gejala::where('flag_erase',1)->get();
        $count_penyakit = Penyakit::count();
        $buat_kode = $count_penyakit + 1;
        $data['kode_penyakit'] = "P".$buat_kode;
        $data['kode_detail'] = "R".$buat_kode;
        return view('admin.rule.index',$data);
    }


    function create(){
        $data['list_penyakit'] = Penyakit::where('flag_erase',1)->get();
        $data['list_gejala'] = Gejala::where('flag_erase',1)->get();
        $count_penyakit = Penyakit::count();
        $buat_kode = $count_penyakit + 1;
        $data['kode_penyakit'] = "P".$buat_kode;
        $data['kode_detail'] = "R".$buat_kode;
        return view('admin.rule.create', $data);
    }

    function store(Request $request){
        
        $penyakit = new Penyakit;
        $penyakit->kode_penyakit = request('kode_penyakit');
        $penyakit->nama_penyakit = request('nama_penyakit');
        $penyakit->keterangan = request('keterangan');
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
           
            
            return redirect('admin/rule')->with('success','Data rule berhasil dibuat');
        }
        return back()->with('danger','Data aturan atau rule gagal dibuat !');
    }

    function edit($gejala){
        return $gejala;
    }

    function destroy(Penyakit $penyakit){
        $penyakit->delete();
        PenyakitDetail::where('kode_penyakit',$penyakit->kode_penyakit)->delete();
        return back()->with('danger','Penyakit telah dihapus');
    }
}
