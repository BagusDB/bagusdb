@extends('layout.layout')
@section('content')


<h3 class="card-title">DataBarang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/barang/create" class="btn btn-primary"><i class="fas fa-plus"> TAMBAH </a></i>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID BARANG</th>
                    <th>KODE BARANG</th>
                    <th>NAMA</th>
                    <th>ID JENIS</th>
                    <th>ID SUPPLIER</th>
                    <th>JUAL</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                  </tr>
                  @foreach ( $barang as $a )
                  <tr>
                    <td>{{ $a->id_barang }}</td>
                    <td>{{ $a->barang_kode}}</td>
                    <td>{{ $a->barang_nama }}</td>
                    <td>{{ $a->jenis_nama }}</td>
                    <td>{{ $a->supplier_nama }}</td>
                    <td>{{ $a->harga_jual }}</td>
                    <td>{{ $a->harga_status }}</td>
                    <td>
                        <a href="/barang/{{ $a->id }}/edit" class="btn btn-success"><i class="fas fa-edit"> UBAH</a></i>
                        <a href="/barang/{{ $a->id }}/delete" class="btn btn-danger"><i class="fas fa-trash"> HAPUS</a></i>

                    </td>

                </tbody>
                  </tr>
                  @endforeach
                  <tfoot>
                    <tr>
                        <th>ID BARANG</th>
                        <th>KODE BARANG</th>
                        <th>NAMA</th>
                        <th>ID JENIS</th>
                        <th>ID SUPPLIER</th>
                        <th>JUAL</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                  </tfoot>
                </table>
                  @endsection
