<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>SMP PGRI CIRANJANG</title>
   
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>
    .top {
        position: relative;
        background-image: linear-gradient(-90deg, #0984e3, #00cec9);
        width: 100%;
        height: 520px;
    }

    .carousel-inner img {
        width: 100%;
        height: 640px;
        object-fit: cover;
    }

    marquee {
        width: 1200px;
        margin-right: 30px;
    }

    * {
        font-family: 'Poppins';
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: bold;
    }

    #foot {
        background: #10A5F5;
        height: 450px;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 30px;
        border: none;
        outline: none;
        background-color: #10A5F5;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #10A5F5;
    }

    .font12 {
        font-size: 12px;
    }

    .font13 {
        font-size: 13px;
    }

    .font14 {
        font-size: 14px;
    }

    .font15 {
        font-size: 15px;
    }

    .font16 {
        font-size: 16px;
    }

    .font18 {
        font-size: 18px;
    }

    @media only screen and (max-width: 600px) {
        .carousel-inner img {
            width: 100%;
            height: 50%;
        }

        #foot {
            background: #10A5F5;
            height: 800px;
        }

        #paragrafHP {
            font-size: 10px;
        }

        #fontNav {
            font-size: 10px;
        }

        marquee {
            width: 200px;
            margin-right: 30px;
        }

        .font14 {
            font-size: 12px;
        }

        .bd-title {
            font-size: 13px;
        }

        .font-size-sm {
            font-size: 12px;
        }

        .fontMobile {
            font-size: 10px;
        }
    }

</style>

