<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Kontak | Dispendukcapil Bangkalan</title>
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
                            <img alt="Brand" src="images/bangkalan.png">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="home">HOME</a></li>
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
                            <li class="active"><a href="">KONTAK</a></li>
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
                <h3>Kontak</h3>
                <hr/>

                <div id="map" class="card-shadow" style="width:50%;height:300px"></div>
                    <script>
                    function myMap() {
                          var mapCanvas = document.getElementById("map");
                          var myCenter = new google.maps.LatLng(-7.0502444,112.7332750);
                          var mapOptions = {center: myCenter, zoom: 18};
                          var map = new google.maps.Map(mapCanvas,mapOptions);
                          var marker = new google.maps.Marker({
                            position: myCenter,
                            animation: google.maps.Animation.BOUNCE
                          });
                          marker.setMap(map);
                    }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXyK9sf3rI0EKVupuALaOAzq1NKlUES98&callback=myMap"></script>
                <hr>
                <h4>Kantor</h4>
                <p>Mekar Jaya, Kec. Sukmajaya</p>
                <p>Kota Depok Jawa Barat 16411</p>
                <hr>
                <h4>Contact Info:</h4>
                <p>+62 882-1461-2609</p>
                <p>aduanmasyarakat@kotadepok.go.id</p>
                <p>aduanmasyarakat@gmail.com    </p>
                <p>&nbsp;</p>

            <!-- end main-content -->
            </div>

            <hr>

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
                        <small>| Copyright &copy;  Dinas Lingkungan Hidup Kota Depok</small>
                    <!-- </div> -->
                </div>
                <!-- shadow -->
        </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.js"></script>

</body>
</html>
