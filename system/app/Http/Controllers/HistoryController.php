<?php

namespace App\Http\Controllers;
use App\Models\Gejala;
use App\Models\History;
use App\Models\PenyakitDetail;
use App\Models\Penyakit;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    function index(){
        $data['list_history'] = History::all();
        return view('admin.history.index',$data);
    }

    function show(History $history){
        $data['detail'] = $history;
        $data['hasil'] = Penyakit::where('kode_penyakit',$history->id_penyakit)->first();
        $data['gejala'] = PenyakitDetail::where('kode_penyakit', $history->id_penyakit)->with('gejala')->get();
   
        return view('admin.history.show',$data);

    }

    function cetak(History $history){
        $data['detail'] = $history;
        $data['hasil'] = Penyakit::where('kode_penyakit',$history->id_penyakit)->first();
        $data['gejala'] = PenyakitDetail::where('kode_penyakit', $history->id_penyakit)->with('gejala')->get();
   
        return view('admin.history.cetak',$data);

    }

    function delete(History $history){
        $hapus =  $history->delete();
        if ($hapus == 1) {
            return back()->with('danger', 'Data berhasil dihapus !');
        }
        return back()->with('danger', 'Data gagal dihapus !');

    }
}
