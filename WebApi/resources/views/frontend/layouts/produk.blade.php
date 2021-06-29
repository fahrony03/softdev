@extends('frontend.layouts.layout')
@section('content')
    
<div class="container">
    <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1 id="home"><font color="green">PRODUK</font></h1>
                           <p>Selamat Datang di Halaman Pruduk. Dimana nantinya pada halaman ini berisikan
                           tentang produk-produk yang dijual oleh kami sesuai hasil panen yang kami lakukan 
                           saat itu juga. </p>
                        </div>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/sayuran 2.png')}}" class="img-fluid" >
                </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
         </div>

    <br><br><br><br>
    <div class="judul-card bg-light">
        <h1 class="display-4">Daftar Produk Pertanian</h1>
        <hr>
    

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="{{asset('assets/img/sayur 4.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wortel Organik segar 1 kilogram</h5>
                        <span class="badge badge-success">discount 50%</span>
                        <p class="card-text text-justify">
                            <b>Rp 10.000</b>
                        </p>

                        <a href="detailbelanja_satu.php" class="btn btn-outline-success">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @stop