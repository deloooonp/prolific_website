<!-- Main content -->
<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
        <div class="col-12">
            <h4>
            <?= $title ?>
                <small class="float-right">Tanggal: <?= date('d-m-Y') ?></small>
            </h4>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->

    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Gambar</th>
                        <th>Nama Barang</th>
                        <th class="text-right">Harga</th>
                        <th class="text-right">Total Harga</th>
                        <th class="text-center">Berat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_berat = 0;
                    foreach ($this->cart->contents() as $items) {
                        $barang = $this->m_home->detail_barang($items['id']);
                        $berat = $items['qty'] * $barang->berat;
                        $total_berat = $total_berat + $berat;
                    ?>

                        <tr>
                            <td class="text-center"><?php echo $items['qty']; ?></td>
                            <td class="text-center"><img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" width="55px"></td>
                            <td><?php echo $items['name']; ?></td>
                            <td style="text-align:right">Rp. <?php echo number_format($items['price'], 0); ?></td>
                            <td style="text-align:right">Rp. <?php echo number_format($items['subtotal'], 0); ?></td>
                            <td class="text-center"><?= $berat ?> Gr</td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>

    <!-- /.row -->
    <?php
    echo validation_errors('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
    ?>
    <?php echo form_open('belanja/cekout');
    $no_order = date('Ymd') . strtoupper(random_string('alnum', 8));
    ?>

    <div class="row">
        <!-- input alamat -->
        <div class="col-8 invoice-col">
            <h6 class="font-weight-bold text-dark">Tujuan Pemesanan</h6>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select name="provinsi" class="form-control"></select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kota / Kabupaten</label>
                        <select name="kota" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Expedisi</label>
                        <select name="expedisi" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Paket</label>
                        <select name="paket" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input name="kode_pos" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Penerima</label>
                        <input name="nama_penerima" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input name="hp_penerima" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rp. <?php echo number_format($this->cart->total(), 0); ?></td>
                    </tr>
                    <tr>
                        <th>Berat:</th>
                        <td><?= $total_berat ?> Gr</td>
                    </tr>
                    <tr>
                        <th>Ongkir:</th>
                        <td id="ongkir"></td>
                    </tr>
                    <tr>
                        <th>Total Bayar:</th>
                        <td><label id="total_bayar"></label></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>


    <!-- /.row -->

    <!-- simpan transaksi -->
    <input name="no_order" value="<?= $no_order ?>" hidden>
    <input name="estimasi" hidden>
    <input name="ongkir" hidden>
    <input name="berat" value="<?= $total_berat ?>" hidden><br>
    <input name="grand_total" value="<?= $this->cart->total() ?>" hidden>
    <input name="total_bayar" hidden>
    <!-- end simpan transaksi -->

    <!-- simpan rinci transaksi -->
    <?php
    $i = 1; 
    foreach ($this->cart->contents() as $items) {
        echo form_hidden('qty' . $i++, $items['qty']);
    }
    ?>
    <!-- end simpan transaksi -->

    <div class="row no-print">
        <div class="col-12">
            <a href="<?= base_url('belanja') ?>" class="btn btn-secondary"><i class="fas fa-backward mr-1"></i> Kembali Ke Keranjang</a>
            <button type="submit" class="btn btn-dark float-right"><i class="far fa-credit-card mr-1"></i> Proses Cekout
            </button>
        </div>
    </div>
    <?php echo form_close() ?>
</div>
<br>

<script>
    $(document).ready(function() {
        // masukkan data ke provinsi
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/provinsi') ?>",
            success: function(hasil_provinsi) {
                // console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });
        // masukkan data ke kota
        $("select[name=provinsi]").on("change", function() {
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/kota') ?>",
                data: 'id_provinsi=' + id_provinsi_terpilih,
                success: function(hasil_kota) {
                    $("select[name=kota]").html(hasil_kota);
                }
            });
        });
        //  expedisi
        $("select[name=kota]").on("change", function() {
            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/expedisi') ?>",
                success: function(hasil_expedisi) {
                    $("select[name=expedisi]").html(hasil_expedisi);
                }
            });
        });
        //  paket
        $("select[name=expedisi]").on("change", function() {
            // mendapatkan expedisi terpilih
            var expedisi_terpilih = $("select[name=expedisi]").val()
            // mendapatkan id kota terpilih
            var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
            // data berat ongkos barang
            var total_berat = <?= $total_berat ?>;

            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/paket') ?>",
                data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + total_berat,
                success: function(hasil_paket) {
                    $("select[name=paket]").html(hasil_paket);
                }
            });
        });

        $("select[name=paket]").on("change", function() {
            // menampilkan ongkir
            var dataongkir = $("option:selected", this).attr('ongkir');
            var reverse = dataongkir.toString().split('').reverse().join(''),
                ribuan_ongkir = reverse.match(/\d{1,3}/g);
            ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');

            $("#ongkir").html("Rp. " + ribuan_ongkir)
            // menghitung total bayar
            var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
            var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
                ribuan_total_bayar = reverse2.match(/\d{1,3}/g);
            ribuan_total_bayar = ribuan_total_bayar.join(',').split('').reverse().join('');
            $("#total_bayar").html("Rp. " + ribuan_total_bayar)

            // estimasi dan ongkir
            var estimasi = $("option:selected", this).attr('estimasi');
            $("input[name=estimasi]").val(estimasi);
            $("input[name=ongkir]").val(dataongkir);
            $("input[name=total_bayar]").val(data_total_bayar);
        });

    });
</script>