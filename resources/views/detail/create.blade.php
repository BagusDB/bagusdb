@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">TambahDetail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/detail/store" method="POST">
                    @csrf
                    <div class="card-body">
                    <label for="id_detail">ID DETAIL</label><br>
                    <input type="text" name="id_detail" placeholder="Masukkan ID Detail" class="form-control" ><br>
                    <label for="id_detail">ID TRANSAKSI</label><br>
                    <input type="text" name="id_transaksi" placeholder="Masukkan ID Transaksi" class="form-control" ><br>
                    <label for="id_detail">ID BARANG</label><br>
                    <input type="text" name="id_barang" placeholder="Masukkan ID Barang" class="form-control" ><br>
                    <label for="id_detail">TRANSAKSI JENIS</label><br>
                    <input type="text" name="transaksi_jenis" placeholder="Masukkan Transaksi Jenis" class="form-control" ><br>
                    <label for="id_detail">HARGA</label><br>
                    <input type="text" name="transaksi_harga" placeholder="Masukkan Harga" class="form-control" ><br>
                    <label for="id_detail">JUMLAH</label><br>
                    <input type="text" name="transaksi_jumlah" placeholder="Masukkan Jumlah" class="form-control" ><br>
                    <label for="id_detail">DETAIL STATUS</label><br>
                    <input type="text" name="transaksi_detail_status" placeholder="Masukkan Jumlah" class="form-control" ><br>
                    <input type="submit" value="TAMBAH" class="btn btn-success">

                </form>
                <a href="/detail"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
