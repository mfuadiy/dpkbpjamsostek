<style>
  .buletin-section {
    padding: 2vh 0;
    background-color: #f8f9fa;
    text-align: center;
  }

  .buletin-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .buletin-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .buletin-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 280px;
    transition: transform 0.3s ease-in-out;
  }

  .buletin-card:hover {
    transform: translateY(-15px);
  }

  .buletin-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .buletin-card h6 {
    font-size: 18px;
    margin: 10px 0;
    font-weight: bold;
  }

  .btn-buletin {
    display: inline-block;
    margin: 10px 0 20px;
    padding: 8px 15px;
    background: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    transition: background 0.3s ease-in-out;
  }

  .btn-buletin:hover {
    background: #0056b3;
  }
</style>

<div class="wrapper">
  <section class="buletin-section" id="buletin">
    <div class="container">
      <h3 class="buletin-title">BULETIN</h3>
      <hr><br>
      <div class="buletin-container">
        <?php foreach ($buletin as $b) : ?>
          <div class="buletin-card">
            <img src="<?= base_url(); ?>assets/img/buletin/<?= $b['cover']; ?>" alt="<?= $b['judul']; ?>">
            <h6><?= $b['judul']; ?></h6>
            <a href="<?= base_url(); ?>assets/pdf/<?= $b['file']; ?>" class="btn-buletin" target="_blank">Baca Buletin</a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>