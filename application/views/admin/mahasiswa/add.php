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
            <form class="form-horizontal">
              <div class="control-group">
                <label class="control-label" for="nim">NIM</label>
                <div class="controls">
                  <input type="text" id="nim" placeholder="NIM">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="nama">Nama</label>
                <div class="controls">
                  <input type="text" id="nama" placeholder="Nama Mahasiswa">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="nim">Prodi</label>
                <div class="controls">
                  
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="tgl_lahir">Tanggal Lahir</label>
                <div class="controls">
                  <input type="text" id="tgl_lahir">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="angkatan">Angkatan</label>
                <div class="controls">
                  <input type="text" id="angkatan" placeholder="2009">
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