<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Lapor | Dispendukcapil Bangkalan</title>
    <link rel="shortcut icon" href="{{asset ('landing-page/images/favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset ('landing-page/css/bootstrap.css') }}">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="{{asset ('landing-page/css/font-awesome.min.css') }}">
    <!-- Main Styles CSS -->
    <link href="{{asset ('landing-page/css/style.css') }}" rel="stylesheet">
</head>

<body>

        <div class="shadow">
            <nav class="navbar navbar-fixed navbar-inverse form-shadow">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="home">
                            <img alt="Brand" src="landing-page/images/bangkalan.png">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="home">HOME</a></li>
                            <li class="active"><a href="lapor">LAPOR</a></li>
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
                            <li><a href="">BANTUAN</a></li>
                            <li><a href="kontak">KONTAK</a></li>
                        </ul>
                        <!-- <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">LOGIN</a></li>
                            <li><a href="#">REGISTER</a></li>
                        </ul> -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>


            <!-- content -->
            <div class="main-content">


                <h3>Buat Laporan</h3>
                <hr/>
                <div class="row">
                    <div class="col-md-8 card-shadow form-custom">
                        <form class="form-horizontal" role="form" method="post" action="index.php">
                            <div class="form-group">
                                <label for="nomor" class="col-sm-3 control-label">Nomor Pengaduan</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-exclamation-sign"></span></div>
                                        <input type="text" class="form-control" id="nomor" name="nomor" value="12345" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telpon" class="col-sm-3 control-label">Telpon</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                                        <input type="text" class="form-control" id="telpon" name="telpon" placeholder="087123456789" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desa" class="col-sm-3 control-label">Desa</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                                        <input type="text" class="form-control" id="desa" name="desa" placeholder="Nama Desa" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan" class="col-sm-3 control-label">Kecamatan</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Nama Kecamatan" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tujuan" class="col-sm-3 control-label">Jenis Pengaduan</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-random"></span></div>
                                        <select class="form-control">
                                            <option>Pelayanan Pendaftaran Penduduk</option>
                                            <option>Pelayanan Pencatatan Sipil</option>
                                            <option>Pengelolaan Informasi Administrasi Kependudukan</option>
                                            <option>Pengaduan Sosial dan Lingkungan</option>
                                            <option>Pengaduan Pelanggaran Hukum</option>
                                            <option>Pengaduan Infrastruktur dan Fasilitas Umum</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pengaduan" class="col-sm-3 control-label">Isi Pengaduan</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                                        <textarea class="form-control" rows="4" name="pengaduan" placeholder="Tuliskan Isi Pengaduan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-3">
                                    <input id="submit" name="submit" type="submit" value="Kirim Pengaduan" class="btn btn-primary form-shadow">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-3"> -->
                                    <!-- <! Will be used to display an alert to the user> -->
                                <!-- </div>
                            </div> -->
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>


                <!-- /.section -->

                <hr>
            </div>

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
                <div class="container">
                    <small>| Copyright &copy; Dinas Lingkungan Hidup Kota Depok</small>
                </div>
            </div>
            <!-- shadow -->
        </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.js"></script>

</body>

</html>
