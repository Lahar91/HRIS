  <!-- /.col-md-6 -->
  <div class="col-md-12">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group text-right">
          <?php echo form_open_multipart('karyawan/cuti/kartu_cuti') ?>
          <input type="text" value="<?= $users->id_users ?>" name="id_cuti" hidden>
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-print"></i> Print
          </button>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>

    <div class="card card-primary">
      <div class="card-header">
        <div class="card-title"> List <?= $title ?></div>

      </div>

      <div class="card-body">

        <!--Table-->
        <table class="table table-bordered text-center" id="example1">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Cuti</th>
              <th>Tanggal Pengajuan</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $no = 1;
            foreach ($list_cuti as $key => $value) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->jenis_cuti; ?></td>
                <td><?= date('d-m-Y', strtotime($value->tgl_pengajuan));  ?></td>

                <td>
                  <?php if ($value->status_manajer == "diajukan") { ?>
                    <p class="text-warning">Menungu Konfirmasi Manajer</p>
                  <?php } else if ($value->status_manajer == "reject") { ?>
                    <p class="text-danger">Pengajuan Cuti di Tolak Oleh Manajer</p>
                  <?php } else if ($value->status_direktur == "diajukan") { ?>
                    <p class="text-warning">Menungu Konfirmasi direktur</p>
                  <?php } else if ($value->status_direktur == "accept") { ?>
                    <p class="text-success">accept</p>
                  <?php } elseif ($value->status_direktur == "reject") { ?>
                    <p class="text-danger">Pengajuan Cuti di Tolak Oleh Direktur</p>
                  <?php } ?>

                </td>

                <td>
                  <?php if ($value->status_manajer != "diajukan") { ?>
                    <a href="<?= base_url('karyawan/cuti/view_cuti/' . $value->id_cuti) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                  <?php } else { ?>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_cuti ?>"><i class="fa fa-trash"></i></button>
                  <?php } ?>
                </td>



              </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
    </div>

    <!-- model Delete-->
    <?php foreach ($list_cuti as $key => $value) { ?>
      <div class="modal fade" id="delete<?= $value->id_cuti ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus <?= $title ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('karyawan/cuti/delete'); ?>

              <h5>Apakah anda ingin membatalkan Pengajuan ini ?</h5>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?= base_url('karyawan/cuti/delete/' . $value->id_cuti) ?>" class="btn btn-danger">Delete</a>
            </div>
          </div>
          <?php echo form_close(); ?>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <?php } ?>

    <!--End Modal Delete-->

  </div>

  <?php if ($this->session->flashdata('pesan')) : ?>
    <script>
      swal.fire({
        icon: "success",
        title: "Success",
        text: "Cuti Berhasil di ajukan",
        button: false,
        timer: 3000,
      });
    </script>
  <?php endif; ?>

  <?php if ($this->session->flashdata('delete')) : ?>
    <script>
      swal.fire({
        icon: "success",
        title: "Success",
        text: "Berhasil menghapus pengajuan cuti",
        button: false,
        timer: 3000,
      });
    </script>
  <?php endif; ?>