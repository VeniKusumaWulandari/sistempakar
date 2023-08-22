<?php

namespace App\Http\Controllers;
use App\Models\Gejala;
use App\Models\PenyakitDetail;

use Illuminate\Http\Request;

class GejalaController extends Controller
{
    function index(){
        $data['list_gejala'] = Gejala::where('flag_erase',1)->get();
        $count_gejala = Gejala::count();
        $buat_kode = $count_gejala + 1;
        $data['kode_gejala'] = "G".$buat_kode;

        return view('admin.gejala.index',$data);
    }


    function store(){
        $gejala = new Gejala;
        $gejala->kode_gejala = request('kode_gejala');
        $gejala->nama_gejala = request('nama_gejala');
        $gejala->keterangan = request('keterangan');
        $gejala->save();
        return back()->with('success','Data Gejala berhasil dibuat');

    }

    function edit(Gejala $gejala){
        $gejala->nama_gejala = request('nama_gejala');
        $gejala->keterangan = request('keterangan');
        $gejala->update();
        return back()->with('success','Data Gejala berhasil diedit');

    }

    function destroy($gejala){
        $hapusGejala = Gejala::where('kode_gejala', $gejala)->delete();
        $hapusPenyakitdetail = PenyakitDetail::where('kode_gejala', $gejala)->delete();

        if($hapusGejala == 1 || $hapusPenyakitdetail == 1){
            return back()->with('success','Data Gejala berhasil dihapus');
        }else{
            return back()->with('danger','Data Gejala gagal dihapus');

        }
        
    }
}
