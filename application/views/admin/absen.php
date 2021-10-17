  <!-- /.col-md-6 -->
  <div class="col-md-12">
      <div class="card card-primary">
          <div class="card-header">
              <div class="card-title"> Data <?= $title ?></div>
              <div class="card-tools">

              </div>
          </div>

          <div class="card-body">
              <?php echo form_open_multipart('absen/list_absen') ?>
              <div class="row">

                  <div class="col-md-3 offset-md-1">
                      <select name="nama" class="form-control">
                          <option value="">-- Pilih karyawan --</option>
                          <?php
                            $x = 1;
                            foreach ($all_karyawan as $key => $value) { ?>
                              <option value="<?= $x++ ?>" hidden></option>
                              <option value="<?= $value->id_karyawan ?>"><?= $value->nama_karyawan ?></option>
                          <?php } ?>
                      </select>
                  </div>

                  <div class="col-md-3">
                      <select name="bulan" class="form-control">
                          <option value="">-- Pilih Bulan --</option>
                          <?php foreach ($bulan as $key => $value) { ?>
                              <option value="<?= $value->id_bulan ?>"><?= $value->nama_bulan ?></option>
                          <?php } ?>
                      </select>
                  </div>

                  <div class="col-md-3">
                      <input name="tahun" class="form-control" placeholder="Tahun" onkeypress="return event.charCode >= 48 && event.charCode <=57"></input>
                  </div>
                  <div class="col-md-1">
                      <button type="submit" class="btn btn-primary">Pilih</button>
                  </div>
              </div>
              <?php form_close() ?>
          </div>
      </div>
  </div>