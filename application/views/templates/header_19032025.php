<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <link rel="icon" href="<?= base_url(); ?>assets/img/Logo.png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJX3QhqLMpG8r+KnujsX0LgpP8G+/7Vrn7BGj03d0x6D8swJOS2gMl/t6pH/" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


  <title>DPK BPJS Ketenagakerjaan</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark custom-navbar">
    <a class="navbar-brand image" href="<?= base_url(); ?>" style="margin-left: 10px;">
      <img src="<?= base_url(); ?>assets/img/DPK.png" style="width:120px; filter: brightness(0) invert(1);">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>">Tentang Kami</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url(); ?>berita_info/artikel">Artikel</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url(); ?>berita_info/berita">Berita</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url(); ?>berita_info/buletin">Buletin</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url(); ?>berita_info/galeri">Geleri</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url(); ?>formulir/formulir_">Formulir</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Peraturan</a>
          <div class="dropdown-menu" aria="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/UU Nomor 11 Tahun 1992.pdf" target="_blank">Undang-Undang No.11 Tahun 1992</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Undang-Undang No.4 Tahun 2023.pdf" target="_blank">Undang-Undang No.4 Tahun 2023</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/PP Nomor 76 Tahun 1992.pdf" target="_blank">Peraturan Pemerintah No.76 1992</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Pengesahan Peraturan Dana Pensiun No.55.pdf" target="_blank">Pengesahan Peraturan Dana Pensiun No.55</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Peraturan Dana Pensiun.pdf" target="_blank">Peraturan Dana Pensiun</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/PERDIR Tata Kelola DPK BPJSTK.pdf" target="_blank">PERDIR Tata Kelola DPK BPJSTK</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/PERDIR Arahan Investasi.pdf" target="_blank">PERDIR Arahan Investasi</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK Iuran & Manfaat.pdf" target="_blank">POJK Iuran & Manfaat</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK Pendanaan Dana Pensiun.pdf" target="_blank">POJK Pendanaan Dana Pensiun</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK Tata Kelola Dana Pensiun.pdf" target="_blank">POJK Tata Kelola Dana Pensiun</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK Investasi Dana Pensiun.pdf" target="_blank">POJK Investasi Dana Pensiun</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/POJK 27 Tahun 2023 Penyelenggaraan Usaha Dana Pensiun.pdf" target="_blank">POJK 27 Tahun 2023 Penyelenggaraan Usaha Dana Pensiun</a>

          </div>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Laporan</a>
          <div class="dropdown-menu" aria="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url(); ?>laporan/kepesertaan">Laporan Kepesertaan</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>laporan/keuangan2020">Laporan Keuangan 2020</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>laporan/keuangan2021">Laporan Keuangan 2021</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>laporan/keuangan2022">Laporan Keuangan 2022</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>laporan/keuangan2022">Laporan Keuangan 2023</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Laporan-KAP.pdf" target="_blank">Opini Laporan Auditor Independen</a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?= base_url(); ?>assets/pdf/Laporan Hasil Pengawas.pdf" target="_blank">Laporan Hasil Pengawas Kepada Peserta</a>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url(); ?>kontak">Kontak Kami</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url(); ?>whistleblowing"><button style="border: none; border-radius: 10px; background:rgb(199, 44, 44); color: white;">Whistleblowing</button></a>
        </li>
      </div>
    </div>
  </nav>
  <!-- Close Navbar -->

  <br><br>
  <!-- <center>
      <div class="col-md-9 mt-4">
        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">
          <b style="color: red; font-family: Helvetica;">SUDAHKAH ANDA MENGISI DAFTAR ULANG TAHUN 2025 SEBAGAI PEMUTAHIRAN DATA DAN PEMBAYARAN KEMBALI MANFAAT PENSIUN ANDA</b>
        </marquee>
      </div>
    </center> -->