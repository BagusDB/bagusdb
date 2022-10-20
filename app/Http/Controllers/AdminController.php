<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        $admin = DB::table('tbl_admin')->get();
        // dd($admin);
        return view('admin.index', compact(['admin']));
    }
    public function create(){
        return view('admin.create');
    }
    public function store(Request $request){
        $admin = Admin::create([
            'id_admin' => $request->id_admin,
            'username' => $request->username,
            'password' => $request->password,
            'admin_level' => $request->admin_level,
            'admin_nama' => $request->admin_nama,
            'admin_status' => $request->admin_status
        ]);
        echo $admin->id_admin;
        return redirect('/admin');
    }
    public function edit($id){
        $admin = Admin::find($id);
        return view('admin.edit',compact('admin'));
    }
    public function update($id,Request $request){
        $admin = Admin::find($id)
        ->update($request->except('_token','metod'));
        return redirect('/admin');
    }
    public function destroy($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/admin');

    }
}
