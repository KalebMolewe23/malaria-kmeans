<html>

<head>

    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css_admin/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-user-circle'></i>
            <span class="logo_name">VAKSINZONE</span>
        </div>
        <ul class="nav-links">
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-map-alt'></i>
                        <span class="link_name">Informasi</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Informasi</a></li>
                    <li><a href="<?= base_url("data/index"); ?>">Master Daerah</a></li>
                    <li><a href="<?= base_url("data/datavaksin"); ?>">Data</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-map-alt'></i>
                        <span class="link_name">K-Means</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">K-Means</a></li>
                    <li><a href="<?= base_url("kmeans/index"); ?>">Perhitungan</a></li>
                    <li><a href="<?= base_url("dbi_proccess/index"); ?>">Proses DBI</a></li>
                    <li><a href="<?= base_url("dbi/hasil_dbi"); ?>">Hasil DBI</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-cog'></i>
                        <span class="link_name">CMS</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">CMS</a></li>
                    <li><a href="<?= base_url("admin/logo"); ?>">Logo</a></li>
                    <li><a href="<?= base_url("admin/sosmed"); ?>">Social Media</a></li>
                    <li><a href="<?= base_url("admin/about"); ?>">About</a></li>
                    <li><a href="<?= base_url("admin/footer"); ?>">Footer</a></li>
                </ul>
            </li>
        </ul>
    </div>