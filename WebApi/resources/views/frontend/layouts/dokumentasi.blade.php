@extends('frontend.layouts.layout')
@section('content')

<div class="container">
    <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1 id="home"><font color="green">UNDUH APLIKASI</font></h1>
                           <p>dengan menggunakan aplikasi ini kita dapat mempermudah menperoleh informasi seputar pertanian 
                        , membeli berbagai produk kami dimana saja dan kapan saja.</p>
                        <div><button type="button" class="btn btn-success">Get App</button></div>
                        </div>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/sayuran 1.png')}}" class="img-fluid" >
                </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
         </div>
    <div class="judul-card">
        <h1 class="display-4">Dokumentasi</h1>
        <hr>
    </div>

    @foreach ($dtDokumentasi as $item)
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="{{ asset('img/'. $item->gambar)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5><b>{{ $item->judul }}</b></h5>
                        <p>{{ $item->caption}}</p>
                        <a href="/detail_informasi" class="btn btn-outline-success">Baca</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    @endforeach
    @endsection
