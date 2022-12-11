<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title><?= $title; ?></title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css_admin/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }

        #map { 
            height: 180px; 
        }
    </style>

</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-virus'></i>
            <span class="logo_name">MALARIA</span>
        </div>
        <ul class="nav-links">
            <li>
                <div class="iocn-link">
                    <a href="<?= base_url("administrator/dashboard/index"); ?>" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                        <i class='bx bx-grid'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?= base_url("administrator/data/index"); ?>">
                        <i class='bx bxs-book-alt'></i>
                        <span class="link_name">Informasi</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Informasi</a></li>
                    <li><a href="<?= base_url("administrator/data/puskesmas"); ?>">Data Puskesmas</a></li>
                    <li><a href="<?= base_url("administrator/data/index"); ?>">Data Malaria</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?= base_url("administrator/proses/index"); ?>">
                        <i class='bx bx-book-reader'></i>
                        <span class="link_name">Hasil Perhitungan</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?= base_url("administrator/dashboard/index"); ?>">
                        <i class='bx bx-cog'></i>
                        <span class="link_name">CMS</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">CMS</a></li>
                    <li><a href="<?= base_url("administrator/cms/index"); ?>">Background</a></li>
                    <li><a href="<?= base_url("administrator/cms/sosmed"); ?>">Social Media</a></li>
                    <li><a href="<?= base_url("administrator/cms/about"); ?>">About</a></li>
                    <li><a href="<?= base_url("administrator/cms/footer"); ?>">Footer</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <i class='bx bx-user-pin'></i>
                    </div>
                    <div class="name-job">
                        <div class="profile_name"></div>
                        <div class="job">
                            <font color='#ffffff'>Log Out</font>
                        </div>
                    </div>
                    <a href="<?= base_url("auth/logout"); ?>"><i class='bx bx-log-out'></i></a>
                </div>
            </li>
            
        </ul>
    </div>

    <section class="section-p1">
        <div class="preloader">
            <div class="loading">
                <img src="<?= base_url('assets/image/loading.gif'); ?>" width="120">
                <p><strong>Harap Tunggu</strong></p>
            </div>
        </div>
    </section>