<body>
    <div class="bg-primary text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <marquee behavior="" direction="left">
                        Selamat Datang Di Website SMP PGRI CIRANJANG, Dapatkan Informasi Terkait SMP PGRI CIRANJANG
                        Disini . . .
                    </marquee>
                </div>
                <div class="col-md-1">
                    <a class="nav-link text-white mr-2 fontMobile font14" href="{{route('login')}}"><i
                            class="fas fa-sign-in-alt"></i> Login</a>
                </div>
            </div>
        </div>
    </div>


            
 @foreach($logo as $logo)
    <header class="pt-3 border-bottom">
        <div class="container pt-md-1 pb-md-1">
            <ul class="navbar-nav">
                <div class="row">

                    <li class="nav-item">
                        <img src="{{ asset('/image/'.$logo->logo)}}" alt="" class="img img-thumbnail" width="80"
                            style="border:none;background:transparent;">&emsp;
                    </li>
                    <li class="navbar-nav">
                        <h5 class="bd-title mt-4 mb-0 font-weight-bold" style="color:#10A5F5;">{{ $logo->nama}}</h5>
                        <p class="mt-0 font-size-sm">{{ $logo->isi }}</p>
                    </li>

                </div>
            </ul>

        </div>
    </header>
    @endforeach
    <!-- Navbar Menu -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background:#10A5F5;border:5px #10A5F5;">
        <div class="container-fluid">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" style="background-color:#2980b9;" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <i class="fa fa-bars" style="color:#fff;"></i>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="width:100%;">
                <ul class="navbar-nav text-white">
                    <li class="nav-item ">
                        <a class="nav-link font14 text-white" id="klik" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            PROFIL
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('sambutan-kepala-sekolah')}}">Sambutan Kepala
                                Sekolah</a>
                            <a class="dropdown-item font14" href="{{route('sejarah')}}">Sejarah</a>
                            <a class="dropdown-item font14" href="{{route('struktur-organisasi')}}">Struktur Organisasi</a>
                            <!-- <a class="dropdown-item font14" href="{{route('akreditasi')}}">Akreditasi</a> -->
                            <a class="dropdown-item font14" href="{{route('visi-misi')}}">Visi, Misi Dan Tujuan</a>
                            <a class="dropdown-item font14" href="{{route('profile-sekolah')}}">Profile Sekolah</a>
                            <!-- <a class="dropdown-item font14" href="{{route('galeri')}}">Fasilitas</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            GURU
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('direktori-guru')}}">Direktori Guru</a>
                            <a class="dropdown-item font14" href="{{route('silabus')}}">Silabus</a>
                            <!-- <a class="dropdown-item font14" href="#">Materi Ajar</a>
                            <a class="dropdown-item font14" href="#">Materi Ujian</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            SISWA
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('direktori-siswa')}}">Direktori Siswa</a>
                            <a class="dropdown-item font14" href="{{route('prestasi')}}">Prestasi Siswa</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            ALUMNI
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('direktori-alumni')}}">Direktori Alumni</a>
                         </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            GALERI
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('galeri')}}">Galeri</a>
                            <a class="dropdown-item font14" href="{{route('vidio')}}">Vidio</a>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            KEGIATAN
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('intrakulikuler')}}">Intrakulikuler</a>
                            <a class="dropdown-item font14" href="{{route('ekstrakulikuler')}}">Ekstrakulikuler</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            INFORMASI
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('berita')}}">Berita</a>
                            <a class="dropdown-item font14" href="{{route('agenda')}}">Agenda</a>
                            <a class="dropdown-item font14" href="{{route('pengumuman')}}">Pengumuman</a>
                            <!-- <a class="dropdown-item font14" href="">Inpo Weblink</a> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Navbar Menu -->

    <!-- Carousel Banner -->
    <div id="crs01" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#crs01" data-slide-to="0" class="active"></li>
            <li data-target="#crs01" data-slide-to="1"></li>
            <li data-target="#crs01" data-slide-to="2"></li>
            <!-- <li data-target="#demo" data-slide-to="2"></li> -->
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/slider/smp.jpg" alt="" width="1100" height="550">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider/db.jpg" alt="" width="1100" height="550">
            </div>
            <div class="carousel-item ">
                <img src="/assets/img/slider/aktivitas.jpg" alt="" width="1100" height="550">
            </div>
        </div>
        <a class="carousel-control-prev" href="#crs01" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#crs01" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- Akhir Carousel -->

    <!-- main content -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="row">

                    <!-- berita section -->
                    <div class="col-md-12 mb-3" id="berita">
                        <h4 class="font18" style="color:#10A5F5;"><i class="fas fa-clipboard-list"></i> BERITA TERBARU
                        </h4>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            @foreach($berita as $b)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm border-0 rounded-lg">
                                    <div class="card-img">
                                        <img src="/image/{{$b->gambar}}" class="w-100"
                                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                                    </div>
                                    <div class="card-body">
                                        <a href="{{route('baca-berita', $b->id)}}"
                                            class="text-dark text-decoration-none">
                                            <h6>{{ $b->judul }}</h6>
                                        </a>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ date('d-m-Y',strtotime($b->created_at)) }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('berita')}}" class="font-weight-bold text-decoration-none font14 mb-3"
                            style="color: #10A5F5;">Lihat Lebih Banyak</a>
                    </div>

                    <!-- end berita section -->


                    <!-- fasilitas section -->
                    <div class="col-md-12 mb-3 mt-4" id="fasilitas">
                        <h4 class="font18" style="color:#10A5F5;"><i class="fas fa-images"></i> FASILITAS SEKOLAH</h4>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            @foreach($galeri as $g)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm border-0 rounded-lg">
                                    <div class="card-img">
                                        <img src="/image/{{$g->gambar}}" class="w-100"
                                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                                    </div>
                                    <div class="card-body text-center">
                                        <h6>{{$g->judul }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a href="{{route('galeri')}}" class="font-weight-bold font14 text-decoration-none mb-3"
                            style="color: #10A5F5;">Lihat Lebih Banyak</a>
                    </div>
                    <!-- end fasilitas section -->

                    <!-- eskul section -->
                    <div class="col-md-12 mb-3 mt-4" id="eskul">
                        <h4 class="font18" style="color:#10A5F5;"><i class="fas fa-video"></i> EKSTRAKULIKULER</h4>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            @foreach($eskul as $e)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm border-0 rounded-lg">
                                    <div class="card-img">
                                        <img src="/image/{{$e->gambar}}" class="w-100"
                                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                                    </div>
                                    <div class="card-body text-center">
                                        <h6>{{ $e->nama_eskul }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a href="{{route('eskul')}}" class="font-weight-bold font14 text-decoration-none mb-3"
                            style="color: #10A5F5;">Lihat Lebih Banyak</a>
                    </div>

                    <!-- end eskul section -->

                </div>
            </div>
            <div class="col-md-4">

                <!-- agenda section -->
                <div class="title mb-4">
                    <h4 class="font18" style="color:#10A5F5;"><i class="fa fa-calendar" aria-hidden="true"></i> AGENDA
                        TERBARU</h4>
                </div>

                @foreach($agenda as $ag)
                <div class="card mb-3 shadow-sm border-0">
                    <div class="card-body">
                        <h6>{{ $ag->judul }}</h6>
                        <hr>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $ag->lokasi }}
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            {{ date('d-m-Y', strtotime($ag->tanggal)) }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('agenda')}}" class="font-weight-bold font14 text-decoration-none mb-3"
                            style="color: #10A5F5;">Lihat Lebih Banyak</a>
                    </div>
                </div>
                @endforeach

                <!-- end agenda section -->

                <!-- kategori section -->
                <div class="title mb-4 mt-5">
                    <h4 class="font18" style="color:#10A5F5;"><i class="fa fa-folder" aria-hidden="true"></i> PENGUMUMAN
                    </h4>
                </div>

                @foreach($pengumuman as $p)
                <div class="list-group">
                    <li href="#" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded">
                        {!! $p->deskripsi !!}</li>
                </div>
                <div class="col-md-12">
                    <a href="{{route('pengumuman')}}" class="font-weight-bold font14 text-decoration-none mb-3"
                        style="color: #10A5F5;">Lihat Lebih Banyak</a>
                </div>
            </div>
            @endforeach


            <!-- end kategori section -->

        </div>
    </div>
    </div>
    <!-- end main content -->

    <!-- prestasi -->
    <div class="container-fluid">
        <div class="col-md-12 mb-3" id="prestasi">
            <h4 class="text-center font18" style="color:#10A5F5;"><i class="fas fa-trophy"></i> PRESTASI SEKOLAH</h4>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <th style="background:#10A5F5;color:#fff;">No</th>
                        <th style="background:#10A5F5;color:#fff;">Nama&nbsp;Lomba</th>
                        <th style="background:#10A5F5;color:#fff;">Bidang</th>
                        <th style="background:#10A5F5;color:#fff;">Juara</th>
                        <th style="background:#10A5F5;color:#fff;">Keterangan</th>
                    </thead>
                    <?php $no = 1; ?>

                    <tbody style="font-size:14px;">
                        @foreach($prestasi as $p)
                        <tr>
                            <td style="text-align:center;">{{$no++}}</td>
                            <td>{{$p->nama_lomba}}</td>
                            <td style="text-align:center;">{{$p->bidang_lomba}}</td>
                            <td style="text-align:center;">{{$p->juara}}</td>
                            <td style="text-align:center;">{!! $p->ket !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{route('prestasi')}}" class="font-weight-bold font14 text-decoration-none mb-3"
                style="color: #10A5F5;">Lihat Lebih Banyak</a>
        </div>
    </div>


    <br><br>
    <footer class="mt-5" id="foot">
        <div class="col-md-12">
            <div class="row">

            @foreach($kontak as $kontak)
                <div class="col-md-4 col-12">
                    <h6 class="mt-5 text-center text-white">Peta Sekolah</h6>
                    <center>
                    <iframe src="{{$kontak->maps}}" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </center>
                </div>
                <div class="col-md-4 col-12">
                    <br>
                    <p  class="mt-5 text-white ml-5">{!! $kontak->telp !!}</p>
                    <p class="text-white ml5-">{!! $kontak->fax !!}</p>
                    <p class="text-white ml5-">{!! $kontak->email !!}</p>
                  </p>
                </div>
            @endforeach
            
            @foreach($weblink as $weblink)
                <div class="col-md-4 col-12">
                    <h6 class="mt-5 text-center text-white">Inpo Weblink</h6>
                    <a href="{{$weblink->fb}}" class="">
                        <img src="/image/logo/fb.png" alt="" class="img img-thumbnail" width="50"
                            style="background: transparent;border:none;">
                    </a>
                    <a href="{{$weblink->ig}}" class="">
                        <img src="/image/logo/ig.png" alt="" class="img img-thumbnail" width="50"
                            style="background: transparent;border:none;">
                    </a>
                    <a href="{{$weblink->yt}}">
                        <img src="/image/logo/yt.png" alt="" class="img img-thumbnail" width="50"
                            style="background: transparent;border:none;">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </footer>
    <section style="background-color: ;">
        <div class="container">
            <div class="kontent">
                <p style="background-color: ">
                    <center>
                        <span>SMP PGRI Ciranjang &copy;
                            <a href="https://www.facebook.com/farijan.muhamad/" target="_blank"
                                class="text-dark">Design
                                by. Muhamad
                                Farijan</a>
                        </span>
                    </center>
                </p>
            </div>
        </div>
    </section>





    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('a#klikF').click(function () {
                    $('html, body').animate({
                        scrollTop: $("div#fasilitas").offset().top
                    }, 1000)
                }),
                $('a#klikP').click(function () {
                    $('html, body').animate({
                        scrollTop: $("div#prestasi").offset().top
                    }, 1000)
                }),
                $('a#klikE').click(function () {
                    $('html, body').animate({
                        scrollTop: $("div#eskul").offset().top
                    }, 1000)
                }),
                $('a#klikB').click(function () {
                    $('html, body').animate({
                        scrollTop: $("div#berita").offset().top
                    }, 1000)
                })
        });

        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>

</body>

</html>
