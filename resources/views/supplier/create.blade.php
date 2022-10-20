@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">TambahSupplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/supplier/store" method="POST">
                    @csrf
                    <div class="card-body">
                    <label for="id_supplier">SUPPLIER NAMA</label><br>
                    <input type="text" name="supplier_nama" placeholder="Masukkan Supplier Nama" class="form-control"><br>
                    <label for="id_supplier">SUPPLIER ALAMAT</label><br>
                    <input type="text" name="supplier_alamat" placeholder="Masukkan Supplier Alamat" class="form-control"><br>
                    <label for="id_supplier">SUPPLIER PHONE</label><br>
                    <input type="text" name="supplier_phone" placeholder="Masukkan Supplier Phone" class="form-control"><br>
                    <label for="id_supplier">SUPPLIER STATUS</label><br>
                    <input type="text" name="supplier_status" placeholder="Masukkan Supplier Status" class="form-control"><br>
                    <input type="submit" value="TAMBAH" class="btn btn-success">

                </form>
                <a href="/supplier"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
