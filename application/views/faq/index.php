<style>
    .container-custom {
        max-width: 900px;
        margin: auto;
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .header-title {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    h4 {
        border-bottom: 3px solid #00008A;
        padding-bottom: 5px;
        margin-top: 25px;
        color: #2c3e50;
    }

    .faq-box {
        border: 1px solid #00008A;
        border-radius: 4px;
        margin-bottom: 15px;
        background: #f8faff;
        box-shadow: 0 2px 6px rgba(0, 123, 255, 0.05);
        transition: box-shadow 0.2s;
    }

    .faq-question-btn {
        display: flex;
        align-items: center;
        width: 100%;
        background: none;
        border: none;
        outline: none;
        padding: 18px 20px;
        font-size: 1rem;
        font-weight: bold;
        color: #00008A;
        cursor: pointer;
        text-align: left;
        border-radius: 6px;
        transition: background 0.2s;
    }

    .faq-question-btn:hover {
        background: #e6f0ff;
    }

    .faq-answer {
        display: none;
        padding: 0 20px 18px 20px;
        color: #333;
        animation: fadeIn 0.3s;
    }

    .faq-box.active .faq-answer {
        display: block;
    }

    .faq-arrow {
        margin-left: auto;
        transition: transform 0.2s;
    }

    .faq-box.active .faq-arrow {
        transform: rotate(90deg);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>
<div class="wrapper">
    <div class="container-custom">
        <div class="wow fadeInUp" data-wow-delay="0.3s">
            <h2 class="header-title">Frequently Asked Questions (FAQ)</h2>
        </div>
        <div class="wow fadeInUp" data-wow-delay="0.3s" style="margin-bottom: 25px;">
            <input type="text" id="faq-search" class="form-control" placeholder="Cari pertanyaan atau jawaban..." style="width:100%; padding:12px 16px; border:1px solid #ccc; border-radius:6px; font-size:1rem;">
        </div>

        <div class="wow fadeInUp" data-wow-delay="0.3s">
            <h4>Manfaat Pensiun & Ahli Waris</h4>
            <div class="faq-box">
                <button class="faq-question-btn">
                    Apakah Manfaat Pensiun dihentikan, jika Pensiunan Janda/Duda dari Karyawan/ti menikah kembali?
                    <span class="faq-arrow"><i class="fas fa-chevron-right"></i></span>
                </button>
                <div class="faq-answer">
                    Dihentikan pada akhir bulan Janda/Duda menikah kembali.<br><br>
                    Peraturan Direksi BPJS Ketenagakerjaan Nomor: PERDIR 29/12/2019 tentang Peraturan Dana Pensiun Bab IX Pasal 43 Ayat (2) :<br>
                    Pembayaran Manfaat Pensiun Janda/Duda berakhir pada akhir bulan Janda/Duda meninggal dunia atau menikah lagi.
                </div>
            </div>
            <div class="faq-box">
                <button class="faq-question-btn">
                    Dalam hal Pensiunan meninggal dunia, berapa Manfaat Pensiun yang akan diterima Janda/Duda ?
                    <span class="faq-arrow"><i class="fas fa-chevron-right"></i></span>
                </button>
                <div class="faq-answer">
                    Manfaat Pensiun yang akan diterima Janda/Duda adalah sebesar 75% dari Manfaat Pensiun yang diterima oleh Pensiunan.<br><br>
                    Peraturan Direksi BPJS Ketenagakerjaan Nomor: PERDIR 29/12/2019 tentang Peraturan Dana Pensiun Pasal 37 :<br>
                    Dalam hal Pensiunan meninggal dunia, maka Manfaat Pensiun yang akan diterima Janda/Duda adalah sebesar 75% dari Manfaat Pensiun yang diterima oleh Pensiunan.
                </div>
            </div>
            <div class="faq-box">
                <button class="faq-question-btn">
                    Jika Pensiunan Janda/Duda dari Karyawan/ti menikah kembali, namun masih ada anak dari pernikahan dengan Pensiunan Karyawan/ti sebelumnya yang berusia kurang dari 25 tahun apakah anaknya berhak mendapatkan Manfaat Pensiun Anak?
                    <span class="faq-arrow"><i class="fas fa-chevron-right"></i></span>
                </button>
                <div class="faq-answer">
                    Ya Berhak, Jika Anak tersebut adalah anak sah yang sudah terdaftar pada Dana Pensiun sebelum Peserta diputuskan hubungan kerjanya oleh Pemberi Kerja.<br><br>
                    Peraturan Direksi BPJS Ketenagakerjaan Nomor: PERDIR 29/12/2019 tentang Peraturan Dana Pensiun <br>
                    Pasal 1 Angka 14 :<br>
                    Anak adalah semua anak yang sah dari Peserta / Pensiunan yang telah terdaftar pada Dana Pensiun sebelum Peserta diputuskan hubungan kerjanya oleh Pemberi Kerja.<br>
                    Pasal 44 :<br>
                    (1) Manfaat Pensiun Anak mulai dibayarkan sejak Peserta/ Pensiunan meninggal dunia dan tidak mempunyai Janda/Duda , atau Janda Duda meninggal dunia atau Janda/Duda menikah lagi.<br>
                    (2) Pembayaran Manfaat Pensiun Anak berakhir pada akhir bulan anak meninggal dunia atau anak sudah mencapai usia 25 tahun.<br>
                    Pasal 37 :<br>
                    (6) Besarnya Manfaat Pensiun Anak sama dengan besarnya Manfaat Pensiun Janda/Duda yaitu sebesar 75% dari Manfaat Pensiun yang diterima oleh Pensiunan.
                </div>
            </div>
            <div class="faq-box">
                <button class="faq-question-btn">
                    Jika Pensiunan menikah kembali, kemudian meninggal dunia. Apakah Janda/Duda dari pernikahan baru nya berhak mendapatkan Manfaat Pensiun?
                    <span class="faq-arrow"><i class="fas fa-chevron-right"></i></span>
                </button>
                <div class="faq-answer">
                    Tidak Berhak, Janda/ Duda yang berhak adalah isteri/suami yang sah dari Pensiunan yang meninggal dunia yang telah terdaftar pada Dana Pensiun sebelum Peserta diputuskan hubungan kerjanya oleh Pemberi Kerja.<br><br>
                    Peraturan Direksi BPJS Ketenagakerjaan Nomor: PERDIR 29/12/2019 tentang Peraturan Dana Pensiun Bab IX Pasal 1 Angka (13) :<br>
                    Janda/Duda adalah istri/suami yang sah dari Peserta/ Pensiunan dari Pensiunan yang meninggal dunia yang telah terdaftar pada Dana Pensiun sebelum Peserta diputuskan hubungan kerjanya oleh Pemberi Kerja.
                </div>
            </div>
        </div>

        <div class="wow fadeInUp" data-wow-delay="0.3s">
            <h4>Kewajiban Pelaporan Pajak</h4>
            <div class="faq-box">
                <button class="faq-question-btn">
                    Apakah Pensiunan wajib menyerahkan Surat Pemberitahuan Tahunan Pajak Penghasilan (SPT PPh) ke Direktorat Jendral Pajak Setempat?
                    <span class="faq-arrow"><i class="fas fa-chevron-right"></i></span>
                </button>
                <div class="faq-answer">
                    Wajib, Selama Pensiunan masih menerima penghasilan (baik Manfaat Pensiun maupun Penghasilan dari sumber lain) wajib melaporkan /menyerahkan SPT PPh Pribadi ke Direktorat Jendral Pajak.
                </div>
            </div>
            <div class="faq-box">
                <button class="faq-question-btn">
                    Apakah Pensiunan cukup menyerahkan bukti potong yang didapat setiap tahun dari Dana Pensiun ke Direktorat Jendral Pajak Setempat, jika tidak ada penghasilan lain.
                    <span class="faq-arrow"><i class="fas fa-chevron-right"></i></span>
                </button>
                <div class="faq-answer">
                    Pensiunan melaporkan SPT PPh Pribadi dengan lampiran bukti potong dari Dana Pensiun.
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.faq-question-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var box = btn.parentElement;
            // Close other boxes
            document.querySelectorAll('.faq-box').forEach(function(otherBox) {
                if (otherBox !== box) otherBox.classList.remove('active');
            });
            // Toggle current box
            box.classList.toggle('active');
        });
    });
</script>

<script>
    document.getElementById('faq-search').addEventListener('input', function() {
        var query = this.value.toLowerCase();
        // For each h4, check if any faq-box below it matches
        document.querySelectorAll('.wow.fadeInUp > h4').forEach(function(h4) {
            var section = h4.parentElement;
            var boxes = [];
            var next = h4.nextElementSibling;
            while (next && next.classList.contains('faq-box')) {
                boxes.push(next);
                next = next.nextElementSibling;
            }
            var anyVisible = false;
            boxes.forEach(function(box) {
                var question = box.querySelector('.faq-question-btn').textContent.toLowerCase();
                var answer = box.querySelector('.faq-answer').textContent.toLowerCase();
                if (question.includes(query) || answer.includes(query)) {
                    box.style.display = '';
                    anyVisible = true;
                } else {
                    box.style.display = 'none';
                }
            });
            h4.style.display = anyVisible ? '' : 'none';
        });
    });
</script>