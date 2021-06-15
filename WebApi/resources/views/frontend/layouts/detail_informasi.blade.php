@extends('frontend.layouts.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <script type='text/javascript'>
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                            'September', 'Oktober', 'November', 'Desember'
                        ];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    </script>
                    <hr>

                    <!--ubah dari bagian ini sesuai isi konten-->
                    @foreach ($dtDokumentasi as $item)
                    <h1><b>Artikel</b></h1>
                    <br>
                    <p>
                        <img width="350px" height="100px" src="{{asset('assets/img/sayur 5.jpg')}}" class="img-fluid" alt="Responsive image">
                    </p>
                    <p>isi konten</p>
                    <footer class="blockquote-footer">SiPEKA <cite title="Source Title"> Cara Menanam Wortel Di Rumah
                            Yang Baik Dan Benar. Sangat Mudah!</cite>
                    </footer>
                </blockquote>
        @endforeach

            </div>
        </div>
    </div>
<br>
@endsection