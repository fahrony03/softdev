@extends('frontend.layouts.layout')
@section('content')

<div class="card">
    <div class="card-body">
    <h1>Form Pembayaran</h1>
    <form action="{{ route('bayar')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="gambar">Upload Bukti Transaksi</label>
      <input name="gambar" type="file" id="gambar"><br><br>
      <label for="title">Nama :</label><br>
      <input name="nama" required type="text" id="nama" class="form-control" placeholder="Nama"><br><br>
      <label for="title">Alamat :</label><br>
      <input name="alamat" required type="text" id="alamat" class="form-control" placeholder="Alamat"><br><br>
      <label for="title">Email :</label><br>
      <input name="email" required type="email" id="email" class="form-control" placeholder="Email"><br><br>
      <label for="title">Produk :</label><br>
      <input name="produk" required type="text" id="produk" class="form-control" placeholder="Produk"><br><br>
      <label for="title">Jumlah :</label><br>
      <input name="jumlah" required type="number" id="jumlah" class="form-control" placeholder="Jumlah"><br><br>
      <input type="submit" class="btn btn-success" value="Upload">
      <a href="berhasil.php" class="btn btn-danger">Kembali</a>
    </form>
    </div>
  </div>
  </div>

@endsection