<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/css.css')}}">
    <title>Si PEKA</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="{{asset('assets/img/logo.png')}}" width="130" height="50" class="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href=" #">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="#belanja">Belanja</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="#informasi">Informasi</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="javascript:peringatan();">Dokumentasi</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="javascript:peringatan();">Contact</a>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>

<br><br>
    <!--content-->
    <section id="hero" class="d-flex align-items-center bg">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Aplikasi pertanian </h1>
                    <h2>dengan menggunakan aplikasi ini kita dapat mempermudah menperoleh informasi seputar pertanian
                        dan dapat dengan mudah memperoleh bahan pangan.</h2>
                    <div><button type="button" class="btn btn-success">Get App</button></div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
        <div class="judul-card bg-light" id="informasi">
            <h1 class="display-4">Informasi</h1>
            <hr>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="admin/menu/informasi/images/" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <a href="menu/auth/login.php" class="btn btn-outline-success">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="judul-card">
                <h1 class="display-4">Dokumentasi</h1>
                <hr>
            </div>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/sawi.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/sawi.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/sawi.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="konten">
                <h4><b>VISI</b></h4>
                <p class="text-xl-left text-justify">Menjadi aplikasi pertanian yang dapat menjual produk hasil
                    pertanian
                    SMK PP N 1 Tegalampel Bondowoso,
                    dan diharapkan dapat membantu perekonomian para petani lokal disekitar dalam memasarkan produk ke
                    jangkauan pasar yang sangat luas</p>
                <h4><b>MISI</b></h4>
                <p class="text-xl-left text-justify">Dalam rangka mewujudkan visi yang kami terapkan, semoga dapat
                    memasarkan produk ke jangkauan yang lebih luas,
                    mendorong perekonomian dan membangun kerjasama terhadap pertanian lokal </p>
            </div>
        </div>




        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>

</body>

</html>
