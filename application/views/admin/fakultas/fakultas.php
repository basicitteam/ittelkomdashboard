<div class="span10">
    <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
              <li>Kelola Data Fakultas</li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <?php echo $this->session->flashdata('msg'); ?>
            <a href="#modal-tambah" data-toggle="modal" class="btn btn-primary pull-right">Tambah</a>
        </div>
    </div>
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>No.</th>
            			<th>Fakultas</th>
            			<th colspan="2">Action</th>
            		</tr>
            	</thead>
                <tbody>
                    <?php
                    foreach ($fakultas as $key) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?>.</td>
                        <td><?php echo $key['fakultas']; ?></td>
                        <td><a href="<?php echo site_url('admin/fakultas/edit'); ?>" class="btn btn-primary" data-target="#modal-edit" data-toggle="modal">Edit</a></td>
                        <td><a href="<?php echo site_url('admin/fakultas/delete/'.$key['id_fakultas']); ?>" class="btn btn-warning">Delete</a></td>
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
    <h3 id="myModalLabel">Tambah Fakultas</h3>
  </div>
  <div class="modal-body">
    <form action="<?php echo site_url('admin/fakultas/add'); ?>" method="POST" class="form-horizontal">
    <div class="control-group">
    <label class="control-label" for="fakultas">Fakultas</label>
    <div class="controls">
      <input type="text" id="fakultas" placeholder="Fakultas" name="fakultas">
    </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary">Submit</button>
    </form>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<!-- Modal Edit -->
<div id="modal-edit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit Fakultas</h3>
  </div>
  <div class="modal-body">
    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>