<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LACAK - Lapor Cari Perbaiki</title>
    <link rel="icon" type="image/png" href="/img/maps2.png">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    @include('navigation')

    <!-- Header -->
    @include('header')

    <!-- Partisipan -->
    <!-- @include('partisipan') -->

    <!-- Services Section -->
    @include('services')

    <!-- Portfolio Grid Section -->
    @include('portfolio')

    <!-- About Section -->
    @include('about')

    <!-- Team Section -->
    @include('team')
    @include('daftar-bpbd')


    <!-- Contact Section -->
   <!--  @include('contact') -->
    @include('footer')

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Jembatan Penghubung Pantai Carita Roboh</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="img/portfolio/1.jpg" alt="">
                                <p>Banjir bandang yang melanda 6 desa di Pandeglang, Banten, yakni Desa Teluk, Desa Cigondang, Desa Labuan, Desa Kalang Anyar, Desa Sukajadi dan Desa Carita. Banjir yang membuat 285 kepala keluarga harus dievakuasi itu menyebabkan jembatan penghubung ke Pantai Carita roboh.Berdasarkan data Badan Penanggulangan Bencana Daerah (BPBD) Pandeglang, 285 kepala keluarga dari 6 desa tersebut dievakuasi karena terkena dampak banjir bandang. korban terbanyak ada di Kampung Masjid Timur yakni 176 jiwa atau 32 KK. Bencana ini membuat akses jalan tertutup lumpur.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Kondisi Jalan di Perbatasan Pulau Sebatik</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="img/portfolio/2.jpg" alt="">
                                <p>Kondisi jalan poros di perbatasan pulau Sebatik, Kecamatan Sebatik Barat, Kabupaten Nunukan, Kalimantan Utara sungguh memprihatinkan. Pasalnya, jalan poros yang menghubungkan antar Kecamatan di pulau tersebut nyaris terputus akibat amblas. Tingginya curah hujan yang terjadi di daerah ini sejak akhir-akhir ini salah satu faktor banyaknya jalan yang amblas dan longsor.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>RSUD Tanjung Lombok Utara Rusak Parah Akibat Gempa</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="img/portfolio/3.jpg" alt="">
                                <p>RSUD Tanjung Lombok Utara mengalami kerusakan 90 persen akibat gempa Lombok, Nusa Tenggara Barat (NTB) pada Minggu, 5 Agustus 2018. Gempa berkekuatan 7 SR itu menghancurkan seluruh fasilitas rumah sakit, sehingga ruangan untuk pelayanan pasien pun tidak dapat digunakan. Akibat hancurnya seluruh fasilitas rumah sakit karena gempa Lombok, hingga kini, pelayanan rumah sakit masih terus dilakukan di luar ruangan dengan menggunakan tenda.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Jembatan Putus di Madina</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="img/portfolio/4.jpg" alt="">
                                <p>Telah terjadi hujan deras dengan intensitas cukup lama di Madina, akibatnya terjadi banjir hingga longsor. Kondisi membuat 300 hingga 400 orang mengungsi dan sebanyak 73 rumah hancur maupun rusak.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Bandara Palu Ditutup 24 Jam Pasca Gempa</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="img/portfolio/5.jpg" alt="">
                                <p>Otorita berwenang Jumat malam (28/9) memutuskan menutup bandara Mutiara SIS Al-Jufri di Palu dan menghentikan seluruh operasi hingga 24 jam ke depan. Gempa berkekuatan 7,4 yang mengguncang wilayah Sulawesi Tengah telah menimbulkan dampak pada beberapa infrastruktur penting di daerah itu salah satunya adalah Bandara Mutia SIS Al-Jufri.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Banjir Rusak Aspal Jalan Raya</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="img/portfolio/6.jpg" alt="">
                                <p>Bencana banjir yang diakibatkan jebolnya saluran irigasi Situ Marta di Desa Kutasari, merusak aspal Jalan Raya Kutasari sepanjang 50 meter. Selain itu, guardrail atau rambu pembatas tepi jalan juga rusak. Rambu lalu lintas penunjuk jalan roboh. Banjir juga mengancam ruas Jalan Raya Kutasari, karena di beberapa bagian jalan talud penguat yang berada di saluran irigasi ikut tergerus air bah.
                                </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('js/agency.min.js')}}"></script>

</body>

</html>
