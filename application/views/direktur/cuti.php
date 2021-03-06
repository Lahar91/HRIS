<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-right">
                <?php if ($list_cuti->status_direktur == 'accept') { ?>
                    <?php echo form_open_multipart('direktur/Pdfview/view/' . $list_cuti->id_cuti) ?>
                    <input type="text" value="<?= $list_cuti->id_cuti ?>" name="id_cuti" hidden>
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-print"></i> Print
                    </button>
                    <?php echo form_close() ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <hr>
            <div class="card-text">
                <!--Start Formulir-->

                <?php echo form_open_multipart('direktur/cuti/edit/') ?>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <h5><?= $list_cuti->nama_users ?></h5>
                        <input type="text" name="nama_users" class="form-control" id="exampleInputEmail1" value="<?= $list_cuti->nama_users ?>" hidden>
                    </div>
                </div>

                <div class="col-md-3">
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
                    <!-- <div class="col-md-3">
                        <div class="form-group">
                            <label>lokasi semala cuti</label>
                            <input type="text" name="lokasi_cuti" class="form-control" id="exampleInputEmail1" value="<?= $list_cuti->lokasi_cuti ?>" readonly>
                        </div>
                    </div> -->
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
                                <input type="text" value="<?php $date = explode('-',  $list_cuti->mulai_tanggal);
                                                            echo $new_data = $date[2] . '-' . $date[1] . '-' . $date[0];
                                                            ?>" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Tanggal/Bulan/Tahun" readonly>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label>Sampai dengan</label>
                        <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                            <input type="text" value="<?php $date = explode('-',  $list_cuti->sampai_tanggal);
                                                        echo $new_data = $date[2] . '-' . $date[1] . '-' . $date[0];
                                                        ?>" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate2" placeholder="Tanggal/Bulan/Tahun" readonly>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan Cuti users</label>
                        <textarea class="form-control" name="keterangan_cuti" cols="30" rows="3" readonly><?= $list_cuti->keterangan_cuti ?></textarea>
                    </div>
                </div>


            </div>


            <div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <h5> <?php $date = explode('-',  $list_cuti->tgl_pengajuan);
                                echo $new_data = $date[2] . '-' . $date[1] . '-' . $date[0];
                                ?> </h5>
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
            <?php if ($list_cuti->keterangan_direktur != '') { ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan direktur</label>
                        <textarea class="form-control" name="keterangan_direktur" cols="10" rows="3" readonly><?= $list_cuti->keterangan_direktur ?></textarea>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan Direktur</label>
                        <textarea class="form-control" name="keterangan_direktur" cols="10" rows="3"></textarea>
                    </div>
                </div>
            <?php } ?>

            <input type="text" value="$list_cuti->id_cuti" hidden>


            <div class="row">
                <div class="col-md-6 text-left">
                </div>
                <?php if ($list_cuti->status_direktur != "reject" && $list_cuti->status_direktur != "accept") {
                ?>
                    <div class="col-md-6 text-right">
                        <input value="reject" name="status_direktur" type="submit" class="btn btn-outline-danger"></input>
                        <input value="accept" name="status_direktur" type="submit" class="btn btn-outline-success"></input>
                    </div>
                <?php }
                ?>
            </div>
        </div>

        <?php echo form_close(); ?>
        <!--End Formulir-->
    </div>
</div>