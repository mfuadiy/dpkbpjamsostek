<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/'); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJX3QhqLMpG8r+KnujsX0LgpP8G+/7Vrn7BGj03d0x6D8swJOS2gMl/t6pH/" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/'); ?>/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/'); ?>/img/logo/icon-dpk-bpjs-ketenagakerjaan.png" sizes="228x220">


    <title>DPK BPJAMSOSTEK</title>


    <style type="text/css">
        html,
        body {
            height: 100%;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .wrapper {
            display: flex;
            margin-top: 6vh;
            flex-direction: column;
            min-height: 78vh;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Harap Tunggu...</span>
            </div>
        </div>


        <nav class="navbar fixed-top navbar-expand-lg navbar-light custom-navbar px-4 px-lg-5 py-3 py-lg-0">
            <a class="navbar-brand image" href="<?= base_url(); ?>" style="margin-left: 10px;">
                <img src="<?= base_url(); ?>assets/img/DPK.png" style="width:120px; filter: brightness(0) invert(1);">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url(); ?>" id="navbarDropdown" role="button"
                            onclick="window.location.href='<?= base_url(); ?>';"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>#tentang-kami">Tentang Kami</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>#pengurus">Pengurus</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>#dewan-pengawas">Dewan Pengawas</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>#visi-misi">Visi Misi</a>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Media Baca
                        </a>
                        <div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>mediabaca/artikel">
                                Artikel
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>mediabaca/buletin">
                                Buletin
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>galeri/dpkj">
                                DPK BPJS Ketenagakerjaan
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>galeri/ppkj">
                                PPKJ
                            </a>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url(); ?>formulir/formulir_">Formulir</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Peraturan
                        </a>
                        <div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/UU Nomor 11 Tahun 1992.pdf" target="_blank">
                                UU No.11 Tahun 1992
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Undang-Undang No.4 Tahun 2023.pdf" target="_blank">
                                UU No.4 Tahun 2023
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/PP Nomor 76 Tahun 1992.pdf" target="_blank">
                                PP No.76 Tahun 1992
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Pengesahan Peraturan Dana Pensiun No.55.pdf" target="_blank">
                                Pengesahan Peraturan DPK No.55
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Peraturan Dana Pensiun.pdf" target="_blank">
                                Peraturan Dana Pensiun
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/PERDIR Tata Kelola DPK BPJSTK.pdf" target="_blank">
                                PERDIR Tata Kelola
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/PERDIR Arahan Investasi.pdf" target="_blank">
                                PERDIR Arahan Investasi
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK Iuran & Manfaat.pdf" target="_blank">
                                POJK Iuran & Manfaat
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK Pendanaan Dana Pensiun.pdf" target="_blank">
                                POJK Pendanaan Dana Pensiun
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK Tata Kelola Dana Pensiun.pdf" target="_blank">
                                POJK Tata Kelola Dana Pensiun
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK Investasi Dana Pensiun.pdf" target="_blank">
                                POJK Investasi Dana Pensiun
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK 27 Tahun 2023 Penyelenggaraan Usaha Dana Pensiun.pdf" target="_blank">
                                POJK 27/2023 Usaha Dana Pensiun
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Laporan</a>
                        <div class="dropdown-menu" aria="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>laporan/kepesertaan">Laporan Kepesertaan</a>

                            <a class="dropdown-item" href="<?= base_url(); ?>laporan/keuangan2021">Laporan Keuangan 2021</a>

                            <a class="dropdown-item" href="<?= base_url(); ?>laporan/keuangan2022">Laporan Keuangan 2022</a>

                            <a class="dropdown-item" href="<?= base_url(); ?>laporan/keuangan2023">Laporan Keuangan 2023</a>

                            <a class="dropdown-item" href="<?= base_url(); ?>laporan/keuangan2024">Laporan Keuangan 2024</a>

                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Laporan-KAP.pdf" target="_blank">Opini Laporan Auditor Independen</a>

                            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Laporan Hasil Pengawas.pdf" target="_blank">Laporan Hasil Pengawas Kepada Peserta</a>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url(); ?>kontak">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>faq">FAQ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url(); ?>whistleblowing"><button style="border: none; border-radius: 10px; background:rgb(199, 44, 44); color: white;">Whistleblowing</button></a>
                    </li>
                </div>

                <a href="https://www.kepesertaan.dpkbpjamsostek.com/" target="_blank" class="btn text-light rounded-pill py-2 px-4 ms-3" style="background-color: #00008A;"><i class="fa fa-user-circle me-2"></i>Login</a>
            </div>
        </nav>