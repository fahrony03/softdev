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
  <div class="content">
      <div class="card card-info card-outline">
      <div class="card-header">
          <h3>buat data</h3>
      </div>

        <div class="card-body">
            <form action="{{ route('simpanpengguna')}}" method="post">
                {{-- {{ csrf_field() }} --}}
                <div class="form-group">
                    <input name="namaproduk" type="text" id="namaproduk" class="form-control" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <label for="foto">Foto Guru</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="foto" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      <span class="badge badge-info">Ekstensi JPG | JPEG | PNG</span>
                    </div>
                  </div>
                <div class="form-group">
                    <input name="deskripsi" type="text" id="deskripsi" class="form-control" placeholder="Deskripsi Produk">
                </div>
                <div class="form-group">
                    <input name="berat" type="number" id="berat" class="form-control" placeholder="Berat Produk">
                </div>
                <div class="form-group">
                    <input name="stok" type="number" id="stok" class="form-control" placeholder="Stok Produk">
                </div>
                <div class="form-group">
                    <input name="harga" type="text" id="harga" class="form-control" placeholder="Harga Produk">
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
