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
                        <a class="nav-link js-scroll-trigger" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="/informasi">Informasi</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="/dokumentasi">Dokumentasi</a>
                    </li>
                    <li class="nav-item ">
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

</body>

</html>
