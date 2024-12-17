<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Dispendukcapil Bangkalan</title>
    <link rel="shortcut icon" href="{{asset ('landing-page/images/favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset ('landing-page/css/bootstrap.css') }}">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="{{asset ('landing-page/css/font-awesome.min.css') }}">
    <!-- Main Styles CSS -->
    <link href="{{asset ('landing-page/css/style.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.js"></script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset ('landing-page/css/animate.min.css') }}">
</head>

<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

        <div class="shadow">
            <!-- navbar -->
            <nav class="navbar navbar-inverse navbar-fixed form-shadow">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">
                            <img alt="Brand" src="landing-page/images/bangkalan.png">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-link">
                            <li class="active"><a href="">HOME</a></li>
                            <li><a href="lapor">LAPOR</a></li>
                            <li><a href="lihat">LIHAT PENGADUAN</a></li>
                            <li><a href="cara">CARA</a></li>
                            <li class="dropdown">
                                <a href="profildinas" class="dropdown-toggle" data-toggle="dropdown">PROFIL DINAS <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="profildinas">Profil Dinas</a></li>
                                    <li class="divider"></li>
                                    <li><a href="profildinas">Visi dan Misi</a></li>
                                    <li class="divider"></li>
                                    <li><a href="profildinas">Struktur Organisasi</a></li>
                                    <li class="divider"></li>
                                    <li><a href="profildinas">Motto / Maklumat Pelayanan</a></li>
                                </ul>
                            </li>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="bantuan">BANTUAN</a></li>
                            <li><a href="kontak">KONTAK</a></li>
                        </ul>
                        <!-- <ul class="nav navbar-nav navbar-right nav-link">
                            <li><a href="#">LOGIN</a></li>
                            <li><a href="#">REGISTER</a></li>
                        </ul> -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- end navbar -->

            <!-- start slider -->
            <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mainCarousel" data-slide-to="1"></li>
                    <li data-target="#mainCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/landing-page/images/header_02.jpg" alt="...">
                        <div class="carousel-caption welcome">
                            <h2 class="animated bounceInRight">Selamat Datang</h2>
                            <h3 class="animated bounceInLeft">Website Pengaduan Masyarakat</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="landing=page/images/header_01.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2 class="animated bounceInDown">Pejabat</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="landing-page/images/header_03.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2 class="animated bounceInUp">Pengumuman</h2>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- end Slider -->

            <!-- content -->
            <div class="main-content">
                <!-- section -->
                <div class="section">
                    <div class="row">

                        <div class="col-md-1"></div>
                        <!-- laporan Terbaru -->
                        <div class="col-md-10">
                            <br>
                            <h3 class="text-center">Pengaduan Terbaru</h3>
                            <hr class="custom-line"/>

                            <div class="panel-body card-shadow">
                                <a class="media-left" href="#"><img class="img-circle img-sm form-shadow" src="landing-page/images/avatar1.png"></a>
                                <div class="media-body">
                                    <div>
                                        <a href="#" class="btn-link">Ahmad Faiz</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>Laporan Kerusakan Jalan di Lingkungan RW 05<br>
Kepada Yth.Dinas Lingkungan Hidup Kota Depok<br>

Isi Aduan:
Dengan hormat,
Saya, Ahmad Faiz, warga RT 03/RW 05 Kelurahan Sukamaju, Kecamatan Taman Sari, ingin menyampaikan laporan terkait kerusakan jalan utama di lingkungan kami yang semakin parah. Jalan tersebut berlubang dan sering menyebabkan kecelakaan, terutama saat hujan karena air menggenang.<br>

Detail Lokasi:
Jalan Raya Sukahati, tepatnya di depan Taman RW 05.<br>

Permintaan:
Kami memohon agar segera dilakukan perbaikan demi keselamatan dan kenyamanan pengguna jalan.<br>

No. Pengaduan: 123<br>
Nama Pengadu: Ahmad Faiz<br>
Email: Faiz@gmail.com<br>
No. Telepon: 0812-3456-8765<br>
Nama Desa: Desa Sukahati<br>
Kecamatan: Kecamatan Bojong gede<br>

Jenis Pengaduan: Pengaduan Infrastruktur dan Fasilitas Umum
                                    </p>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->

                            <div class="panel-body card-shadow">
                                <a class="media-left" href="#"><img class="img-circle img-sm form-shadow" src="landing-page/images/avatar1.png"></a>
                                <div class="media-body">
                                    <div>
                                        <a href="#" class="btn-link">BudiSantoso</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p> Laporan Penumpukan Sampah di Jalan Sukamaju<br>
                                        Kepada Yth.
Dinas Lingkungan Hidup Kota Depok<br>

Isi Aduan:
Dengan hormat,
Saya ingin melaporkan adanya penumpukan sampah di Jalan Anggrek 2, RT 02/RW 01, Kelurahan Mekar Jaya. Sampah yang tidak diangkut selama lebih dari seminggu menimbulkan bau tidak sedap dan berpotensi menyebabkan penyakit.<br>

Detail Lokasi:
Titik penumpukan sampah berada di belakang Pasar Mekar Jaya.<br>

Permintaan:
Kami berharap pihak berwenang dapat segera menangani masalah ini dengan menyediakan fasilitas pengangkutan sampah yang lebih rutin.<br>

No. Pengaduan: 124<br>
Nama Pengadu: Budi Santoso<br>
Email: budisantoso@gmail.com<br>
No. Telepon: 0812-3456-7890<br>
Nama Desa: Desa Sukamaju<br>
Kecamatan: Kecamatan Taman Sari<br>

