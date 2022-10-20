@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">TambahBarang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/barang/store" method="POST">
                    @csrf
                    <div class="card-body">
                    <label for="id_admin">KODE BARANG</label><br>
                    <input type="text" name="barang_kode" placeholder="Masukkan Kode Barang" class="form-control" required><br>
                    <label for="id_admin">NAMA BARANG</label><br>
                    <input type="text" name="barang_nama" placeholder="Masukkan Nama Barang" class="form-control" required><br>
                    <label for="id_admin">ID JENIS</label><br>
                    <select name="id_jenis" class="form-control" required>
                        <option>Silahkan Pilih</option>
                        @foreach ($jenis as $row)
                        <option value="{{ $row->id_jenis }}">{{ $row->jenis_nama }}</option>
                        @endforeach
                    </select><br>
                    <label for="id_admin">ID SUPPLIER</label><br>
                    <select name="id_supplier" class="form-control" required>
                        <option>Silahkan Pilih</option>
                        @foreach($supplier as $sup)
                        <option value="{{ $sup->id_supplier }}">{{ $sup->supplier_nama }}</option>
                        @endforeach
                    </select><br>
                    <label for="id_admin">HARGA JUAL</label><br>
                    <input type="text" name="harga_jual" placeholder="Masukkan Harga Jual " class="form-control" required><br>
                    <label for="id_admin">HARGA STATUS</label><br>
                    <input type="text" name="harga_status" placeholder="Masukkan Harga Status " class="form-control" required><br>
                    <input type="submit" value="TAMBAH" class="btn btn-success">

                </form>
                <a href="/barang"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
