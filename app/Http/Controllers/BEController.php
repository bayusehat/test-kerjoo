<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cuti;
use App\PengajuanCuti;
use Validator;

class BEController extends Controller
{
    public function list_cuti($id = 0)
    {
        if(!$id){
            $list = PengajuanCuti::with('user')->get();
        }else{
            $list = PengajuanCuti::with('user')->fins($id);
        }

        return response([
            'status' => true,
            'data' => $list 
        ]);
    }
    public function create_cuti(Request $request)
    {
        $rules = [
            'tgl_mulai' => 'required',
            'lama_cuti' => 'required|numeric',
            'alasan' => 'required' 
        ];

        $isValid = Validator::make($request->all(), $rules);

        if($isValid->fails())
            return response([
                'status' => false,
                'errors' => $isValid->errors()
            ], 500);
        
        $cuti = new PengajuanCuti;
        $cuti->id_user = auth()->id_user;
        $cuti->tgl_mulai = $request->input('tgl_mulai');
        $cuti->lama_cuti = $request->input('lama_cuti');
        $cuti->alasan = $request->input('alasan');
        if($cuti->save())
            return response([
                'status' => true,
                'message' => 'Pengajuan Cuti telah tersimpan!'
            ], 200);
        
        return response([
            'status' => false,
            'message' => 'Terjadi masalah, pengajuan cuti tersimpan!'
        ], 400);
    }
}
