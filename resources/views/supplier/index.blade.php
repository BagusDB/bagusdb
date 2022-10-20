@extends('layout.layout')
@section('content')


<h3 class="card-title">DataSupplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/supplier/create" class="btn btn-primary">TAMBAH </a>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID SUPPLIER</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>PHONE</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                      </tr>
                      @foreach ( $supplier as $a )
                      <tr>
                        <td>{{ $a->id_supplier }}</td>
                        <td>{{ $a->supplier_nama }}</td>
                        <td>{{ $a->supplier_alamat }}</td>
                        <td>{{ $a->supplier_phone }}</td>
                        <td>{{ $a->supplier_status }}</td>
                        <td>
                            <a href="/supplier/{{ $a->id }}/edit" class="btn btn-success"><i class="fas fa-edit"> EDIT</a></i>
                            <a href="/supplier/{{ $a->id }}/delete" class="btn btn-danger"><i class="fas fa-trash"> HAPUS</a></i>

                        </td>

                    </tbody>
                      </tr>
                      @endforeach
                      <tfoot>
                        <tr>
                            <th>ID SUPPLIER</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>PHONE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                    </tr>
                  </tfoot>
                </table>
                  @endsection
