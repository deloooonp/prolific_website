<div class="col-md-4">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Laporan Harian</h3>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/lap_harian') ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <select name="tanggal" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 31; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 0;
                            for ($i = $mulai; $i < $mulai + 7; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-print mr-1"></i> Cetak Laporan</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Laporan Bulanan</h3>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/lap_bulanan') ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 0;
                            for ($i = $mulai; $i < $mulai + 7; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-print mr-1"></i> Cetak Laporan</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
    <!-- /.card -->
</div>

<div class="col-md-4">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Laporan Tahunan</h3>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/lap_tahunan') ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 0;
                            for ($i = $mulai; $i < $mulai + 7; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-print mr-1"></i> Cetak Laporan</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
    <!-- /.card -->
</div>