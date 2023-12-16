@extends('frontend.layout.app')

@section('content')

<section id="" style="padding: 87px">
    <div class="row">
                <div class="text-center">
                    <div class="col-lg-12">
                        <div id="desc-tabs" class="desc-tabs">

                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation">
                                    <a href="#silver" aria-controls="silver" role="tab" data-toggle="tab">
                                        Silver
                                    </a>
                                </li>


                                <li role="presentation">
                                    <a href="#gold" aria-controls="gold" role="tab" data-toggle="tab">
                                        Gold
                                    </a>
                                </li>

                                <li role="presentation">
                                    <a href="#platinum" aria-controls="platinum" role="tab"
                                        data-toggle="tab">
                                        Platinum
                                    </a>
                                </li>
                            </ul>
                        </div>
        

        <!--TAB PANES-->

        <div class="tab-content">
        

            <div role="tabpanel" class="tab-pane active fade in" id="silver">
                <div class="tab-para">
                    

                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                .card {
                                    border: 1px;
                                    padding: 10px 50px;
                                    border-radius: 16px;
                                    width: 330px;
                                    height: 300px;
                                }

                                .card::after {
                                    position: absolute;
                                    z-index: -1;
                                    opacity: 0;
                                    -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
                                    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
                                }

                                .card:hover {


                                    transform: scale(1.02, 1.02);
                                    -webkit-transform: scale(1.02, 1.02);
                                    backface-visibility: hidden;
                                    will-change: transform;
                                    box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
                                }

                                .card:hover::after {
                                    opacity: 1;
                                }

                                .card:hover .btn-outline-primary {
                                    color: white;
                                    background: #007bff;
                                }
                            </style>

                            </head>

                            <body>



                                <div class="container p-5">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 mb-4">
                                            <div class="card h-100 shadow-lg">
                                                <div class="card-body">
                                                    <div class="text-center p-3">
                                                        <span class="h3">Rp 6,750,000</span>
                                                        <br><br>
                                                        <h5 class="card-title">SILVER A</h5>
                                                        
                                                        <br><br>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                <ul class="list-group list-group-flush">
                                                    <li>HANDAYANI HOTEL</li>
                                                    <li>Sederhana Resto</li>
                                                    <li>Kuota 15 orang</li>
                                                    <li>2 Hari  1 Malam</li>
                                                </ul>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button style="padding: 8px; background: #10899E; border-radius: 4px; display: inline-flex"> <a style="color: white; font-size: 16px; font-weight: 400" href="/detail">Lihat Detail</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mb-4">
                                            <div class="card h-100 shadow-lg">
                                                <div class="card-body">
                                                    <div class="text-center p-3">
                                                        <span class="h3">Rp 8,000,000</span>
                                                        <br><br>
                                                        <h5 class="card-title">SILVER B</h5>
                                                        <br><br>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                <ul class="list-group list-group-flush">
                                                    <li>HOTEL ASRI</li>
                                                    <li>Resto Bambu Hijau</li>
                                                    <li>Kuota 5 orang</li>
                                                    <li>2 Hari  1 Malam</li>
                                                    
                                                </ul>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button style="border-radius:50px width: 100%; height: 100%; padding: 8px; background: #10899E; border-radius: 4px; justify-content: center; align-items: center; gap: 8px; display: inline-flex; color:white" href="#">Lihat Detail</a> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mb-4">
                                            <div class="card h-100 shadow-lg">
                                                <div class="card-body">
                                                    <div class="text-center p-3">
                                                        <span class="h3">Rp 6,750,000</span>
                                                        <br><br>
                                                        <h5 class="card-title">SILVER C</h5>
                                                        <br><br>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                <ul class="list-group list-group-flush">
                                                    <li>SAHID SKYLAND CITY</li>
                                                    <li>Resto Lautan Rasa</li>
                                                    <li>Kuota 10 orang</li>
                                                    <li>3 Hari 2 Malam</li>
                                                </ul>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button style="border-radius:50px width: 100%; height: 100%; padding: 8px; background: #10899E; border-radius: 4px; justify-content: center; align-items: center; gap: 8px; display: inline-flex; color:white" href="#">Lihat Detail</a> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane active fade in" id="gold">
                <div class="tab-para">

                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                .card {
                                    background: white;
                                    border: none;
                                    padding: 10px 50px;
                                }
                                .card h5 {
                                    width: 100%; 
                                    text-align: center; 
                                    color: #696F8C; 
                                    font-size: 14px; 
                                    font-weight: 500; 
                                    line-height: 24px; 
                                    word-wrap: break-word;
                                }

                                .card::after {
                                    position: absolute;
                                    z-index: -1;
                                    opacity: 0;
                                    -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
                                    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
                                }

                                .card:hover {


                                    transform: scale(1.02, 1.02);
                                    -webkit-transform: scale(1.02, 1.02);
                                    backface-visibility: hidden;
                                    will-change: transform;
                                    box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
                                }

                                .card:hover::after {
                                    opacity: 1;
                                }

                                .card:hover .btn-outline-primary {
                                    color: white;
                                    background: #007bff;
                                }
                            </style>

                            </head>

                            <body>



                                <div class="container p-5">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 mb-4">
                                            <div class="card h-100 shadow-lg">
                                                <div class="card-body">
                                                    <div class="text-center p-3">
                                                        <span class="h3">Rp 16,750,000</span>
                                                        <br><br>
                                                        <h5 class="card-title">GOLD A </h5>
                                                        <br><br>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                <ul class="list-group list-group-flush">
                                                    <li>HANDAYANI HOTEL</li>
                                                    <li>Sederhana Resto</li>
                                                    <li>Kuota 25 orang</li>
                                                    <li>2 Hari  1 Malam</li>
                                                </ul>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button style="border-radius:50px width: 100%; height: 100%; padding: 8px; background: #10899E; border-radius: 4px; justify-content: center; align-items: center; gap: 8px; display: inline-flex; color:white" href="#">Lihat Detail</a> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mb-4">
                                            <div class="card h-100 shadow-lg">
                                                <div class="card-body">
                                                    <div class="text-center p-3">
                                                        <span class="h3">Rp 18,000,000</span>
                                                        <br><br>
                                                        <h5 class="card-title">GOLD B</h5>
                                                        <br><br>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                <ul class="list-group list-group-flush">
                                                    <li>HOTEL ASRI</li>
                                                    <li>Resto Bambu Hijau</li>
                                                    <li>Kuota 25 orang</li>
                                                    <li>2 Hari  1 Malam</li>
                                                </ul>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button style="border-radius:50px width: 100%; height: 100%; padding: 8px; background: #10899E; border-radius: 4px; justify-content: center; align-items: center; gap: 8px; display: inline-flex; color:white" href="#">Lihat Detail</a> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mb-4">
                                            <div class="card h-100 shadow-lg">
                                                <div class="card-body">
                                                    <div class="text-center p-3">
                                                        <span class="h3">Rp 20,500,000</span>
                                                        <br><br>
                                                        <h5 class="card-title">GOLD C</h5>
                                                        <br><br>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                <ul class="list-group list-group-flush">
                                                    <li>SAHID SKYLAND CITY</li>
                                                    <li>Resto Lautan Rasa</li>
                                                    <li>Kuota 30 orang</li>
                                                    <li>3 Hari 2 Malam</li>
                                                </ul>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button style="border-radius:50px width: 100%; height: 100%; padding: 8px; background: #10899E; border-radius: 4px; justify-content: center; align-items: center; gap: 8px; display: inline-flex; color:white" href="#">Lihat Detail</a> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane active fade in" id="platinum">
                <div class="tab-para">

                    <div class="row">
                        <div class="row">
                            <div class="col-lg-12">
                                <style>
                                    .card {
                                        border: none;
                                        padding: 10px 50px;
                                    }

                                    .card::after {
                                        position: absolute;
                                        z-index: -1;
                                        opacity: 0;
                                        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
                                        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
                                    }

                                    .card:hover {


                                        transform: scale(1.02, 1.02);
                                        -webkit-transform: scale(1.02, 1.02);
                                        backface-visibility: hidden;
                                        will-change: transform;
                                        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
                                    }

                                    .card:hover::after {
                                        opacity: 1;
                                    }

                                    .card:hover .btn-outline-primary {
                                        color: white;
                                        background: #007bff;
                                    }
                                </style>

                                </head>

                                <body>



                                    <div class="container p-5">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 mb-4">
                                                <div class="card h-100 shadow-lg">
                                                    <div class="card-body">
                                                        <div class="text-center p-3">
                                                            <span class="h3">Rp 26,750,000</span>
                                                            <br><br>
                                                            <h5 class="card-title">PLATINUM A</h5>
                                                            <br><br>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                    <ul class="list-group list-group-flush">
                                                        <li>HANDAYANI HOTEL</li>
                                                        <li>Sederhana Resto</li>
                                                        <li>Kuota 35 orang</li>
                                                        <li>2 Hari  1 Malam</li>
                                                    </ul>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <button style="border-radius:50px width: 100%; height: 100%; padding: 8px; background: #10899E; border-radius: 4px; justify-content: center; align-items: center; gap: 8px; display: inline-flex; color:white" href="#">Lihat Detail</a> </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 mb-4">
                                                <div class="card h-100 shadow-lg">
                                                    <div class="card-body">
                                                        <div class="text-center p-3">
                                                            <span class="h3">Rp 28.000,000</span>
                                                            <br><br>
                                                            <h5 class="card-title">PLATINUM B</h5>
                                                            <br><br>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                    <ul class="list-group list-group-flush">
                                                        <li>HOTEL ASRI</li>
                                                        <li>Resto Bambu Hijau</li>
                                                        <li>Kuota 35 orang</li>
                                                        <li>2 Hari  1 Malam</li>
                                                    </ul>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <button style="border-radius:50px width: 100%; height: 100%; padding: 8px; background: #10899E; border-radius: 4px; justify-content: center; align-items: center; gap: 8px; display: inline-flex; color:white" href="#">Lihat Detail</a> </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 mb-4">
                                                <div class="card h-100 shadow-lg">
                                                    <div class="card-body">
                                                        <div class="text-center p-3">
                                                            <span class="h3">Rp 30,500,000</span>
                                                            <br><br>
                                                            <h5 class="card-title">PLATINUM C</h5>
                                                            <br><br>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                    <ul class="list-group list-group-flush">
                                                        <li>SAHID SKYLAND CITY</li>
                                                        <li>Resto Lautan Rasa</li>
                                                        <li>Kuota 40 orang</li>
                                                        <li>3 Hari 2 Malam</li>
                                                    </ul>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <button style="border-radius:50px width: 100%; height: 100%; padding: 8px; background: #10899E; border-radius: 4px; justify-content: center; align-items: center; gap: 8px; display: inline-flex; color:white" href="#">Lihat Detail</a> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    </div>

    </div>

    </div>
