<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;

class DetailController extends Controller
{
    public function index($id){
        $detail = DB::table('tbl_transaksi_detail')
        ->join('tbl_barang','tbl_barang.id_barang','=','tbl_transaksi_detail.id_barang')
        ->where('id_transaksi',$id)
        ->get();
        // dd($detail);
        return view('detail.index', compact(['detail']));
    }
    // fungsi jika di fungsikan
    // public function create(){
    //     return view('detail.create');
    // }
    // public function store(Request $request){
    //     $detail = Detail::create([
    //         'id_detail' => $request->id_detail,
    //         'id_barang' => $request->id_barang,
    //         'transaksi_jenis' => $request->transaksi_jenis,
    //         'transaksi_harga' => $request->transaksi_harga,
    //         'transaksi_jumlah' => $request->transaksi_jumlah,
    //         'transaksi_detail_status' => $request->transaksi_detail_status
    //     ]);
    //     echo $detail->id_detail;
    //     return redirect('/detail');
    // }
    // public function edit($id){
    //     $detail = Detail::find($id);
    //     return view('detail.edit',compact('detail'));
    // }
    // public function update($id,Request $request){
    //     $detail = Detail::find($id)
    //     ->update($request->except('_token','metod'));
    //     return redirect('/detail');
    // }
    // public function destroy($id){
    //     $detail = Detail::find($id);
    //     $detail->delete();
    //     return redirect('/detail');

    // }
}
