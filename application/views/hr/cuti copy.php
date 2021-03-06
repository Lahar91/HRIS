<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <hr>
            <div class="card-text">
                <!--Start Formulir-->
                <?php echo form_open_multipart('form/cuti_edit/') ?>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <h5><?= $list_cuti->nama_users ?></h5>
                        <input type="text" name="nama_users" class="form-control" id="exampleInputEmail1" value="<?= $list_cuti->nama_users ?>" hidden>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mulai Bekerja</label>
                        <input type="text" value="<?= $list_cuti->mulai_bekerja ?>" name="mulai_bekerja" class="form-control" id="exampleInputEmail1" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Cuti</label>
                            <input type="text" name="jenis_cuti" class="form-control" id="exampleInputEmail1" value="<?= $list_cuti->jenis_cuti ?>" readonly>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Lama Cuti</label>
                            <input type="text" name="lama_cuti" class="form-control" id="exampleInputEmail1" value="<?= $list_cuti->lama_cuti ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sisa Cuti</label>
                            <input type="text" value="<?= $list_cuti->sisa_cuti ?>" name="sisa_cuti" class="form-control" id="exampleInputEmail1" placeholder="Sisa Cuti" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Mulai dari</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" value="<?= $list_cuti->mulai_tanggal ?>" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Tanggal/Bulan/Tahun" readonly>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label>Sampai dengan</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" value="<?= $list_cuti->sampai_tanggal ?>" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Tanggal/Bulan/Tahun" readonly>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan Cuti</label>
                        <textarea class="form-control" name="keterangan_cuti" cols="30" rows="3" readonly><?= $list_cuti->keterangan_cuti ?></textarea>
                    </div>
                </div>


                <div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tanggal Pengajuan</label>
                            <h5> <?= $list_cuti->tgl_pengajuan ?> </h5>
                            <input type="text" name="tgl_pengajuan" value="<?php echo date("Y-m-d"); ?>" hidden>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="form-group">
                        <input type="text" name="id_users" value="<?= $list_cuti->id_users ?>" hidden>
                    </div>
                </div>

                <div>
                    <div class="form-group">
                        <input type="text" name="id_cuti" value="<?= $list_cuti->id_cuti ?>" hidden>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan manajer</label>
                        <textarea class="form-control" name="keterangan_manajer" cols="10" rows="3" readonly><?= $list_cuti->keterangan_manajer ?></textarea>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan direktur</label>
                        <textarea class="form-control" name="keterangan_direktur" cols="10" rows="3" readonly><?= $list_cuti->keterangan_direktur ?></textarea>
                    </div>
                </div>

                <input type="text" value="$list_cuti->id_cuti" hidden>

            </div>
            <?php echo form_close(); ?>
            <!--End Formulir-->
        </div>
    </div>



    <script>
        $(function() {
            //Date range picker
            $('#reservationdate').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        })
    </script>