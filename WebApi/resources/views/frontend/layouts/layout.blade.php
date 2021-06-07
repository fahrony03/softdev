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
            <a class="navbar-brand" href="/">
                <img src="{{asset('assets/img/logo.png')}}" width="130" height="50" class="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="/informasi">Informasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="/dokumentasi">Dokumentasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="/contact">Contact</a>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
<br><br>
    @yield('content')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>

        <div class="footer">
            <div class="container">
                <footer class="page-footer font-small blue pt-4">
                    <div class="container-fluid text-center text-md-left">
                        <div class="row">
                            <div class="col-md-6 mt-md-0 mt-3">
                                <!-- Content -->
                                <h5 class="text-uppercase">Si PEKA</h5>
                                <p>Website pemasaran hasil pertanian SMKPP Negeri 1 Tegalampel.</p>
                            </div>
                            <hr class="clearfix w-100 d-md-none pb-3">
                            <div class="col-md-3 mb-md-0 mb-3">
                                <!-- Links -->
                                <h5 class="text-uppercase">Info</h5>
                                <ul class="list-unstyled">
                                <li>
                                    <a href="https://www.alodokter.com/berbagai-manfaat-sayuran-hijau-untuk-kesehatan#:~:text=Mengonsumsi%20sayuran%20hijau%2C%20seperti%20bayam,dalam%20tubuh%2C%20termasuk%20radang%20sendi."
                                        target="_blank">1. Menanam Tumbuhan Dirumah</a>
                                    </li>
                                    <li>
                                        <a href="https://www.alodokter.com/berbagai-manfaat-sayuran-hijau-untuk-kesehatan"
                                        target="_blank">2. Khasiat Sayuran Hijau</a>
                                    </li>
                                    <li>
                                    <a href="www.alodokter.com/manfaat-buah-untuk-kesehatan-yang-perlu-anda-ketahui"
                                        target="_blank">3. Manfaat Mengonsumsi Buah</a>
                                        
                                    </li>
                                    <li>
                                    <a href="www.sehatq.com/artikel/menelisik-menu-diet-gm"
                                        target="_blank">4. Diet yang Sehat</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-3">
                                <h5 class="text-uppercase">Contact</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="navbar-brand text-dark" href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" target="_blank">
                                            <img src="../img/whatsapp.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                            Contact Via WhatsApp
                                        </a>
                                    </li>
                                    <li>
                                        <a class="navbar-brand text-dark" href="https://www.instagram.com/mchfahrony/" target="_blank" >
                                            <img src="../img/instagram.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                            Contact Via Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a class="navbar-brand text-dark" href="https://twitter.com/mchfahrony" target="_blank">
                                            <img src="../img/twitter.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                            Contact Via Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a class="navbar-brand text-dark" href="mailto:sipekabondowoso@gmail.com?subject=kepada%20developer%20Si%20PEKA%20" target="_blank" >
                                            <img src="../img/gmail.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                            Contact Via Gmail
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <hr>
            <div class="container">
                <div class="bawah text-center py-3">© 2021 Copyright
                </div>
            </div>
            </footer>
        </div>



</body>

</html>
