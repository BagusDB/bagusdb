@extends('layout.layout')
@section('content')


<h3 class="card-title">DataDetail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/detail/create" class="btn btn-primary"><i class="fas fa-plus"> TAMBAH </a></i>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID DETAIL</th>
                    <th>ID TRANSAKSI</th>
                    <th>ID BARANG</th>
                    <th>TRANSAKSI JENIS</th>
                    <th>TRANSAKSI HARGA</th>
                    <th>TRANSAKSI JUMLAH</th>
                    <th>DETAIL STATUS</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                  </tr>
                  @foreach ( $detail as $a )
                  <tr>
                    <td>{{ $a->id_detail }}</td>
                    <td>{{ $a->id_transaksi }}</td>
                    <td>{{ $a->barang_nama }}</td>
                    <td>{{ $a->transaksi_jenis }}</td>
                    <td>{{ $a->transaksi_harga }}</td>
                    <td>{{ $a->transaksi_jumlah }}</td>
                    <td>{{ $a->transaksi_detail_status }}</td>
                    <td>
                        <a href="/detail/{{ $a->id }}/edit" class="btn btn-success"><i class="fas fa-edit"> EDIT</a></i>
                        <a href="/detail/{{ $a->id }}/delete" class="btn btn-danger"><i class="fas fa-trash"> HAPUS</a></i>

                    </td>

                </tbody>
                  </tr>
                  @endforeach
                  <tfoot>
                    <tr>
                        <th>ID DETAIL</th>
                        <th>ID TRANSAKSI</th>
                        <th>ID BARANG</th>
                        <th>JENIS</th>
                        <th>HARGA</th>
                        <th>JUMLAH</th>
                        <th>DETAIL STATUS</th>
                        <th>ACTION</th>
                    </tr>
                  </tfoot>
                </table>
                  @endsection
