<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\Detail;
use App\Models\Barang;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('tbl_transaksi')->get();
        // dd($transaksi);
        return view('transaksi.index', compact(['transaksi']));
    }
    public function create(){
        $barang = DB::table('tbl_barang')->get();
        return view('transaksi.create',compact(['barang']));
    }
    public function store(Request $request){
        $store = Transaksi::create([
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->transaksi_nonota,
            'transaksi_status' => $request->transaksi_status,
        ]);
        echo $store->id_transaksi;
        $store = Detail::create([
            'id_transaksi' => $store->id_transaksi,
            'id_barang' => $request->id_barang,
            'transaksi_jenis' => $request->transaksi_jenis,
            'transaksi_harga' => $request->transaksi_harga,
            'transaksi_jumlah' => $request->transaksi_jumlah,
            'transaksi_detail_status' => $request->transaksi_detail_status,

        ]);
        echo $store->id_detail;
        return redirect('/transaksi');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',compact('transaksi'));
    }
    public function update($id,Request $request){
        $transaksi = Transaksi::find($id)
        ->update($request->except('_token','method'));
        return redirect('/transaksi');
    }
    public function destroy($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi');

    }
}
