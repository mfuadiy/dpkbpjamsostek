<div class="wrapper">
    <div class="container mt-3">
        <div class="card shadow">
            <div class="card-header py-3">
                <h3 class="mb-4" style="text-align: center;">Monitoring Pengkinian Data</h3>
            </div>

            <!-- Tabel Data -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableUser" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Tanggal Input</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($form_data)): ?>
                                <?php foreach ($form_data as $key => $data): ?>
                                    <tr>
                                        <td><?= $key + 1; ?></td>
                                        <td><?= htmlspecialchars($data['nama']); ?></td>
                                        <td><?= htmlspecialchars($data['kota']); ?></td>
                                        <?php
                                        $ci = get_instance();
                                        $prov = $ci->db->get_where('prov', ['kode' => $data['provinsi']])->row_array();
                                        ?>
                                        <td><?= htmlspecialchars($prov['prov']); ?></td>
                                        <td><?= date('d-m-Y H:i:s', strtotime($data['date_created'])); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="12" class="text-center">Tidak ada data yang tersedia.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>