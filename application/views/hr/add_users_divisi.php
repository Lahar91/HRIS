<div class="col-lg-12">
  <div class="card">

    <div class="card-body">
      <h5>Tambah Karyawan Divisi <?= $divisi->nama_divisi ?></h5>

      <hr>
      <div class="card-text">
        <!--Start Formulir-->
        <?php             //Notifikasi form kosong
        echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-info"></i>', '</h5></div>'); ?>
        <?php echo form_open_multipart('hr/divisi/add_users/' . $divisi->id_divisi) ?>
        <div class="row">
          <div class="col-lg-9">

            <div class="col-md-8">
              <div class="form-group">
                <label>Nama Pekerja</label>
                <input type="text" name="nama_users" class="form-control" placeholder="John Doe">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Tanggal Mulai Bekerja</label>
                <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                  <input type="text" name="mulai_bekerja" class="form-control datetimepicker-input" data-target="#reservationdate2" placeholder="TTTT-BB-HH" />
                  <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">

              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" name="tmpt_lahir" class="form-control" placeholder="Tempat Lahir">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Tanggal lahir</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="TTTT-BB-HH" />
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Sesuai KTP</label>
                <textarea class="form-control" name="alamat_ktp" rows="3" placeholder="Jl. Pegangsaan Timur No.56 RT.1/RW.1, Pegangsaan, Kec. Menteng, Jakarta Pusat
"></textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Domisili</label>
                <textarea class="form-control" name="alamat_domisili" rows="3" placeholder="Tidak Wajib Jika alamat KTP dan domisili sama"></textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Nomor Hp</label>
                <input type="text" name="no_hp" class="form-control" placeholder="081234567890" onkeypress="return event.charCode >= 48 && event.charCode <=57">
              </div>

              <div class="form-group">
                <label>Nomor Hp Darurat</label>
                <input type="text" name="no_hp_d" class="form-control" placeholder="081234567890" onkeypress="return event.charCode >= 48 && event.charCode <=57">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="email@example.com">
              </div>

              <div class="form-group">
                <label> Status Pekerja</label>
                <select name="status_users" class="form-control">
                  <option value="">--Pilih Status Pekerja --</option>
                  <option value="Probation">Probation</option>
                  <option value="Pekerja tetap">Pekerja Tetap</option>
                  <option value="Freelance">Freelance</option>
                  <option value="Resign">Resign</option>
                </select>
              </div>

              <div class="form-group">
                <label>Posisi/Jabatan</label>
                <input type="text" name="job" class="form-control" placeholder="Contoh : Programmer">
              </div>


              <div class="form-group">
                <label>Password Akun</label>
                <input type="password" name="password" class="form-control" placeholder="password">
              </div>

              <div class="form-group">
                <label> Role User</label>
                <select name="level" class="form-control">
                  <option value="">--Pilih Role User --</option>
                  <option value="HR" hidden>HR</option>
                  <option value="Direktur">Direktur</option>
                  <option value="Manajer">Manajer</option>
                  <option value="Karyawan">Karyawan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="">Jumlah Cuti </label>
                <input type="text" name="sisa_cuti" class="form-control" placeholder="" aria-describedby="helpId" placeholder="Cuti dalam 1 Tahun" onkeypress="return event.charCode >= 48 && event.charCode <=57">
              </div>

            </div>
          </div>

          <div class="col-md-3">

            <div class="form-group text-center">
              <img src="<?= base_url() ?>assets/gambar/icon/default-profile.png" alt="" width="200px" height="200px" id="gambar_load">
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Upload Gambar</label>
              <input type="file" class="form-control" id="preview_gambar" name="img">
            </div>

          </div>
        </div>



        <div class="row">
          <div class="col-md-6 text-left">
            <a href="<?= base_url('hr/divisi/users') ?>" class=" btn btn-outline-secondary">Batal</a>
          </div>
          <div class="col-md-6 text-right">
            <button type="submit" class="btn btn-outline-success">Simpan</button>
          </div>
        </div>


      </div>
      <?php echo form_close(); ?>
      <!--End Formulir-->
    </div>
  </div>

</div>



<script>
  $(function() {
    //Date range picker
    $('#reservationdate').datetimepicker({
      format: 'YYYY-MM-DD'
    });
    $('#reservationdate2').datetimepicker({
      format: 'YYYY-MM-DD'
    });
  })
</script>
<script>
  function bacaGambar(input) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#gambar_load').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }

  $("#preview_gambar").change(function() {
    bacaGambar(this);
  });
</script>