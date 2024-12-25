<?= $this->extend('admin/template')?>

<?= $this->section('main')?>
<h2 class="mb-5">Dashboard</h2>

<div class="row mb-5">
    <div class="col-8 rounded bg-success-subtle p-5">
        <h5>Total pendapatan</h5>
        <h5>Rp150.000.000</h5>
    </div>
    </div>
<div class="col-4">
    <div class="rounded bg-secondary-subtle p-5">
        <h4>Total transaksi</h4>
        <h4>1345</h4>
    </div>
</div>
 <?= $this->renderSerction() ?>