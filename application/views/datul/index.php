<style>
    .form-container {
        max-width: 900px;
        margin: 3vh auto;
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

    .preview-container {
        margin-top: 20px;
        text-align: center;
    }

    .preview-image {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .required-label::after {
        content: " *";
        color: red;
    }

    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        align-items: center;
        justify-content: center;
        visibility: visible;
        opacity: 1;
        transition: opacity 0.3s ease-in-out;
    }

    .popup {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        max-width: 400px;
        text-align: center;
        position: relative;
    }

    .popup h2 {
        margin-top: 0;
        color: rgb(255, 0, 0);
    }

    .popup p {
        font-size: 16px;
        color: #555;
    }

    .popup button {
        background-color: rgb(24, 156, 101);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s;
    }

    .popup button:hover {
        background-color: rgb(20, 130, 85);
    }
</style>

<div class="wrapper">
    <div class="form-container" style="font-size:16px;">
        <h3 style="text-align: center; color: white; background-color:rgb(24, 156, 101); padding: 15px; border-radius: 8px;">Form Data Ulang Pensiunan DPK BPJS Ketenagakerjaan</h3> <br>
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('error'); ?>
        <div id="alertContainer"></div>
        <a href="<?= base_url(); ?>datul/inquiry" style="text-align: center; color: white; background-color:rgb(64, 43, 187); padding: 15px; border-radius: 8px;">Cek Data Masuk Pengkinian Data</a> <br> <br>
        <div id="firstForm" class="firstForm">
            <div class="mb-3">
                <label for="npk" class="form-label">NPK</label>
                <input type="number" class="form-control" id="npk" name="npk" pattern="\d{8,10}" required placeholder="Masukkan NPK Sesuai SK">
                <?= form_error('npk', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button id='btnCekNPK' class="btn btn-custom btn-cek-npk w-100"><span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span>
                Selanjutnya</button>
        </div>

        <div class="popup-overlay" id="popupOverlay" name="popupOverlay">
            <div class="popup">
                <h2>Peringatan!</h2>
                <p>Data ulang 2025 sudah ditutup. Silakan hubungi petugas untuk melakukan data ulang.</p>
                <button onclick="closePopup()">OK</button>
            </div>
        </div>

        <div id="nextForm" style="display: none;" class="nextForm">
            <form method="post" action="<?= base_url(); ?>datul/simpan_data" enctype="multipart/form-data">
                <!-- Input yang tidak required (tanpa tanda bintang) -->
                <div class="mb-3">
                    <label for="npk_" class="form-label">NPK</label>
                    <input type="text" class="form-control" id="npk_" name="npk_" readonly>
                </div>
                <div class="mb-3">
                    <label for="nopen" class="form-label">Nomor Pensiun</label>
                    <input type="text" class="form-control" id="nopen" name="nopen" readonly>
                </div>

                <!-- Input yang required (dengan tanda bintang) -->
                <div class="mb-3">
                    <label for="nama" class="form-label required-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan Nama">
                </div>

                <div class="mb-3">
                    <label for="tglhr" class="form-label required-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tglhr" name="tglhr" required>
                </div>

                <div class="mb-3">
                    <label for="stppp" class="form-label">Jenis Pensiun</label>
                    <input type="text" class="form-control" id="stppp" name="stppp" readonly>
                    <input type="text" class="form-control" id="stppp_" name="stppp_" hidden>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label required-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Masukkan Alamat">
                </div>
                <div class="mb-3">
                    <label for="rtrw" class="form-label required-label">RW/RT</label>
                    <input type="text" class="form-control" id="rtrw" name="rtrw" required placeholder="Masukkan RT/RW">
                </div>
                <div class="mb-3">
                    <label for="kelurahan" class="form-label required-label">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" required placeholder="Masukkan Kelurahan">
                </div>
                <div class="mb-3">
                    <label for="kecamatan" class="form-label required-label">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" required placeholder="Masukkan Kecamatan">
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label required-label">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" required placeholder="Masukkan Kota">
                </div>
                <div class="mb-3">
                    <label for="provinsi" class="form-label required-label">Provinsi</label>
                    <select class="form-control" id="provinsi" name="provinsi" required style="height: 40px;">
                        <option value="" disabled selected>Pilih Provinsi</option>
                        <?php foreach ($prov as $p): ?>
                            <option value="<?= $p['kode']; ?>"><?= $p['prov']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kodepos" class="form-label">Kode Pos</label>
                    <input type="number" class="form-control" id="kodepos" name="kodepos" pattern="\d*" placeholder="Masukkan Kodepos">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label required-label">Nomor HP</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" required pattern="\d*" placeholder="Masukkan Nomor HP">
                </div>
                <div class="mb-3">
                    <label for="no_hplain" class="form-label required-label">Nomor HP Suami/Istri/Anak</label>
                    <input type="number" class="form-control" id="no_hplain" name="no_hplain" required pattern="\d*" placeholder="Masukkan Nomor HP Suami/Istri/Anak">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label required-label">NIK</label>
                    <input type="number" class="form-control" id="nik" name="nik" pattern="\d{16}" required placeholder="Masukkan NIK">
                </div>

                <!-- File Input (required) -->
                <div class="mb-3">
                    <label for="ktp" class="form-label required-label">Foto KTP</label>
                    <div class="mb-3">
                        <input type="file" id="ktp" name="ktp" accept="image/*" capture="environment" class="form-control" required>
                    </div>
                    <div class="preview-container" id="previewContainer">
                        <img src="" alt="Preview Foto" class="preview-image" id="previewImageKtp" style="display: none;">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kk" class="form-label required-label">Foto Kartu Keluarga</label>
                    <div class="mb-3">
                        <input type="file" id="kk" name="kk" accept="image/*" capture="environment" class="form-control" required>
                    </div>
                    <div class="preview-container" id="previewContainer">
                        <img src="" alt="Preview Foto" class="preview-image" id="previewImageKk" style="display: none;">
                    </div>
                </div>

                <!-- File Input (tidak required) -->
                <div class="mb-3">
                    <label for="skbm" class="form-label">Surat Keterangan Belum Menikah Kembali (untuk Pensiun Janda/Duda)</label>
                    <div class="mb-3">
                        <input type="file" id="skbm" name="skbm" accept="image/*" capture="environment" class="form-control">
                    </div>
                    <div class="preview-container" id="previewContainer">
                        <img src="" alt="Preview Foto" class="preview-image" id="previewImageSkbm" style="display: none;">
                    </div>
                </div>

                <!-- Tombol Submit dan Kembali -->
                <div class="d-flex gap-2">
                    <button type="button" id="kembali" class="btn btn-secondary w-50">Kembali</button>
                    <button type="submit" id="btnSimpan" class="btn btn-custom w-50"><span id="spinnerSimpan" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span>
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function cekTanggal() {
        const tanggalTarget = new Date(2026, 3, 1, 0, 1, 0);
        const sekarang = new Date();

        if (sekarang >= tanggalTarget) {
            console.log("Tanggal telah tercapai atau terlewati.");
            tutupDatul();
        }
    }

    function tutupDatul() {
        document.getElementById("popupOverlay").style.display = "flex";
        document.getElementById("npk").setAttribute("disabled", true);
        document.getElementById("btnCekNPK").setAttribute("disabled", true);
    }

    // Panggil fungsi untuk mengecek tanggal
    cekTanggal();

    function closePopup() {
        document.getElementById("popupOverlay").style.visibility = "hidden";
        document.getElementById("popupOverlay").style.opacity = "0";
        document.getElementById("npk").setAttribute("disabled", true);
        document.getElementById("btnCekNPK").setAttribute("disabled", true);
    }

    document.getElementById("btnCekNPK").addEventListener("click",
        function() {
            let npkInput = document.getElementById("npk").value;
            let btnCek = document.getElementById("btnCekNPK");
            let spinner = document.getElementById("spinner");

            if (npkInput.length < 8 || npkInput.length > 10) {
                showAlert("NPK harus terdiri dari 9-10 digit.", "warning");
                return;
            }
            // Tampilkan spinner dan disable tombol
            spinner.style.display = "inline-block";
            btnCek.disabled = true;

            fetch("<?= base_url(); ?>datul/cek_npk", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: "npk=" + encodeURIComponent(npkInput),
                })
                .then(response => response.json())
                .then(result => {
                    if (result.status === "success") {
                        if (result.data_ulang) { // Jika NPK sudah pernah melakukan data ulang
                            showAlert("NPK ini sudah pernah melakukan data ulang. Silakan cek kembali atau hubungi petugas melalui pesan Whatsapp dengan cara klik icon Whatsapp yang ada di kanan bawah layar anda.", "danger");
                        } else {
                            document.getElementById("firstForm").setAttribute("hidden", true);
                            document.getElementById("nextForm").style.display = "block";
                            document.getElementById("npk_").value = result.data.npk;
                            document.getElementById("nopen").value = result.data.nopen;
                            document.getElementById("nama").value = result.data.nama;
                            document.getElementById("tglhr").value = result.data.tglhr;
                            document.getElementById("stppp_").value = result.data.stppp;
                            document.getElementById("alamat").value = result.data.alamat;
                            document.getElementById("rtrw").value = result.data.rt_rw;
                            document.getElementById("kelurahan").value = result.data.kelurahan;
                            document.getElementById("kecamatan").value = result.data.kecamatan;
                            document.getElementById("kota").value = result.data.kota;
                            document.getElementById("kodepos").value = result.data.kodepos;
                            document.getElementById("no_hp").value = result.data.hp;
                            document.getElementById("nik").value = result.data.nik;

                            let stpppValue = result.data.stppp;

                            // Ambil teks jenis_pensiun berdasarkan kode stppp
                            fetch("<?= base_url(); ?>datul/get_jenis_pensiun", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/x-www-form-urlencoded",
                                    },
                                    body: "stppp=" + encodeURIComponent(stpppValue),
                                })
                                .then(response => response.json())
                                .then(data => {
                                    document.getElementById("stppp").value = data.jp.desk1 + " - " + data.jp.desk2;
                                })
                                .catch(error => console.error("Terjadi kesalahan saat mengambil jenis pensiun:", error));
                        }
                    } else {
                        showAlert("NPK tidak ditemukan. Silakan periksa kembali atau menghubungi petugas.", "danger");
                    }
                })
                .catch(error => console.error("Terjadi kesalahan:", error))
                .finally(() => {
                    // Sembunyikan spinner dan aktifkan tombol kembali
                    spinner.style.display = "none";
                    btnCek.disabled = false;
                });
        }

    );

    document.addEventListener("DOMContentLoaded", function() {
        let btnSimpan = document.getElementById("btnSimpan");

        btnSimpan.addEventListener("click", function(event) {
            event.preventDefault(); // Mencegah pengiriman form langsung

            let form = document.querySelector("form");
            let requiredInputs = form.querySelectorAll("[required]");
            let isRequiredValid = true;
            let firstInvalidInput = null;
            let nikInput = document.getElementById("nik"); // Ambil elemen input NIK
            let isNikValid = true;

            // 1. Cek apakah ada input required yang belum diisi
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    isRequiredValid = false;
                    input.classList.add("is-invalid"); // Tandai input yang kosong
                    if (!firstInvalidInput) {
                        firstInvalidInput = input; // Simpan input pertama yang kosong
                    }
                } else {
                    input.classList.remove("is-invalid"); // Hapus tanda error jika sudah diisi
                }
            });

            // Jika ada input yang required tapi belum diisi, munculkan peringatan dan fokuskan ke input pertama yang tidak valid
            if (!isRequiredValid) {
                Swal.fire({
                    title: "Peringatan",
                    text: "Harap lengkapi semua data yang wajib diisi sebelum menyimpan.",
                    icon: "error",
                    confirmButtonText: "OK"
                }).then(() => {
                    if (firstInvalidInput) {
                        firstInvalidInput.focus(); // Fokus langsung ke input pertama yang kosong
                    }
                });
                return;
            }

            // 2. Validasi khusus untuk NIK (harus terdiri dari 16 angka)
            if (nikInput && !/^\d{16}$/.test(nikInput.value)) {
                isNikValid = false;
                nikInput.classList.add("is-invalid");

                Swal.fire({
                    title: "Peringatan",
                    text: "NIK harus terdiri dari 16 angka.",
                    icon: "error",
                    confirmButtonText: "OK"
                }).then(() => {
                    nikInput.focus(); // Fokus langsung ke input NIK jika tidak valid
                });

                return;
            } else {
                nikInput.classList.remove("is-invalid");
            }

            // 3. Jika semua validasi lolos, tampilkan popup konfirmasi
            Swal.fire({
                title: "Konfirmasi Data",
                html: `
            <div style="text-align: left;">
                <div style="border: 1px solid #28a745; padding: 15px; border-radius: 8px; background-color: #e9f7ef; margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                    <input type="checkbox" id="cekDataBenar" class="swal2-checkbox" style="margin-top: 4px;">
                    <label for="cekDataBenar" style="text-align: justify;">Saya menyatakan bahwa data yang dimasukkan adalah benar dan dapat dipertanggungjawabkan.</label>
                </div>

                <div style="border: 1px solid #28a745; padding: 15px; border-radius: 8px; background-color: #e9f7ef; margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                    <input type="checkbox" id="cekSetuju" class="swal2-checkbox" style="margin-top: 4px;">
                    <label for="cekSetuju" style="text-align: justify;">Saya menyetujui untuk menyerahkan data kepada DPK BPJS Ketenagakerjaan dan memberikan hak kepada DPK BPJS Ketenagakerjaan untuk mengelola data tersebut sesuai kepentingan dengan tetap mengacu pada peraturan perundang-undangan yang berlaku.</label>
                </div>
            </div>
        `,
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Setuju & Simpan",
                cancelButtonText: "Batal",
                reverseButtons: true,
                didOpen: () => {
                    let cekDataBenar = document.getElementById("cekDataBenar");
                    let cekSetuju = document.getElementById("cekSetuju");
                    let confirmButton = Swal.getConfirmButton();

                    confirmButton.disabled = true; // Tombol dinonaktifkan awalnya

                    function checkCheckboxes() {
                        confirmButton.disabled = !(cekDataBenar.checked && cekSetuju.checked);
                    }

                    cekDataBenar.addEventListener("change", checkCheckboxes);
                    cekSetuju.addEventListener("change", checkCheckboxes);
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    let spinner = document.getElementById("spinnerSimpan");

                    // Tampilkan spinner dan nonaktifkan tombol
                    spinner.style.display = "inline-block";
                    btnSimpan.disabled = true;

                    // Kirim formulir setelah sedikit jeda
                    setTimeout(() => {
                        form.submit();
                    }, 500);
                }
            });
        });
    });

    document.getElementById("kembali").addEventListener("click", function() {
        document.getElementById("firstForm").removeAttribute("hidden");
        document.getElementById("nextForm").style.display = "none";
    });

    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#nextForm form');
        const requiredInputs = form.querySelectorAll('input[required], select[required]');

        form.addEventListener('submit', function(event) {
            let isValid = true;

            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                    const errorMessage = input.nextElementSibling;
                    if (errorMessage && errorMessage.classList.contains('text-danger')) {
                        errorMessage.classList.remove('d-none');
                    }
                } else {
                    input.classList.remove('is-invalid');
                    const errorMessage = input.nextElementSibling;
                    if (errorMessage && errorMessage.classList.contains('text-danger')) {
                        errorMessage.classList.add('d-none');
                    }
                }
            });

            if (!isValid) {
                event.preventDefault();
                alert('Harap isi semua field yang wajib diisi.');
            }
        });

        // Optional: Remove invalid class when user starts typing
        requiredInputs.forEach(input => {
            input.addEventListener('input', function() {
                if (input.value.trim()) {
                    input.classList.remove('is-invalid');
                    const errorMessage = input.nextElementSibling;
                    if (errorMessage && errorMessage.classList.contains('text-danger')) {
                        errorMessage.classList.add('d-none');
                    }
                }
            });
        });
    });

    document.getElementById('ktp').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImage = document.getElementById('previewImageKtp');
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('kk').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImage = document.getElementById('previewImageKk');
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('skbm').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImage = document.getElementById('previewImageSkbm');
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('uploadForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Foto berhasil diupload!');
        // Anda bisa menambahkan kode untuk mengirim foto ke server di sini
    });

    function showAlert(message, type) {
        let alertContainer = document.getElementById("alertContainer");

        alertContainer.innerHTML = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>`;

        // Inisialisasi alert Bootstrap agar bisa di-dismiss
        let alertElement = document.querySelector('.alert');
        let bsAlert = new bootstrap.Alert(alertElement);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>