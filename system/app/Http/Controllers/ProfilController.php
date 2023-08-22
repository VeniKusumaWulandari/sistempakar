<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfilController extends Controller
{
    function index(){
        return view('admin.profil.index');
    }

    function update(Request $request){
        if($request->old == $request->new){
            DB::table('user')->where('user_id',1)->update([

                'password' => bcrypt($request->new)
            ]);

            return redirect('logout')->with('danger','Password telah diganti, silahkan masuk kembali');
        }else{
            return back()->with('danger','Password tidak sama, silahkan cek kembali');
        }
    }
}
