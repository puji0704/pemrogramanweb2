<?= $this->extend('templet') ?>

<?= $this->section('main') ?>
<div class="container">
    <h2 class="mb-3">Cart</h2>
    <div class="">
        <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Detail buku</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <img src="<?= base_url('images/111.jpg'); ?>" alt="" style="width:150x; height:auto">
                    <h6>menulis novel dengan bahagia</h6>
                </td>
                <td>
                    x1
                </td>
                <td>
                    Rp 90.000
                </td>
                <td>
                    Rp 100.000
                </td>
                <td>
                    Rp 90.000
                </td>
                <td>
                    Rp 80.000
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    <h2 class="mb-5">Total: Rp 360.000</h2>
    <h2 class="mb-3">Data pembeli</h2>
    <div class="mb-5">
        indah puji astuti <br/>
        081279810852
        phujiastuti07@gmail.com
    </div>
    <h2 class="mb-3">Alamat pengiriman</h2>
    <div class="mb-5">
        <span>jl. km 16, Simpang sungai Duren, Muaro jambi</span>
    </div>
    <h2 class="mb-3">Metode Bayar</h2>
    <div class="mb-5">
        Tranfer bank <br/>
        BSI, indah puji astuti<br/>
        435363736354
    </div>
    <div class="mb-5">
        <a href="<?= base_url('submit')?>" class="btn btn-primary">submit</a>
    </div>
</div>
<?= $this->endSection()?>