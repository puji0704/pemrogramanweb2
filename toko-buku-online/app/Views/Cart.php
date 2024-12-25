<?= $this->extend('templet')?>

<?= $this->section('main')?>

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
                <th scope="col">Aksi</th>
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
                <td>
                    <a href="<? base_url("cart/delete")?>" class="btn btn_danger">hapus</a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    
    </div>
    <h4>Total harga: Rp 360,000</h4>
    <div class="mb-3">
        <a href="<?= base_url('submit')?>" class="btn btn-primary">Checkout</a>
    </div>
</div>
<?= $this->endSection()?>