</section>
<!--/.travel-box-->
<!--travel-box end-->


    
<section class="credit-card" style="padding-bottom: 150px">
    <div class="container">
        <div class="tab tab-content">
            <div role="tabpanel" class="tab-pane active fade in" id="hotel">
                <div class="tab-para1">
                    <hr>
                    <!-- Project One -->
                    <div class="card-holder">
                        <div class="card-box bg-news">
                            <div class="row">
                                <form>
                                    <div class="card-details">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <h3 style="color: #474D66; font-size: 32px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 600; line-height: 40px; word-wrap: break-word">Silver A</h3>
                                                <p style="color: #0F5156; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Selamat datang di Silver Bintang 2 - Rumah Makan, di sini, rasa lezat dan keramahtamahan menyatu dalam suasana yang nyaman. Dengan peringkat dua bintang yang menghiasi namanya, kami siap memberikan pengalaman kuliner istimewa bagi Anda dan teman-teman Anda.</p>
                                                <ul>
                                                    <li><i class="fa fa-user" aria-hidden="true"> 15 Orang</i></li>
                                                    <li><i class="fa fa-calendar-o" aria-hidden="true"> 2 Hari 1 Malam</i></li>
                                                    <li><i class="fa fa-glass" aria-hidden="true"> Sederhana Resto</i></li>
                                                </ul>
                                                <h3 style="color: #474D66; font-size: 32px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 600; line-height: 40px; word-wrap: break-word">Pelatihan</h3>
                                                <p style="color: #0F5156; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                    <ul>
                                                        <li>1. Paket Pelayanan Pelanggan Tentang Perpajakan</li>
                                                        <li>2. Paket Pelayanan Publik Tentang Kesehatan Bayi dan Anak</li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img class="img-fluid" src="{{asset('images/logo/baraya.png')}}" width="900">
                                            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
                                                <h4>Rp 6,750,000</h4>
                                                <button style="padding: 8px; background: #0F5156; border-radius: 4px;">
                                                    <a style="color: white; font-size: 16px; font-weight: 400; text-decoration: none;" href="/calendardetail">Lihat Jadwal</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            


    
