@extends('layout.layout')
@section('content')


<h3 class="card-title">DataSupplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/jenis/create" class="btn btn-primary"><i class="fas fa-plus"> TAMBAH </a></i>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID JENIS</th>
                        <th>JENIS_NAMA</th>
                        <th>JENIS_STATUS</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                      </tr>
                      @foreach ( $jenis as $a )
                      <tr>
                        <td>{{ $a->id_jenis }}</td>
                        <td>{{ $a->jenis_nama}}</td>
                        <td>{{ $a->jenis_status}}</td>
                        <td>
                            <a href="/jenis/{{ $a->id }}/edit" class="btn btn-success"><i class="fas fa-edit"> UBAH</a></i>

                            <a href="/jenis/{{ $a->id }}/delete" class="btn btn-danger"><i class="fas fa-trash"> HAPUS</a></i>

                        </td>

                    </tbody>
                      </tr>
                      @endforeach
                      <tfoot>
                        <tr>
                        <th>ID JENIS</th>
                        <th>JENIS_NAMA</th>
                        <th>JENIS_STATUS</th>
                        <th>ACTION</th>
                        </tr>
                      </tfoot>
                    </table>
                  @endsection
