@extends('backend.layouts.sadmin')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">
        </div>
        <div class="col-lg-12">
            <div class="shadow p-3 mb-4 bg-white rounded">
                <div class="pb-3">
                    <a href="/tambahpengguna" class="btn btn-primary">Tambah data</a>
                </div>
                <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>ALAMAT</th>
                            <th>NO TELP</th>
                            <th>KOMENTAR</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($dtPengguna as $item)
                      <tr>
                          <td>{{ $item->name}}</td>
                          <td>{{ $item->username}}</td>
                          <td>{{ $item->email}}</td>
                          <td>{{ $item->password}}</td>
                          <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="{{ url('editpengguna', $item->id) }}" type="button" class="btn btn-warning"  data-toggle="edit-bawah" data-placement="bottom" title="Edit data" ><i class="fas fa-edit"></i></a>
                              <a href="{{ url('hapuspengguna', $item->id) }}" type="button" class="btn btn-danger" data-toggle="edit-atas" data-placement="right" title="Hapus data"><i class="fas fa-trash-alt"></i></a>
                              </div>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
  </div>
</div>
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Tambah Guru -->
  <!-- /.content -->
</div>
@endsection