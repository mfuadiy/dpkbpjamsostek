<style>
  .card {
    border-radius: 12px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
  }

  .card:hover {
    transform: scale(1.03);
  }

  .icon-container {
    font-size: 50px;
    color: #dc3545;
  }
</style>

<div class="wrapper">
  <div class="container mt-5">
    <h1 class="text-center fw-bold">Unduh Formulir</h1>
    <p class="text-center">Silakan download formulir sesuai dengan kebutuhan Anda</p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <!-- Daftar Formulir -->
      <?php
      $formulirs = [
        ["Formulir Peserta Anak Aktif", "Form-ANAK_AKTIF.pdf"],
        ["Formulir Peserta Anak Karyawan", "Form-ANAK_KARYAWAN.pdf"],
        ["Formulir Peserta Janda Duda Dari Pensiun", "Form-JANDA_DUDA_DARI_PENSIUNAN.pdf"],
        ["Formulir Peserta Janda Duda Karyawan Aktif", "Form-JANDA_DUDA_KARYAWAN_AKTIF.pdf"],
        ["Formulir Peserta Pengambilan Iuran Pensiun", "Form-PENGEMBALIAN_IURAN_PENSIUN.pdf"],
        ["Formulir Peserta Pensiun Anak", "Form-PENSIUN_ANAK.pdf"],
        ["Formulir Peserta Pensiun Cacat", "Form-PENSIUN_CACAT.pdf"],
        ["Formulir Peserta Pensiun Dipercepat", "Form-PENSIUN_DIPERCEPAT.pdf"],
        ["Formulir Peserta Pensiun Ditunda", "Form-PENSIUN_DITUNDA.pdf"],
        ["Formulir Peserta Pensiun Normal", "Form-PENSIUN_NORMAL.pdf"],
        ["Formulir Peserta Pensiun Sekaligus", "Form-PENSIUN_SEKALIGUS.pdf"],
        ["Formulir Penetapan Hak Pensiun Ditunda", "PENETAPAN_HAK_PENSIUN_DITUNDA.pdf"]
      ];
      foreach ($formulirs as $formulir):
      ?>
        <div class="col wow fadeInUp" data-wow-delay="0.3s">
          <div class="card h-100 p-3">
            <div class="text-center icon-container">
              <i class="fa-solid fa-file-pdf"></i>
            </div>
            <div class="card-body text-center">
              <h6 class="card-title"><?php echo $formulir[0]; ?></h6>
              <a href="<?= base_url(); ?>assets/pdf/<?php echo $formulir[1]; ?>" class="btn btn-danger btn-sm mt-2" download>
                <i class="fa fa-download"></i> Download
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>