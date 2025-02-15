<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible col-12"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <div class="col-sm-12">
                <?php echo form_open('belanja/update'); ?>

                <table class="table" cellpadding="6" cellspacing="1" style="width:100%">

                    <tr>
                        <th width="135px">Jumlah</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th style="text-align:right">Harga</th>
                        <th style="text-align:right">Sub-Total</th>
                        <th style="text-align:center">Berat</th>
                        <th class="text-center">Action</th>
                    </tr>

                    <?php $i = 1; ?>

                    <?php
                    $total_berat = 0;
                    foreach (
                        $this->cart->contents() as $items
                    ) {
                        $barang = $this->m_home->detail_barang($items['id']);
                        $berat = $items['qty'] * $barang->berat;
                        $total_berat = $total_berat + $berat;
                    ?>

                        <tr>
                            <td><?php echo form_input(array(
                                    'name' => $i . '[qty]',
                                    'value' => $items['qty'],
                                    'maxlength' => '3',
                                    'size' => '5',
                                    'min' => '0',
                                    'type' => 'number',
                                    'class' => 'form-control'
                                )); ?></td>
                            <td><img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" width="75px"></td>
                            <td><?php echo $items['name']; ?></td>
                            <td style="text-align:right">Rp. <?php echo number_format($items['price'], 0); ?></td>
                            <td style="text-align:right">Rp. <?php echo number_format($items['subtotal'], 0); ?></td>
                            <td class="text-center"><?= $berat ?> Gr</td>
                            <td class="text-center">
                                <a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        <?php $i++; ?>

                    <?php } ?>

                    <tr>
                        <td class="right" colspan="6">
                            <h5><strong>Total Berat:</strong></h5>
                        </td>
                        <td class="right">
                            <h5><strong><?= $total_berat ?> Gr</strong></h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="right" colspan="6">
                            <h5><strong>Total Harga:</strong></h5>
                        </td>
                        <td class="right">
                            <h5><strong>Rp. <?php echo number_format($this->cart->total(), 0); ?></strong></h5>
                        </td>
                    </tr>

                </table>

                <button type="submit" class="btn btn-info"><i class="fa fa-cart-arrow-down"></i> Update Keranjang</button>
                <a href="<?= base_url('belanja/clear') ?>" class="btn btn-danger"><i class="fa fa-recycle"></i> Hapus Keranjang</a>
                <a href="<?= base_url('belanja/cekout') ?>" class="btn btn-dark float-right"><i class="fa fa-credit-card"></i> Checkout</a>
                <?php echo form_close(); ?>
                <br>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>