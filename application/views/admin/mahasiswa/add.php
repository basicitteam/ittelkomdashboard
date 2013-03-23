<div class="span10">
    <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
              <li>Tambah Mahasiswa</li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <form class="form-horizontal" action="<?php echo site_url('admin/mahasiswa/add_proses'); ?>" method="POST">
              <div class="control-group">
                <label class="control-label" for="nim">Prodi</label>
                <div class="controls">
                  <select name="id_prodi">
                  <?php
                  foreach ($prodi as $key) {
                  ?>
                  <option value="<?php echo $key['id_prodi']; ?>" <?php echo set_select('id_prodi', $key['id_prodi']); ?>><?php echo $key['prodi']; ?></option>
                  <?php
                  }
                  ?>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="nim">NIM</label>
                <div class="controls">
                  <input type="text" id="nim" placeholder="NIM" name="nim" value="<?php echo set_value('nim'); ?>">
                  <?php echo form_error('nim'); ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="nama">Nama</label>
                <div class="controls">
                  <input type="text" id="nama" placeholder="Nama Mahasiswa" name="nama_mahasiswa" value="<?php echo set_value('nama_mahasiswa'); ?>">
                  <?php echo form_error('nama_mahasiswa'); ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="tgl_lahir">Tanggal Lahir</label>
                <div class="controls">
                  <input type="text" id="tgl_lahir" class="datepicker" name="tgl_lahir" value="<?php echo set_value('tgl_lahir'); ?>">
                  <?php echo form_error('tgl_lahir'); ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="angkatan">Angkatan</label>
                <div class="controls">
                  <input type="text" id="angkatan" placeholder="2009" name="angkatan" value="<?php echo set_value('angkatan'); ?>">
                  <?php echo form_error('angkatan'); ?>
                </div>
              </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <a href="<?php echo site_url('admin/mahasiswa'); ?>" type="button" class="btn">Cancel</a>
            </div>
            </form>
        </div>
    </div>
</div><!-- End Span10 -->