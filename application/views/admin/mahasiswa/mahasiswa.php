<div class="span10">
    <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
              <li>Kelola Data Mahasiswa</li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <?php echo $this->session->flashdata('msg'); ?>
            <a href="<?php echo site_url('admin/mahasiswa/add'); ?>" class="btn btn-primary pull-right">Tambah Mahasiswa</a>
        </div>
    </div>
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <table class="table">
            	<thead>
            		<tr>
            			<th>No.</th>
            			<th>NIM</th>
            			<th>Nama</th>
            			<th>Angkatan</th>
            			<th>Prodi</th>
            			<th colspan="3">Action</th>
            		</tr>
            	</thead>
                <body>
                    <?php
                    foreach ($mahasiswa as $key) {
                    ?>
                    <tr>
                    <td><?php echo $no++; ?>.</td>
                    <td><?php echo $key['nim']; ?></td>
                    <td><?php echo $key['nama_mahasiswa']; ?></td>
                    <td><?php echo $key['angkatan']; ?></td>
                    <td><?php echo $key['prodi']; ?></td>
                    <td><button class="btn btn-info">View</button></td>
                    <td><a href="<?php echo site_url('admin/mahasiswa/edit/'.$key['nim']); ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="<?php echo site_url('admin/mahasiswa/delete/'.$key['nim']); ?>" class="btn btn-warning">Delete</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </body>
            </table>
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div><!-- End Span10 -->