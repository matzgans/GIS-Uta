<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIGAWAT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    {{-- LEAFLET --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
        rel='stylesheet' />

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">SIGAWAT</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Spatial</a></li>
                    <li><a class="nav-link scrollto" href="#services">Tabular</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="height: 100vh">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Sistem Informasi Geografis Pohuwato</h1>
                    <h2>SIGAWAT Merupakan Sebuah Sistem Yang Memuat Data dan Informasi Geografis Kabupaten Pohuwato
                        Dalam Bentuk Spasial dan Tabular
                    </h2>
                    <div class="d-flex justify-content-center gap-3 justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Data Spatial</a>
                        <a href="#services" class="btn-get-started scrollto">Data Tabular</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Data Spatial</h2>
                </div>

                <div id="maps" style="height: 500px"></div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Data Tabular</h2>
                </div>

                <!-- Di dalam bagian tabel di bawah peta -->
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Objek</th>
                            <th scope="col">Wilayah Administrasi</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Sumber Data</th>
                            <th scope="col">Kabupaten</th>
                            <!-- Tambahkan header lain jika perlu -->
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Isi tabel akan diisi oleh dataHandler.js -->
                    </tbody>
                </table>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok Pohuwato</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">Dhnzz</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

    <script src="{{ asset('assets/js/dataHandler.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan dataHandler.js telah selesai memuat data
            loadDataToTable().then(function() {
                // Inisialisasi DataTable setelah data sepenuhnya dimuat
                $('#myTable').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/id.json"
                    }
                });
            });
        });
    </script>

    {{-- LEAFLET --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>

    <script>
        // Inisialisasi peta
        var map = L.map('maps').setView([0.4949179,121.8850092], 12);
        map.addControl(new L.Control.Fullscreen());

        // Menambahkan layer peta
        var googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        }).addTo(map);

        map.createPane('panePolygons');
        map.getPane('panePolygons').style.zIndex = 400;
        // Fungsi untuk menambahkan data GeoJSON ke peta dengan styling
        function addGeoJsonData(geoJsonData, datasetName) {
            L.geoJSON(geoJsonData, {
                pane: datasetName === "Pohuwato" ? "panePolygons" : "overlayPane",
                style: function (feature){
                    if(datasetName === "Irigasi"){
                        return {
                            color : 'blue',
                            weight: 3
                        }
                    }else if(datasetName === "Pohuwato"){
                        return {
                            color : 'black',
                            weight: 2,
                            fillColor: 'green',
                            fillOpacity: 0.5
                        }
                    }
                },
                onEachFeature: function (feature, layer) {
                    var popupContent = "Dataset: " + datasetName + "<br>";
                    if (feature.properties && feature.properties.NAMOBJ) {
                        popupContent += "Name: " + feature.properties.NAMOBJ;
                    }
                    layer.bindPopup(popupContent);
                }
            }).addTo(map);
        }

        // Memuat data GeoJSON dari file lokal
        fetch('assets/IRIGASI_POHUWATO.json')
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                addGeoJsonData(json, "Irigasi");
            })
            .catch(function(err) {
                console.error('Error memuat data GeoJSON: ' + err);
            });

        // Memuat data GeoJSON dari file lokal
        fetch('assets/POHUWATO.json')
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                addGeoJsonData(json, "Pohuwato");
            })
            .catch(function(err) {
                console.error('Error memuat data GeoJSON: ' + err);
            });
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins and DataTables) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</body>

</html>
