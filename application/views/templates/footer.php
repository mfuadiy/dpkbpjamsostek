<div id="whatswidget-pre-wrapper" class="whatsapp-widget">
    <a href="https://wa.me/628118455577?text=Halo%2C%20saya%20perlu%20bantuan" target="_blank" rel="noopener noreferrer">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon" class="whatsapp-icon">
    </a>
</div>

<footer class="container-fluid bg-dark text-light footer pt wow fadeIn" style="margin-top: 10px;" data-wow-delay="0.1s">
    <div class="container">


        <div class="text-center" style="color: rgb(255, 255, 255); font-size: 16px;">
            <img src="<?= base_url('assets/'); ?>/img/logo/icon-logo.png" style="height: 50px; padding-top: 20px;"> <br> GEDUNG DPK BPJS KETENAGAKERJAAN <br> Jl. Tangkas Baru No.1, Gatot Subroto, Jakarta Selatan, Indonesia 12930 <br> Telp. (021)5204362,5254880
            | Fax. (021)5228530 <br> E-mail : dpk-bpjstk@cbn.net.id
        </div>
        <div class="text-center" style="color: #aaa; font-size : 10px;">
            &copy;
            <?php echo date("Y"); ?> DPK BPJS Ketenagakerjaan All Rights Reserved | DPK BPJS Ketenagakerjaan terdaftar dan diawasi oleh Otoritas Jasa Keuangan <br><br><br>
        </div>
    </div>
</footer>

<a href="#" class="btn btn-lg btn-dark btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
</div>

<script src="https://kit.fontawesome.com/b9424abb48.js" crossorigin="anonymous"></script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/lightbox/js/lightbox.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js" integrity="sha256-ErZ09KkZnzjpqcane4SCyyHsKAXMvID9/xwbl/Aq1pc=" crossorigin="anonymous"></script> -->
<script src="<?= base_url(); ?>assets/js/chart.js/Chart.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            url: "<?= base_url('beranda/get_chart_data') ?>",
            method: "GET",
            dataType: "json",
            success: function(response) {
                // Pastikan urutan data sesuai dengan label
                const labels = [
                    `Aktif (${response.data[0]})`,
                    `Pasif (${response.data[1]})`
                ];

                const dataValues = [
                    response.data[0], // Data untuk peserta aktif
                    response.data[1] // Data untuk peserta pasif
                ];

                const ctx = document.getElementById('myPieChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels, // Pastikan label sesuai dengan data
                        datasets: [{
                            data: dataValues, // Pastikan data sesuai dengan label
                            backgroundColor: [
                                '#2124b1', // Biru untuk aktif
                                '#0e8744' // Hijau untuk pasif
                            ],
                            borderColor: [
                                '#2124b1',
                                '#0e8744'
                            ],
                            borderWidth: 1
                        }]
                    }
                });
            }
        });
    });
</script>

<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/main.js"></script>



<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTableUser').DataTable();
    });
</script>

</body>

</html>