Jenis Pengaduan: Pengaduan Infrastruktur dan Fasilitas Umum


                                    </p>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->

                            <div class="panel-body card-shadow">
                                <a class="media-left" href="#"><img class="img-circle img-sm form-shadow" src="landing-page/images/avatar1.png"></a>
                                <div class="media-body">
                                    <div>
                                        <a href="#" class="btn-link">Padil</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>Laporan Kerusakan Jalan Jatimulya RW 05<br>
Kepada Yth.
Dinas Lingkungan Hidup Kota Depok<br>

Isi Aduan:
Dengan hormat,
Saya, Padil, warga RT 03/RW 01 Kelurahan Tajimulya, Kecamatan Pasir Putih, melaporkan terkait saluran air yang tersumbat di lingkungan kami. Saluran air di sepanjang Jalan Raya Sukamaju, tepatnya di depan Taman RW 05, sudah lama tidak diperbaiki dan kini mengalami penyumbatan parah, yang menyebabkan banjir saat hujan deras.<br>

Permintaan:
Kami memohon agar segera dilakukan perbaikan Agar tidak adanya luapan air dan tidak menyebabkan banjir.<br>

No. Pengaduan: 125<br>
Nama Pengadu: Padil<br>
Email: padil@gmail.com<br>
No. Telepon: 0812-3456-6543<br>
Nama Desa: Desa Tajimulya<br>
Kecamatan: Kecamatan Pasir Putih<br>

Jenis Pengaduan: Pengaduan Infrastruktur dan Fasilitas Umum

                                    </p>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->

                            <div class="panel-body card-shadow">
                                <a class="media-left" href="#"><img class="img-circle img-sm form-shadow" src="landing-page/images/avatar1.png"></a>
                                <div class="media-body">
                                    <div>
                                        <a href="#" class="btn-link">Nabil</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>Laporan Kebisingan di Lingkungan Rw 3<br>
Kepada Yth.
Dinas Lingkungan Hidup Kota Depok<br>

Isi Aduan:
Dengan hormat,
ingin melaporkan masalah kebisingan yang sering terjadi di lingkungan kami. Kebisingan tersebut terutama berasal dari kegiatan karaoke yang berlangsung pada jam-jam malam hari dan mengganggu kenyamanan serta ketenangan warga, terutama pada waktu istirahat.<br>

Permintaan:
Kami memohon agar segera dilakukan pemantauan dan tindakan, seperti pengaturan jam operasional kegiatan tersebut atau penyuluhan kepada pihak yang menyebabkan kebisingan<br>
No. Pengaduan: 126<br>
Nama Pengadu: Nabil<br>
Email: Nabil@gmail.com<br>
No. Telepon: 0812-3456-0897<br>
Nama Desa: Desa koneng<br>
Kecamatan: Kecamatan Cinangka<br>

Jenis Pengaduan: Pengaduan Pelanggaran Hukum
                                    </p>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->
                        </div>
                        <!-- End Laporan Terbaru -->

                        <div class="col-md-1"></div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- /.section -->

                <hr>
                <br>
                <h3 class="text-center">Social Media</h3>
                <hr class="custom-line"/>

                <!-- /.social feed section -->
                <div class="section">
                    <div class="row social-feed">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="box">
                                <div class="box-icon shadow">
                                    <span class="fa fa-2x fa-twitter"></span>
                                </div>
                                <div class="info">
                                    <h4 class="text-center">Twitter</h4>
                                    <a class="twitter-timeline" href="https://twitter.com/disdukcapilbkl?ref_src=twsrc%5Etfw" data-width="500" data-height="300">Tweets by disdukcapilbkl</a>
                                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="box">
                                <div class="box-icon shadow">
                                    <span class="fa fa-2x fa-facebook"></span>
                                </div>
                                <div class="info">
                                    <h4 class="text-center">Facebook</h4>
                                    <div class="fb-page" data-height="300" data-width="500" data-href="https://www.facebook.com/dispendukcapilbkl" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/dispendukcapilbkl" class="fb-xfbml-parse-ignore">
                                            <a href="https://www.facebook.com/dispendukcapilbkl">Dispenduk dan Capil Kabupaten Bangkalan</a>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end social feed section -->

            </div>
            <!-- end main-content -->

            <!-- Footer -->
            <footer class="footer text-center">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <i class="fa fa-top fa-map-marker"></i>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="text-uppercase mb-4">Kantor</h4>
                            </li>
                        </ul>
                        <p class="mb-0">
                        Mekar Jaya, Kec. Sukmajaya, Kota Depok Jawa Barat 16411
                            <br>Depok, Jawa Barat
                        </p>
                        </div>
                        <div class="col-md-4 mb-5 mb-lg-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <i class="fa fa-top fa-rss"></i>
                                </li>
                                <li class="list-inline-item">
                                    <h4 class="text-uppercase mb-4">Sosial Media</h4>
                                </li>
                            </ul>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/dispendukcapilbkl/">
                                        <i class="fa fa-fw fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/disdukcapilbkl">
                                        <i class="fa fa-fw fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <i class="fa fa-top fa-envelope-o"></i>
                                </li>
                                <li class="list-inline-item">
                                    <h4 class="text-uppercase mb-4">Kontak</h4>
                                </li>
                            </ul>
                            <p class="mb-0">
                            +62 882-1461-2609 <br>
                                aduanmasyarakat@kotadepok.go.id <br>
                                aduanmasyarakat@gmail.com
                            </p>
                        </div>
                    </div>
                </footer>
                <!-- /footer -->

                <div class="copyright py-4 text-center text-white">
                    <!-- <div class="container"> -->
                        <small>| Copyright &copy; Dinas Lingkungan Hidup Kota Depok</small>
                    <!-- </div> -->
                </div>
                <!-- shadow -->
        </div>

</body>
</html>

