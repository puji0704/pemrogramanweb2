<?= $this->extend('templet') ?>

<?= $this->section('main') ?>
<div class="container">
    <h2 class="mb-5">Anda berhasil membuat order</h2>
    <div class="mb-3">
        <div class="alert alert-success">
            <strong>Sukses!</strong> Silahkan melakukan pembayaran dan mengirim bukti bayar ke Admin via Whatsapp. <a href="https://wa.me/081279810852"
            class="btn btn-success">Hubungi Admin</a>
        </div>
    </div>
</div>

<?= $this->andSection() ?>