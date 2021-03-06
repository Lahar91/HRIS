  <!-- /.col-md-6 -->
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <div class="card-title"><?= $title ?> <?= $users->nama_divisi ?></div>

      </div>

      <div class="card-body">

        <!--Table-->
        <table class="table table-bordered text-center" id="example1">
          <thead>
            <tr>
              <th>No</th>
              <td>Nama</td>
              <th>Jenis Cuti</th>
              <th>Tanggal Pengajuan</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $no = 1;
            foreach ($list_cuti as $key => $value) {
              if ($value->id_divisi == $users->id_divisi) {
            ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $value->nama_users ?></td>
                  <td><?= $value->jenis_cuti; ?></td>
                  <td><?= date('d-m-Y', strtotime($value->tgl_pengajuan));  ?></td>
                  <td>
                    <?php if ($value->nama_users == $this->session->userdata('nama_users')) { ?>
                      <?php if ($value->status_direktur == "diajukan") { ?>
                        <p class="text-warning">Menungu Konfirmasi dari direktur</p>
                      <?php } else if ($value->status_direktur == "accept") { ?>
                        <p class="text-success">Permintaan Cuti telah di accept oleh direktur</p>
                      <?php } else if ($value->status_direktur == "reject") { ?>
                        <p class="text-danger">Permintaan Cuti telah di reject oleh direktur</p>
                      <?php } ?>
                    <?php } else if ($value->status_manajer == 'accept') { ?>
                      <p class="text-success"><?= $value->status_manajer; ?></p>
                    <?php } else if ($value->status_manajer == 'reject') { ?>
                      <p class="text-danger"><?= $value->status_manajer; ?></p>
                    <?php } else if ($value->status_manajer == 'diajukan') { ?>
                      <p class="text-warning">Menungu Konfirmasi</p>
                    <?php  } ?>
                  </td>

                  <td> <a href="<?= base_url('manajer/cuti/view_cuti/' . $value->id_cuti) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a></td>
                </tr>
            <?php   }
            } ?>

          </tbody>
        </table>

      </div>
    </div>

    <!-- model Delete-->

    <!--End Modal Delete-->

  </div>