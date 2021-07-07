@extends('backend.layouts.sadmin')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Transaksi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/sadmin">Home</a></li>
            <li class="breadcrumb-item active">Transaksi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
      <div class="card card-info card-outline">
      <div class="card-header">
          <h3>Tulis Artikel</h3>
      </div>
  
        <div class="card-body">
            <form action="{{ route('simpantransaksi')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                    <input name="alamat" type="text" id="alamat" class="form-control" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <textarea name="email" id="email" class="form-control" cols="30" placeholder="Content" rows="10"></textarea>
                    {{-- <input name="konten" type="text" id="konten" class="form-control" placeholder="Content"> --}}
                </div>
                <div class="form-group">
                    <input name="gambar" type="file" id="gambar">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
</div>
</div>
  <!-- /.content -->
</div>
@endsection