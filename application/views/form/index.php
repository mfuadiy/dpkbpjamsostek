<style>
    .form-container {
        max-width: 900px;
        margin: 50px auto;
        padding: 30px;
        background-color: #e7f0e4;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
        background-color: #326398;
        color: white;
        border-radius: 5px;
    }

    .btn-custom:hover {
        background-color: #264a75;
        color: white;
    }

    .form-control {
        width: 50%;
        padding: 10px 5px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0;
        font-size: 14px;
        background-color: transparent;
        outline: none;
        transition: border-color 0.3s;
    }

    /* Media query untuk perangkat dengan lebar layar maksimal 768px (umumnya smartphone) */
    @media (max-width: 768px) {
        .form-control {
            width: 100%;
        }
    }

    .form-label {
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    .mb-3 {
        background-color: white;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 15px;
    }
</style>

<div class="form-container" style=" font-size:16px;">
    <h2 style="text-align: center; color: white; background-color:rgb(24, 156, 101); padding: 15px; border-radius: 8px;">Form NIK dan NPWP Pensiunan DPK BPJS Ketenagakerjaan</h2> <br>
    <a href="<?= base_url(); ?>form/inquiry_form" style="text-align: center; color: white; background-color:rgb(64, 43, 187); padding: 15px; border-radius: 8px;">Cek Data Masuk NIK dan NPWP</a> <br> <br>
    <?= $this->session->flashdata('message'); ?>
    <form method="post" action="<?= base_url(); ?>form/submit_form">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Penerima MP</label>
            <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan Nama Penerima MP Sesuai KTP">
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="npk" class="form-label">NPK / Nomor Pensiun</label>
            <input type="number" class="form-control" id="npk" name="npk" pattern="\d{9,10}" required placeholder="Masukkan NPK atau Nomor Pensiun, pilih salah satu">
            <?= form_error('npk', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="number" class="form-control" id="nik" name="nik" pattern="\d{16}" required placeholder="Masukkan NIK">
            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="npwp" class="form-label">NPWP</label>
            <input type="number" class="form-control" id="npwp" name="npwp" required placeholder="Masukkan NPWP, jika tidak ada isi dengan NIK">
            <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Masukkan Alamat">
            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="rtrw" class="form-label">RT/RW</label>
            <input type="text" class="form-control" id="rtrw" name="rtrw" required placeholder="Masukkan RT/RW">
            <?= form_error('rtrw', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required placeholder="Masukkan Kelurahan">
            <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required placeholder="Masukkan Kecamatan">
            <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota" required placeholder="Masukkan Kota">
            <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <select class="form-control" id="provinsi" name="provinsi" required style="height: 40px;">
                <option value="" disabled selected>Pilih Provinsi</option>
                <option value="Aceh">Aceh</option>
                <option value="Sumatera Utara">Sumatera Utara</option>
                <option value="Sumatera Barat">Sumatera Barat</option>
                <option value="Sumatera Selatan">Sumatera Selatan</option>
                <option value="Riau">Riau</option>
                <option value="Jambi">Jambi</option>
                <option value="Bengkulu">Bengkulu</option>
                <option value="Lampung">Lampung</option>
                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                <option value="Kepulauan Riau">Kepulauan Riau</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="DI Yogyakarta">DI Yogyakarta</option>
                <option value="Banten">Banten</option>
                <option value="Bali">Bali</option>
                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                <option value="Kalimantan Barat">Kalimantan Barat</option>
                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                <option value="Kalimantan Timur">Kalimantan Timur</option>
                <option value="Kalimantan Utara">Kalimantan Utara</option>
                <option value="Sulawesi Utara">Sulawesi Utara</option>
                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                <option value="Sulawesi Barat">Sulawesi Barat</option>
                <option value="Gorontalo">Gorontalo</option>
                <option value="Maluku">Maluku</option>
                <option value="Maluku Utara">Maluku Utara</option>
                <option value="Papua">Papua</option>
                <option value="Papua Barat">Papua Barat</option>
                <option value="Papua Tengah">Papua Tengah</option>
                <option value="Papua Pegunungan">Papua Pegunungan</option>
                <option value="Papua Selatan">Papua Selatan</option>
                <option value="Papua Barat Daya">Papua Barat Daya</option>
            </select>
        </div>

        <button type="submit" class="btn btn-custom w-100">Kirim</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Inisialisasi Select2 untuk dropdown
        $('#provinsi').select2({
            placeholder: "Pilih Provinsi", // Placeholder
            allowClear: true // Menambahkan opsi untuk menghapus pilihan
        });
    });
</script>