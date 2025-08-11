<style>
    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        padding: 20px;
    }

    .gallery-card {
        width: 300px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        background: #fff;
        cursor: pointer;
    }

    .gallery-card:hover {
        transform: scale(1.05);
    }

    .gallery-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .gallery-card .gallery-content {
        padding: 15px;
        text-align: center;
    }

    .gallery-card p {
        font-size: 14px;
        color: #666;
    }

    /* Pagination */
    .pagination-container {
        text-align: center;
        margin-top: 20px;
    }

    .pagination-container button {
        background: #007bff;
        color: white;
        border: none;
        padding: 8px 15px;
        margin: 5px;
        cursor: pointer;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .pagination-container button:hover {
        background: #0056b3;
    }

    .pagination-container button:disabled {
        background: #ccc;
        cursor: not-allowed;
    }

    /* Modal Popup */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        margin: 8vh auto;
        max-width: 50%;
        max-height: 50%;
        display: block;
    }

    @media (max-width: 768px) {
        .modal-content {
            margin: 25vh auto;
            max-width: 100%;
            max-height: 100%;
        }
    }

    .modal img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .close-btn {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 30px;
        font-weight: bold;
        color: white;
        cursor: pointer;
        background: none;
        border: none;
    }
</style>

<div class="wrapper" style="margin-top: 8vh;">
    <div class="container">
        <h2 class="text-center">Galeri DPK BPJS Ketenagakerjaan</h2>
        <div id="galeri-container" class="gallery-container"></div>

        <div class="pagination-container">
            <button id="firstPage">First</button>
            <button id="prevPage">Previous</button>
            <span id="pageInfo">Page 1 of 2</span>
            <button id="nextPage">Next</button>
            <button id="lastPage">Last</button>
        </div>

    </div>

    <!-- Modal -->
    <div id="imageModal" class="modal" onclick="closeModal()" style="margin: 6vh auto;">
        <button class="close-btn" onclick="closeModal()">&times;</button>
        <div class="modal-content">
            <img id="modalImage" src="" alt="Gambar Besar">
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let galeriData = <?= json_encode($galeri); ?>; // Ambil semua data dari PHP
    let currentPage = 1;
    let limit = <?= $limit; ?>;
    let totalRows = galeriData.length;
    let totalPages = Math.ceil(totalRows / limit);

    function loadGaleri(page) {
        let start = (page - 1) * limit;
        let end = start + limit;
        let displayData = galeriData.slice(start, end);

        let html = "";
        if (displayData.length === 0) {
            html = `<p class="text-center">Tidak ada foto</p>`;
            $(".pagination-container").hide();
        } else {
            displayData.forEach(g => {
                html += `
                <div class="gallery-card" onclick="openModal('${'<?= base_url('assets/img/galeri/dpkj/'); ?>' + g.gambar}')">
                    <img src="${'<?= base_url('assets/img/galeri/dpkj/'); ?>' + g.gambar}" alt="${g.judul}">
                    <div class="gallery-content">
                        <p>${g.deskripsi}</p>
                    </div>
                </div>
            `;
            });
        }

        $("#galeri-container").html(html);
        currentPage = page;
        updatePaginationButtons();
    }

    function updatePaginationButtons() {
        $("#pageInfo").text(`Page ${currentPage} of ${totalPages > 0 ? totalPages : 1}`);

        $("#firstPage").prop("disabled", currentPage === 1 || totalPages === 0);
        $("#prevPage").prop("disabled", currentPage === 1 || totalPages === 0);
        $("#nextPage").prop("disabled", currentPage === totalPages || totalPages === 0);
        $("#lastPage").prop("disabled", currentPage === totalPages || totalPages === 0);
    }

    $("#firstPage").click(() => loadGaleri(1));
    $("#prevPage").click(() => loadGaleri(currentPage - 1));
    $("#nextPage").click(() => loadGaleri(currentPage + 1));
    $("#lastPage").click(() => loadGaleri(totalPages));

    function openModal(imageSrc) {
        $("#modalImage").attr("src", imageSrc);
        $("#imageModal").show();
    }

    function closeModal() {
        $("#imageModal").hide();
    }

    $(document).ready(() => {
        loadGaleri(1);
    });
</script>