<!-- testemonial Start -->
<section id="mycarousel" style="padding: 5px">
    <div class="container"> 

        <div class="owl-carousel owl-theme" id="testemonial-carousel">

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        </span>
                        <h3>
                            <a href="#">
                                Kunjungan Presiden
                            </a>
                        </h3>
                        <p>
                            19 November 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        <h3>
                            <a href="#">
                                Syukuran Hasil Bumi
                            </a>
                        </h3>
                        <p>
                            19 Desember 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        <h3>
                            <a href="#">
                                Festival Budaya
                            </a>
                        </h3>
                        <p>
                            19 November 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        <h3>
                            <a href="#">
                                Pemilu
                            </a>
                        </h3>
                        <p>
                            19 November 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        <h3>
                            <a href="#">
                                Kunjungan Presiden
                            </a>
                        </h3>
                        <p>
                            19 November 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        <h3>
                            <a href="#">
                                Kunjungan Presiden
                            </a>
                        </h3>
                        <p>
                            19 November 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        <h3>
                            <a href="#">
                                Kunjungan Presiden
                            </a>
                        </h3>
                        <p>
                            19 November 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        <h3>
                            <a href="#">
                                Kunjungan Presiden
                            </a>
                        </h3>
                        <p>
                            19 November 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-txt">
                        <h3>
                            <a href="#">
                                Kunjungan Presiden
                            </a>
                        </h3>
                        <p>
                            19 November 2023
                        </p>
                        <p>
                            Lapangan Jatinangor
                        </p>

                        <h3>
                            <a href="#">
                                Terbuka Untuk Umum
                            </a>
                        </h3>
                    </div><!--/.home1-testm-txt-->
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

        </div><!--/.testemonial-carousel-->
    </div><!--/.container-->

</section><!--/.testimonial-->
<!-- testemonial End -->
@endsection