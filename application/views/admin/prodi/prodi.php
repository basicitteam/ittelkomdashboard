<div class="span10">
    <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
              <li>Kelola Data Prodi</li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <a href="#modal-tambah" class="btn btn-primary pull-right" data-toggle="modal">Tambah</a>
        </div>
    </div>
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <table class="table">
            	<thead>
            		<tr>
            			<th>No.</th>
            			<th>Prodi</th>
            			<th>Fakultas</th>
            			<th colspan="2">Action</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php
            		foreach ($prodi as $key) {
            		?>
            		<tr>
            			<td><?php echo $no++; ?>.</td>
            			<td><?php echo $key['prodi']; ?></td>
            			<td><?php echo $key['fakultas']; ?></td>
            			<td><button class="btn btn-primary">Edit</button></td>
            			<td><button class="btn btn-warning">Delete</button></td>
            		</tr>
            		<?php
            		}
            		?>
            	</tbody>
            </table>
        </div>
    </div>
</div><!-- End Span10 -->

<!-- Modal Tambah -->
<div id="modal-tambah" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Tambah Prodi</h3>
  </div>
  <div class="modal-body">
    <form action="<?php echo site_url('admin/prodi/add'); ?>" method="POST" class="form-horizontal">
    <div class="control-group">
    <label class="control-label" for="prodi">Prodi</label>
    <div class="controls">
      <input type="text" id="prodi" placeholder="Prodi" name="prodi">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="fakultas">Fakultas</label>
    <div class="controls">
      <select name="id_fakultas">
      <?php
      foreach ($fakultas as $key) {
      ?>
      <option value="<?php echo $key['id_fakultas']; ?>"><?php echo $key['fakultas']; ?></option>
      <?php
      }
      ?>
      </select>
    </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary">Submit</button>
    </form>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>