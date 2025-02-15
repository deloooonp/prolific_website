<div class="row">
    <div class="col-sm-12">
        <?php
        if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i>';
            echo $this->session->flashdata('pesan');
            echo '</h5></div>';
        }
        ?>
        <!-- data pesanan belum bayar -->
        <div class="card card-dark card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" id="1" data-toggle="pill" href="#semua_pesanan" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Belum Bayar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="2" data-toggle="pill" href="#proses_pesanan" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Pesanan di Proses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="3" data-toggle="pill" href="#dikirim_pesanan" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Dikirim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="4" data-toggle="pill" href="#selesai_pesanan" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Diterima</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tab">
                    <div class="tab-pane fade show active" id="semua_pesanan" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <table class="table">
                            <tr>
                                <th>No Order</th>
                                <th>Tanggal</th>
                                <th>Expedisi</th>
                                <th>Total Bayar</th>
                                <th class="text-center">Action</th>
                            </tr>
                            <?php foreach ($belum_bayar as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>
                                        <span class="font-weight-bold" style="text-transform:uppercase"><?= $value->expedisi ?></span><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= $value->ongkir ?><br>
                                        Estimasi : <?= $value->estimasi ?>
                                    </td>
                                    <td>
                                        <b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>

                                        <?php if ($value->status_bayar == 0) { ?>
                                            <span class="badge badge-secondary">Belum Bayar</span>
                                        <?php } else { ?>
                                            <span class="badge badge-success">Sudah Bayar</span><br>
                                            <span class="badge badge-secondary">Menunggu Verifikasi</span>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($value->status_bayar == 0) { ?>
                                            <a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="btn btn-sm btn-flat rounded btn-dark mb-2"><i class="fa fa-credit-card mr-1"></i> Bayar</a><br>
                                            <button data-toggle="modal" data-target="#delete<?= $value->id_transaksi ?>" class="btn btn-sm btn-flat rounded btn-danger"><i class="fa fa-ban mr-1"></i> Batalkan</button>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- data pesanan diproses -->
                    <div class="tab-pane fade" id="proses_pesanan" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <table class="table">
                            <tr>
                                <th>No Order</th>
                                <th>Tanggal</th>
                                <th>Expedisi</th>
                                <th>Total Bayar</th>
                            </tr>
                            <?php foreach ($diproses as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>
                                        <span class="font-weight-bold" style="text-transform:uppercase"><?= $value->expedisi ?></span><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= $value->ongkir ?><br>
                                        Estimasi : <?= $value->estimasi ?>
                                    </td>
                                    <td>
                                        <b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
                                        <span class="badge badge-success">Terverifikasi</span><br>
                                        <span class="badge badge-secondary">Di Proses</span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- data pesanan dikirim -->
                    <div class="tab-pane fade" id="dikirim_pesanan" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                        <table class="table">
                            <tr>
                                <th>No Order</th>
                                <th>Tanggal</th>
                                <th>Expedisi</th>
                                <th>Total Bayar</th>
                                <th>No Resi</th>
                                <th class="text-center">Action</th>
                            </tr>
                            <?php foreach ($dikirim as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>
                                        <span class="font-weight-bold" style="text-transform:uppercase"><?= $value->expedisi ?></span><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= $value->ongkir ?><br>
                                        Estimasi : <?= $value->estimasi ?>
                                    </td>
                                    <td>
                                        <b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
                                        <span class="badge badge-success">Di Kirim</span>
                                    </td>
                                    <td>
                                        <?= $value->no_resi ?>
                                    </td>
                                    <td class="text-center">
                                        <button data-toggle="modal" data-target="#diterima<?= $value->id_transaksi ?>" class="btn btn-sm btn-dark"><i class="fa fa-check mr-1"></i> Di Terima</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- data pesanan diteirma -->
                    <div class="tab-pane fade" id="selesai_pesanan" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                        <table class="table">
                            <tr>
                                <th>No Order</th>
                                <th>Tanggal</th>
                                <th>Expedisi</th>
                                <th>Total Bayar</th>
                                <th>No Resi</th>
                            </tr>
                            <?php foreach ($diterima as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>
                                        <span class="font-weight-bold" style="text-transform:uppercase"><?= $value->expedisi ?></span><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= $value->ongkir ?><br>
                                    </td>
                                    <td>
                                        <b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
                                        <span class="badge badge-success">Di Terima</span>
                                    </td>
                                    <td>
                                        <?= $value->no_resi ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

<?php foreach ($dikirim as $key => $value) { ?>
    <div class="modal fade" id="diterima<?= $value->id_transaksi ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pesanan Diterima</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin Pesanan sudah diterima?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('pesanan_saya/diterima/' . $value->id_transaksi) ?>" class="btn btn-dark">Sudah Diterima</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>

<?php foreach ($belum_bayar as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_transaksi ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= $value->no_order ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin untuk membatalkan pesanan?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('pesanan_saya/delete_order/' . $value->id_transaksi) ?>" class="btn btn-danger">Batalkan</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>

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
<br>
<br>
<br>
<br>