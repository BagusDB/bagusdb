@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">TambahTransaksi</h3>
              </div>
              <!-- /.card-header -->


                <form action="/transaksi/store" method="POST">
                    @csrf
                    <div class="card-body">
                    <label for="id_transaksi">ID ADMIN</label><br>
                    <input type="text" name="id_admin" placeholder="Masukkan ID Admin" class="form-control"><br>
                    <label for="id_transaksi">TANGGAL</label><br>
                    <input type="date" name="transaksi_tanggal" placeholder="Masukkan Transaksi_Tanggal" class="form-control"><br>
                    <label for="id_transaksi">NO NOTA</label><br>
                    <input type="text" name="transaksi_nonota" placeholder="Masukkan NO Nota" class="form-control"><br>
                    <label for="id_transaksi">STATUS</label><br>
                    <input type="text" name="transaksi_status" placeholder="Masukkan status" class="form-control"><br>
                    <label for="id_transaksi">ID Barang</label><br>
                    <select name="id_barang" class="form-control">
                        <option>Silahkan Pilih</option>
                        @foreach($barang as $row)
                        <option value="{{ $row->id_barang }}">{{ $row->barang_nama }}</option>
                        @endforeach
                    </select><br>
                    <label for="id_transaksi">Jenis Transaksi</label><br>
                    <input type="text" name="transaksi_jenis" placeholder="Masukkan Jenis Transaksi" class="form-control"><br>
                    <label for="id_transaksi">Harga</label><br>
                    <input type="text" name="transaksi_harga" placeholder="Masukkan Harga" class="form-control"><br>
                    <label for="id_transaksi">Jumlah</label><br>
                    <input type="text" name="transaksi_jumlah" placeholder="Masukkan Jumlah" class="form-control"><br>
                    <label for="id_transaksi">Status Detail</label><br>
                    <input type="text" name="transaksi_detail_status" placeholder="Masukkan Status Detail" class="form-control"><br>
                    <input type="submit" value="TAMBAH" class="btn btn-success">

                </form>

                <a href="/transaksi"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
