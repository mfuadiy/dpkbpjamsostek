<style>
  .card {
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
</style>

<div class="wrapper">
  <section class="artikel" id="artikel" style="padding-top: 2vh;">
    <div class="container">
      <div class="section-title position-relative text-center mb-3 pb-2 wow fadeInUp" data-wow-delay="0.1s">
        <h3>ARTIKEL</h3>
      </div>
      <div class="row wow fadeInUp" data-wow-delay="0.1s" id="artikel-content">
        <!-- Artikel akan dimuat di sini melalui AJAX -->
      </div>
      <div class="text-center mt-3 wow fadeInUp" data-wow-delay="0.1s">
        <button id="first-page" class="btn btn-sm btn-primary">First</button>
        <button id="prev-page" class="btn btn-sm btn-primary">Previous</button>
        <span id="page-info" class="mx-2"></span>
        <button id="next-page" class="btn btn-sm btn-primary">Next</button>
        <button id="last-page" class="btn btn-sm btn-primary">Last</button>
      </div>
    </div>
  </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    let currentPage = 0;
    let totalPages = 0;
    let limit = 3; // Sesuai dengan pagination galeri

    function loadArtikel(page = 0) {
      $.ajax({
        url: "<?= base_url('mediabaca/load_data') ?>",
        type: "POST",
        data: {
          page: page
        },
        dataType: "json",
        success: function(response) {
          let artikelHtml = '';
          $.each(response.artikel, function(index, a) {
            artikelHtml += `
              <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 rounded">
                  <img src="<?= base_url(); ?>assets/img/artikel/cover/${a.cover}" class="card-img-top" alt="${a.judul}" style="height: 200px; object-fit: cover;">
                  <div class="card-body">
                    <h5 class="card-title">${a.judul}</h5>
                    <p class="card-text text-muted">${a.deskripsi}</p>
                    <a href="<?= base_url(); ?>assets/pdf/${a.file}" class="btn btn-primary btn-sm" target="_blank">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            `;
          });

          $("#artikel-content").html(artikelHtml);

          totalPages = Math.ceil(response.total_artikel / response.limit);
          $("#page-info").text(`Page ${Math.floor(page / limit) + 1} of ${totalPages}`);

          $("#first-page").prop("disabled", page === 0);
          $("#prev-page").prop("disabled", page === 0);
          $("#next-page").prop("disabled", (page + limit) >= response.total_artikel);
          $("#last-page").prop("disabled", (page + limit) >= response.total_artikel);
        }
      });
    }

    loadArtikel(); // Load pertama kali

    $("#first-page").click(function() {
      currentPage = 0;
      loadArtikel(currentPage);
    });

    $("#prev-page").click(function() {
      if (currentPage > 0) {
        currentPage -= limit;
        loadArtikel(currentPage);
      }
    });

    $("#next-page").click(function() {
      if ((currentPage + limit) < totalPages * limit) {
        currentPage += limit;
        loadArtikel(currentPage);
      }
    });

    $("#last-page").click(function() {
      currentPage = (totalPages - 1) * limit;
      loadArtikel(currentPage);
    });
  });
</script>