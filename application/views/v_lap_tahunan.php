<div class="col-12">

    <!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h4>
                    <img src="<?= base_url('assets/prolific/logo.png') ?>"height="37.5px"><br>
                    <?= $title ?>
                    <small class="float-right">Tahun : <?= $tahun ?></small>
                </h4>
            </div>
            <!-- /.col -->
        </div>

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Order</th>
                            <th>Nama Penerima</th>
                            <th>Tanggal</th>
                            <th>Total Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        $total_penjualan = 0;
                        foreach ($laporan as $key => $value) {
                            $total_penjualan = $total_penjualan + $value->grand_total;
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->no_order ?></td>
                                <td><?= $value->nama_penerima ?></td>
                                <td><?= $value->tgl_order ?></td>
                                <td>Rp. <?= number_format($value->grand_total, 0) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h4 class="float-right font-weight-bold col-5">Total Penjualan: Rp. <?= number_format($total_penjualan, 0) ?></h4>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <button class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
            </div>
        </div>
    </div>
    <!-- /.invoice -->
</div><!-- /.col -->