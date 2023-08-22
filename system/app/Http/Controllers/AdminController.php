<?php

namespace App\Http\Controllers;
use App\Models\Gejala;
use App\Models\Cek;
use App\Models\PenyakitDetail;
use App\Models\Penyakit;
use App\Models\History;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    function beranda(){
        $data['list_gejala'] = Gejala::where('flag_erase',1)->get();
        return view('admin.beranda',$data);



    }


    function cek(Request $request){

        $request->validate([
            'nama' => ['required'],
            'alamat' => ['required'],
            'jenis_kelamin' => ['required'],
            'tgl_lahir' => ['required'],
            'pekerjaan' => ['required'],
        ]);

        $tglRequest = Carbon::createFromFormat('Y-m-d', $request->tgl_lahir);
        $tglSekarang = Carbon::now();
     
        $selisih = $tglRequest->diff($tglSekarang);
        $selisihTahun = $selisih->y;
     
        if ($selisihTahun < 5) {
            return back()->with('danger','Maaf umur belum memenuhi persayaratan untuk melakukan diagnosa , Minimal umur yang boleh melakukan diagnosa adalah 5 Tahun atau diatas 5 Tahun');
        }else{
            $penyakit1 = PenyakitDetail::where('kode_penyakit','P1')->get('kode_gejala');
            $penyakit2 = PenyakitDetail::where('kode_penyakit','P2')->get('kode_gejala');
            $penyakit3 = PenyakitDetail::where('kode_penyakit','P3')->get('kode_gejala');
            $penyakit4 = PenyakitDetail::where('kode_penyakit','P4')->get('kode_gejala');
            $penyakit5 = PenyakitDetail::where('kode_penyakit','P5')->get('kode_gejala');
            $penyakit6 = PenyakitDetail::where('kode_penyakit','P6')->get('kode_gejala');


            foreach($penyakit1 as $data){
                $p1[] = $data->kode_gejala;
            }
            foreach($penyakit2 as $data){
                $p2[] = $data->kode_gejala;
            }
            foreach($penyakit3 as $data){
                $p3[] = $data->kode_gejala;
            }
            foreach($penyakit4 as $data){
                $p4[] = $data->kode_gejala;
            }
            foreach($penyakit5 as $data){
                $p5[] = $data->kode_gejala;
            }
            foreach($penyakit6 as $data){
                $p6[] = $data->kode_gejala;
            }

            $pemisah = '';
            $datagabung1 = implode($pemisah, $p1);
            $datagabung2 = implode($pemisah, $p2);
            $datagabung3 = implode($pemisah, $p3);
            // $datagabung4 = implode($pemisah, $p4);
            // $datagabung5 = implode($pemisah, $p5);
            // $datagabung6 = implode($pemisah, $p6);
            $requestgabung = implode($pemisah, $request->kode_gejala);

                // dd($requestgabung);
            if($datagabung1 == $requestgabung){

                $history = new History;
                $history->nama = request('nama');
                $history->alamat = request('alamat');
                $history->jenis_kelamin = request('jenis_kelamin');
                $history->tgl_lahir = request('tgl_lahir');
                $history->pekerjaan = request('pekerjaan');
                $history->id_penyakit = "P1";
                $history->save();
                $url = 'admin/history/'.$history->history_id.'/show';
                return redirect($url);

            }elseif($datagabung2 == $requestgabung){

            $history = new History;
            $history->nama = request('nama');
            $history->alamat = request('alamat');
            $history->jenis_kelamin = request('jenis_kelamin');
            $history->tgl_lahir = request('tgl_lahir');
            $history->pekerjaan = request('pekerjaan');
            $history->id_penyakit = "P2";
            $history->save();
            $url = 'admin/history/'.$history->history_id.'/show';
            return redirect($url);

        }elseif($datagabung3 == $requestgabung){

            $history = new History;
            $history->nama = request('nama');
            $history->alamat = request('alamat');
            $history->jenis_kelamin = request('jenis_kelamin');
            $history->tgl_lahir = request('tgl_lahir');
            $history->pekerjaan = request('pekerjaan');
            $history->id_penyakit = "P3";
            $history->save();
            $url = 'admin/history/'.$history->history_id.'/show';
            return redirect($url);
        }else{
            return view('admin.tidak-terdeteksi');
        }

    }


}



}
