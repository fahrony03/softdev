@extends('frontend.layouts.layout')
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/cover.jpeg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/cover.jpeg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/cover.jpeg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
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
