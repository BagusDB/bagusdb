@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">EditDetail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/detail/{{ $detail->id }}/update" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                    <label for="id_detail">ID DETAIL</label><br>
                    <input type="text" name="id_detail" placeholder="Masukkan ID Detail" class="form-control" value="{{ $detail->id_detail }}"><br>
                    <label for="id_detail">ID TRANSAKSI</label><br>
                    <input type="text" name="id_transaksi" placeholder="Masukkan ID Transaksi" class="form-control" value="{{ $detail->id_transaksi }}"><br>
                    <label for="id_detail">ID BARANG</label><br>
                    <input type="text" name="id_barang" placeholder="Masukkan ID Barang" class="form-control" value="{{ $detail->id_barang }}"><br>
                    <label for="id_detail">TRANSAKSI JENIS</label><br>
                    <input type="text" name="transaksi_jenis" placeholder="Masukkan Transaksi Jenis" class="form-control" value="{{ $detail->transaksi_jenis }}"><br>
                    <label for="id_detail">HARGA</label><br>
                    <input type="text" name="transaksi_harga" placeholder="Masukkan Harga" class="form-control" value="{{ $detail->transaksi_harga }}"><br>
                    <label for="id_detail">JUMLAH</label><br>
                    <input type="text" name="transaksi_jumlah" placeholder="Masukkan Jumlah" class="form-control" value="{{ $detail->transaksi_jumlah }}"><br>
                    <label for="id_detail">DETAIL STATUS</label><br>
                    <input type="text" name="transaksi_detail_status" placeholder="Masukkan Jumlah" class="form-control" value="{{ $detail->transaksi_detail_status }}"><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/detail"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
$table->String('');
$table->String('');
$table->String('');
$table->String('');
$table->integer('');
$table->integer('');
$table->String('');
