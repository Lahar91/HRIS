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
              if ($value->nama_divisi == $users->nama_divisi) {
            ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $value->nama_users ?></td>
                  <td><?= $value->jenis_cuti; ?></td>
                  <td><?= $value->tgl_pengajuan; ?></td>
                  <td>
                    <?php if ($value->status_manajer == 'accept') { ?>
                      <p class="text-success"><?= $value->status_manajer; ?></p>
                    <?php }
                    if ($value->status_manajer == 'reject') { ?>
                      <p class="text-danger"><?= $value->status_manajer; ?></p>
                    <?php }
                    if ($value->status_manajer == 'diajukan') { ?>
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