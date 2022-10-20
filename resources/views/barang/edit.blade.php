@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">EditBarang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/barang/{{ $barang->id }}/update" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                    <label for="id_barang">ID BARANG</label><br>
                    <input type="text" name="id_barang" placeholder="Masukkan ID Barang" class="form-control" value="{{ $barang->id_barang }}"><br>
                    <label for="id_barang">BARANG KODE</label><br>
                    <input type="text" name="barang_kode" placeholder="Masukkan kode Barang" class="form-control" value="{{ $barang->barang_kode }}"><br>
                    <label for="id_barang">BARANG NAMA</label><br>
                    <input type="text" name="barang nama" placeholder="Masukkan Barang Nama" class="form-control" value="{{ $barang->barang_nama }}"><br>
                    <label for="id_barang">ID JENIS</label><br>
                    <input type="text" name="id_jenis" placeholder="Masukkan ID Jenis" class="form-control" value="{{ $barang->id_jenis }}"><br>
                    <label for="id_barang">ID SUPPLIER</label><br>
                    <input type="text" name="id_supplier" placeholder="Masukkan ID Supplier" class="form-control" value="{{ $barang->id_supplier }}"><br>
                    <label for="id_barang">JUAL</label><br>
                    <input type="text" name="harga_jual" placeholder="Masukkan Jual" class="form-control" value="{{ $barang->harga_jual}}"><br>
                    <label for="id_barang">STATUS</label><br>
                    <input type="text" name="harga_status" placeholder="Masukkan Status" class="form-control" value="{{ $barang->harga_status }}"><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/barang"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
