<?= $this->extend('template') ?>

<?= $this->section('main') ?>


<div class="container p-5 bg-danger-subtle rounded-bottom-4">
  <h1>Selamat Datang di toko buku online</h1>
  <h5>kami menyediakan berbagai jenis buku dari penerbit terpercaya.</h5>
  <a href="<?= base_url() ?>" class="btn btn-primary">lihat produk</a>
</div>

<div class="container">

  <h2 class="mt-5">Buku Best Seller</h2>
  <div class="row gy-5">
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/download (1).jpeg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Si anak pintar</h5>
          <p class="card-text">Rp 90.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/download (1).jpeg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">3726 MDPL</h5>
          <p class="card-text">Rp 1OO.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/download (1).jpeg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Senja</h5>
          <p class="card-text">Rp 80.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/download (1).jpeg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Bicara itu ada seni nya</h5>
          <p class="card-text">Rp 85.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>

  </div>
  <?= $this->endSection() ?>