<!-- Default box -->
<div class="card card-solid">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none"></h3>
                <div class="col-12">
                    <img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" alt="Product Image"></div>

                    <?php foreach ($gambar as $key => $value) { ?>

                        <div class="product-image-thumb"><img src="<?= base_url('assets/gambarbarang/' . $value->gambar) ?>" alt="Product Image" width="300px"></div>

                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-1 text-dark font-weight-bold"><?= $barang->nama_barang ?></h3>
                <h6 class="text-muted"><?= $barang->nama_kategori ?></h6>
                <hr>
                <h5 class="text-dark font-weight-bold">Deskripsi Barang</h5>
                <p><?= $barang->deskripsi ?></p>

                <div>
                    <h2 class="mb-0 font-weight-bold">
                        Rp. <?= number_format($barang->harga, 0) ?>.00
                    </h2>
                </div>

                <hr>
                <?php
                echo form_open('belanja/add');
                echo form_hidden('id', $barang->id_barang);
                echo form_hidden('price', $barang->harga);
                echo form_hidden('name', $barang->nama_barang);
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-sm-2">
                            <input name="qty" type="number" class="form-control" value="1" min="1">
                        </div>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-dark swalDefaultSuccess rounded float-right">
                                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                Masukkan ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>

            </div>
        </div>

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>

<!-- SweetAlert2 -->
<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Barang Berhasil Ditambahkan ke Keranjang!'
            })
        });
    });
</script>

<br>
<br>
<br>