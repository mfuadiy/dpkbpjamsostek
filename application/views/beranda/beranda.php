  <!-- Carousel -->
  <style>
    /* Styling Section */
    .visi-misi-section {
      background-color: #f8f9fa;
      padding: 60px 20px;
    }

    .visi-misi-container {
      margin: auto;
      background: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .title {
      color: #2124b1;
      font-weight: bold;
    }

    .visi-text {
      margin-top: 10px;
      text-align: justify;
    }

    .misi-list {
      list-style: none;
      text-align: justify;
      padding: 0;
      margin-top: 10px;
    }

    .misi-list li {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 12px;
    }

    .card-custom {
      background: #0e8744;
      color: #fff;
      border-radius: 15px;
      padding: 20px 18px 18px 18px;
      margin-bottom: 18px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.10);
      transition: box-shadow 0.2s;
      border: none;
    }

    .card-custom:hover {
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
    }

    .card-custom .header-row {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .card-custom .badge {
      background: #00008A;
      color: #ffffffff;
      font-size: 0.7rem;
      border-radius: 50%;
      padding: 10px;
      margin-right: 12px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .card-custom h5 {
      font-size: 1.1rem;
      font-weight: 600;
      margin: 0;
      letter-spacing: 0.5px;
    }

    .info-box {
      background: #ffc107;
      border-radius: 8px;
      padding: 10px 8px;
      text-align: center;
      margin-bottom: 8px;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
      min-width: 90px;
    }

    .info-box h6 {
      font-size: 0.92rem;
      margin: 0 0 2px 0;
      font-weight: 500;
      color: #00008A;
      letter-spacing: 0.2px;
    }

    .info-box p {
      font-size: 1.13rem;
      margin: 0;
      font-weight: bold;
      color: #00008A;
      letter-spacing: 0.5px;
    }

    @media (max-width: 768px) {
      .card-custom {
        padding: 14px 8px;
      }

      .info-box {
        min-width: 70px;
        padding: 8px 4px;
      }

    }
  </style>

  <div class="wrapper">

    <div id="carouselExampleIndicators" class="carousel slide full-screen-carousel" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <?php foreach ($carousel as $i => $slide): ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>"
            class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>"
            aria-label="Slide <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
      </div>

      <div class="carousel-inner">
        <?php foreach ($carousel as $i => $slide): ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <img src="<?= base_url('assets/img/slide/' . $slide->gambar) ?>" class="d-block w-100" alt="<?= $slide->judul ?>" loading="eager">
            <div class="carousel-caption d-none d-md-block">
              <!-- <p><?= $slide->judul ?></p>
              <p><?= $slide->deskripsi ?></p> -->
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="fas fa-angle-left fa-3x" style="color: gray;" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="fas fa-angle-right fa-3x" style="color: gray;" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Button Link -->
    <section class="link" id="link" style="padding-top: 1.2%; padding-bottom: 2%;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row justify-content-center">
              <div class="col-sm-auto d-flex justify-content-center">
                <a href="<?= base_url(); ?>datul">
                  <button class="tombol tombol1" title="Isi form NIK dan NPWP">Data Ulang</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Close Button Link -->

    <!-- Tentang Kami -->
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-lg-3 mb-3">

          <div class="card bg-transparent m-lg-2 wow fadeInUp" style="border: none; width: 100%;" data-wow-delay="0.1s">
            <div class="card">
              <h3 class="text-center mt-2" data-wow-delay="0.1s">Komposisi Peserta</h3>
              <div class="card-body">
                <div class="chart-pie pt-4">
                  <canvas id="myPieChart" width="400"></canvas>
                </div>
                <div class="container mt-4">

                  <!-- Peserta Aktif -->
                  <div class="card-custom mb-3">
                    <div class="header-row">
                      <span class="badge"><i class="fas fa-user-tie"></i></span>
                      <div style="display: flex; justify-content: space-between; width: 100%;">
                        <span>Peserta Aktif</span>
                        <span><b>1.595</b></span>
                      </div>
                    </div>
                    <div class="row g-2">
                      <div class="col-6">
                        <div class="info-box">
                          <h6>Aktif</h6>
                          <p>1.598</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="info-box">
                          <h6>Cuti DLT</h6>
                          <p>6</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Peserta Pasif -->
                  <div class="card-custom mb-3">
                    <div class="header-row">
                      <span class="badge"><i class="fas fa-user-alt"></i></span>
                      <div style="display: flex; justify-content: space-between; width: 100%;">
                        <span>Pensiunan</span>
                        <span> <b>2.176</b></span>
                      </div>
                    </div>
                    <div class="row g-2">
                      <div class="col-6">
                        <div class="info-box">
                          <h6>Pensiunan</h6>
                          <p>1.576</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="info-box">
                          <h6>Janda/Duda</h6>
                          <p>484</p>
                        </div>
                      </div>
                    </div>
                    <div class="row g-2">
                      <div class="col-6">
                        <div class="info-box">
                          <h6>Anak</h6>
                          <p>23</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="info-box">
                          <h6>Tunda</h6>
                          <p>93</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <hr>
                <label style="color: red;">Data Per-Juni 2025</label>
              </div>
            </div>
          </div>

          <br>
          <div class="card bg-transparent m-lg-2 wow fadeInUp" style="border: none; width: 100%;" data-wow-delay="0.1s">
            <div class="card">
              <h3 class="text-center mt-2" data-wow-delay="0.1s">SIMULASI PENSIUN</h3>
              <div class="card-body">
                <?php

                $tgl_lhr        = @$_POST['tgl_lhr'];
                $tgl_kerja      = new DateTime(@$_POST['tgl_kerja']);
                $mk_th          = @$_POST['mk_th'];
                $mk_bln         = @$_POST['mk_bln'];
                $phdp           = @$_POST['phdp'];
                $tahun_pensiun  = date('Y', strtotime('+57 year', strtotime($tgl_lhr)));

                $usia_pensiun   = date('Y/m/d', strtotime('+57 year', strtotime($tgl_lhr)));

                $up             = new DateTime($usia_pensiun);
                $durasi_kerja   = date_diff($tgl_kerja, $up);

                $thn            = $durasi_kerja->y;
                $bln            = round(($durasi_kerja->m / 12), 2);
                $lama_kerja     = $thn + $bln;

                $mp             = $lama_kerja * $phdp * 0.025;

                ?>

                <form method="post" action="">
                  <div class="form-group row">
                    <label for="inputEmail3">Tanggal Lahir</label>
                    <input type="date" class="form-control" style="margin-left: 3%; width:93%;" name="tgl_lhr" id="tgl_lhr" value="<?php if (isset($_POST['hitung'])) {
                                                                                                                                      echo @$_POST['tgl_lhr'];
                                                                                                                                    } else {
                                                                                                                                      echo "";
                                                                                                                                    } ?>">
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3">Tanggal Mulai Bekerja</label>
                    <input type="date" class="form-control" style="margin-left: 3%; width:93%;" name="tgl_kerja" id="tgl_kerja" value="<?php if (isset($_POST['hitung'])) {
                                                                                                                                          echo @$_POST['tgl_kerja'];
                                                                                                                                        } else {
                                                                                                                                          echo "";
                                                                                                                                        } ?>">
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3">Masa Kerja Diakui</label>
                    <div class="row">
                      <div class="col-sm-6">
                        <label for="">Tahun</label>
                      </div>
                      <div class="col-sm-6">
                        <label for="">Bulan</label>
                      </div>

                      <div class="col-sm-6">
                        <input type="number" class="form-control" style="width:93%;" name="mk_th" id="mk_th" value="<?php if (isset($_POST['hitung'])) {
                                                                                                                      echo @$_POST['mk_th'];
                                                                                                                    } else {
                                                                                                                      echo "0";
                                                                                                                    } ?>" placeholder="Tahun">
                      </div>
                      <div class="col-sm-6">
                        <input type="number" class="form-control" style="width:93%;" name="mk_bln" id="mk_bln" value="<?php if (isset($_POST['hitung'])) {
                                                                                                                        echo @$_POST['mk_bln'];
                                                                                                                      } else {
                                                                                                                        echo "0";
                                                                                                                      } ?>" placeholder="Bulan">
                      </div>

                    </div>


                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3">PhDP</label>
                    <input type="text" class="form-control" style="margin-left: 3%; width:93%;" name="phdp" id="phdp" value="<?php if (isset($_POST['hitung'])) {
                                                                                                                                echo @$_POST['phdp'];
                                                                                                                              } else {
                                                                                                                                echo "0";
                                                                                                                              } ?>">
                  </div>

                  <button type="button" onclick="proyeksi()" class="btn btn-success mt-2 mb-2" id="hitung" name="hitung">Hitung</button>
                </form>
                <button type="button" onclick="reset()" class="btn btn-warning" id="reset" name="reset">Reset</button>

                <table>
                  <tr>
                    <td>
                      Tahun Pensiun
                    </td>
                    <td>
                      :
                    </td>
                    <td id="th_pensiun">
                      <?php if (isset($_POST['hitung'])) {
                        echo $tahun_pensiun;
                      } else {
                        echo "";
                      } ?>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      Lama Bekerja
                    </td>
                    <td>
                      :
                    </td>
                    <td id="lm_kerja">
                      <?php if (isset($_POST['hitung'])) {
                        echo $lama_kerja . " Tahun";
                      } else {
                        echo "";
                      } ?>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      Manfaat Pensiun
                    </td>
                    <td>
                      :
                    </td>
                    <td id="mp">
                      <?php if (isset($_POST['hitung'])) {
                        echo $mp;
                      } else {
                        echo "";
                      } ?>
                    </td>
                  </tr>
                </table>
                <hr>
                <label style="color: red;">Perhitungan dengan asumsi usia pensiun 57 tahun dan pensiun normal</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-9">
          <div id="tentang-kami" class="container-xxl mb-3">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
              <h2>TENTANG KAMI</h2>
            </div>
            <p style="text-align: justify; margin-top:-4vh;">
              Dana Pensiun Karyawan BPJS Ketenagakerjaan disingkat DPK BPJSTK, sebelumnya bernama Yayasan Dana Pensiun Pegawai Perum Astek (YDP Astek), didirikan berdasarkan Akta Notaris Soetomo Ramelan, SH No. 6 tanggal 3 Desember 1983, bergerak dalam bidang pelayanan program pensiun bagi Karyawan Perum Astek.
              <br><br>
              Sesuai Undang-Undang No. 11 Tahun 1992 tentang Dana Pensiun, merubah semua bentuk Badan Hukum dari Yayasan Dana Pensiun menjadi Dana Pensiun, termasuk Yayasan Dana Pensiun Karyawan Perum Astek menjadi Dana Pensiun Karyawan Astek dan perubahan-perubahannya sehingga sekarang menjadi Dana Pensiun Karyawan BPJS Ketenagakerjaan dengan Program Pensiun Manfaat Pasti, sesuai PERDIR/29/122019 tanggal 16 Desember 2019 dan mendapat Pengesahan dari Otoritas Jasa Keuangan (OJK) Nomor : KEP-55/NB.1/2020 tanggal 28 Mei 2020.
            </p><br>
          </div>

          <div id="pengurus" class="container-xxl mb-3">
            <div class="container px-lg-5">
              <div class="section-title position-relative text-center mb-2 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mt-2">PENGURUS DPK BPJS KETENAGAKERJAAN</h2>
              </div>
              <div class="row g-2">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="max-width:290px; margin-left:auto; margin-right:auto;">
                  <div class="team-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="max-width: 75px;">
                        <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                      </div>
                      <img class="img-fluid rounded w-100" src="assets/img/pengurus/dirut.png" alt="">
                    </div>
                    <div class="px-4 py-3">
                      <h6 class="fw-bold m-0">Cahyaning Indriasari</h6>
                      <small>Direktur Utama</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="max-width:290px; margin-left:auto; margin-right:auto;">
                  <div class="team-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="max-width: 75px;">
                        <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                      </div>
                      <img class="img-fluid rounded w-100" src="assets/img/pengurus/direktur.png" alt="">
                    </div>
                    <div class="px-4 py-3">
                      <h6 class="fw-bold m-0">Ahmad Sulintang</h6>
                      <small>Direktur</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="dewan-pengawas" class="container-xxl mt-5 mb-3">
            <div class="container px-lg-5">
              <div class="section-title position-relative text-center mb-2 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mt-2">DEWAN PENGAWAS DPK BPJS KETENAGAKERJAAN</h2>
              </div>
              <div class="row g-2">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="max-width:290px; margin-left:auto; margin-right:auto;">
                </div>
              </div>

              <div class="table-responsive wow fadeInUp" data-wow-delay="0.1s">
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th style="background-color: #2124b1; color:white;">No</th>
                      <th style="background-color: #2124b1; color:white;">Nama</th>
                      <th style="background-color: #2124b1; color:white;">Jabatan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Yasaruddin</td>
                      <td>Ketua Dewan Pengawas</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Ahmad Edi Komaruddin</td>
                      <td>Anggota Perwakilan Peserta Aktif/SP</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Tjarda Muchtar</td>
                      <td>Anggota Perwakilan Peserta Pensiun</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Zulfahri Sibarani</td>
                      <td>Anggota Perwakilan Pemberi Kerja</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>

          <div id="visi-misi" class="container-xxl mt-4 mb-3">
            <div class="container px-lg-5">
              <div class="section-title position-relative text-center mb-2 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h2>VISI MISI</h2>
              </div>

              <div class="visi-misi-container wow fadeInUp" data-wow-delay="0.1s">
                <h2 class=" title">VISI</h2>
                <p class="visi-text">
                  Menjadi Dana Pensiun pemberi kerja yang utama dan terpercaya
                </p>

                <h2 class="title mt-4">MISI</h2>
                <ul class="misi-list">
                  <li><i class="fa-solid fa-square-check" style="color: #0e8744; margin-top: 5px;"></i> Menyelenggarakan sistem kepesertaan program pensiun secara rapi, tertib dan akurat.</li>
                  <li><i class="fa-solid fa-square-check" style="color: #0e8744; margin-top: 5px;"></i> Menyelenggarakan sistem penerimaan iuran dan pembayaran manfaat pensiun secara tertib, tepat waktu, dan tepat sasaran.</li>
                  <li><i class="fa-solid fa-square-check" style="color: #0e8744; margin-top: 5px;"></i> Mengelola kekayaan dana pensiun secara efisien dengan hasil yang optimal dan aman. </li>
                  <li><i class="fa-solid fa-square-check" style="color: #0e8744; margin-top: 5px;"></i> Meningkatkan budaya kerja melalui peningkatan kualitas SDM dan penerapan tata kelola yang baik. </li>
                </ul>
              </div>

            </div>
          </div>

          <div class="container-xxl mt-4">
            <div class="container px-lg-5">
              <div class="section-title position-relative text-center mb-2 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h2>Link Terkait</h2>
              </div>
              <div class="container-xxl bg-success testimonial wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-4 px-lg-5 mt-2">
                  <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item rounded text-white p-4" style="background-color: #00008A;">
                      <a href="https://www.bpjsketenagakerjaan.go.id/" target="_blank">
                        <div class="d-flex align-items-center">
                          <img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/link/BPJS-Ketenagakerjaan.jpg" style="width: 50px; height: 50px;">
                          <div class="ps-3">
                            <h6 class="text-white mb-1">BPJS Ketenagakerjaan</h6>
                            <small>Pendiri</small>
                          </div>
                        </div>
                      </a>
                      <!-- <p>BPJS Ketenagakerjaan merupakan Pendiri dari DPK BPJS Ketenagakerjaan.</p> -->
                    </div>

                    <div class="testimonial-item rounded text-white p-4" style="background-color: #00008A;">
                      <a href="https://nayakaerahusada.com/" target="_blank">
                        <div class="d-flex align-items-center">
                          <img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/link/nayaka.jpg" style="width: 50px; height: 50px;">
                          <div class="ps-3">
                            <h6 class="text-white mb-1">PT. Nayaka Era Husada</h6>
                            <small>Anak Perusahaan</small>
                          </div>
                        </div>
                      </a>
                      <!-- <p>Bergerak di bidang jaminan pemeliharaan kesehatan.</p> -->
                    </div>
                    <div class="testimonial-item rounded text-white p-4" style="background-color: #00008A;">
                      <a href="http://samudranayaka.co.id/" target="_blank">
                        <div class="d-flex align-items-center">
                          <img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/link/sangu.png" style="max-width: 50px; height: 50px;">
                          <div class="ps-3">
                            <h6 class="text-white mb-1">PT. Samudranayaka Unggul</h6>
                            <small>Anak Perusahaan</small>
                          </div>
                        </div>
                      </a>
                      <!-- <p>PT. Samudranayaka Grahaunggul bergerak di bidang layanan manajemen.</p> -->
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

  <script type="text/javascript">
    var rupiah = document.getElementById('phdp');
    rupiah.addEventListener('keyup', function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value);
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }

      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
    }

    function reset() {
      document.getElementById("tgl_lhr").value = '';
      document.getElementById("tgl_kerja").value = '';
      document.getElementById("mk_th").value = '0';
      document.getElementById("mk_bln").value = '0';
      document.getElementById("phdp").value = '0';
      document.getElementById("th_pensiun").innerHTML = "";
      document.getElementById("lm_kerja").innerHTML = "";
      document.getElementById("mp").innerHTML = "";
    }

    const rp = (number) => {
      return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR"
      }).format(number);
    }

    function proyeksi() {
      var tgl_lhr = new Date(document.getElementById("tgl_lhr").value);
      var tgl_kerja = new Date(document.getElementById("tgl_kerja").value);
      var mk_th = Number(document.getElementById("mk_th").value);
      var mk_bln = Number(document.getElementById("mk_bln").value);
      var phdp = document.getElementById("phdp").value.replace(/[^\w\s]/gi, '');

      var tmbh_57 = tgl_lhr.getFullYear() + 57;
      var pensiun = new Date(tmbh_57, tgl_lhr.getMonth(), tgl_lhr.getDate());
      var durasi_thn = pensiun.getFullYear() - tgl_kerja.getFullYear();
      var durasi_bln = ((pensiun.getMonth() - tgl_kerja.getMonth()) + (12 * durasi_thn) + mk_bln + (mk_th * 12)) / 12;
      var jml_thn_bln = parseFloat(durasi_bln.toFixed(2));
      var max = phdp * 0.8;
      var mp = phdp * jml_thn_bln * 0.025;

      if (mp > max) {
        mp = max;
      } else {
        mp = mp;
      }

      if (tgl_lhr == "Invalid Date" && tgl_kerja == "Invalid Date" && phdp == "0") {
        alert("Tanggal Lahir, Tanggal Mulai Bekerja, dan PhDP Tidak Boleh Kosong!");
      } else {
        document.getElementById("th_pensiun").innerHTML = "<b>" + tmbh_57 + "</b>";
        document.getElementById("lm_kerja").innerHTML = "<b>" + jml_thn_bln + " Tahun </b>";
        document.getElementById("mp").innerHTML = "<b>" + rp(mp) + "</b>";
      }




      console.log(tgl_kerja, tgl_lhr, phdp);

    }
  </script>
  <!-- Close Visi & Misi -->