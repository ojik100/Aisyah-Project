<?php $this->load->view('admin/templates/head.php') ?>
<?php $this->load->view('admin/templates/slide.php') ?>
<?php $this->load->view('admin/templates/nav.php') ?>
<!-- /#header -->
<!-- Content -->

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Status Gizi</strong>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="<?= base_url() ?>Status_gizi/add" class="btn btn-success btn-sm"><i
                                    class="fa fa-plus"></i> Add Status gizi</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('message')) :
                    	echo $this->session->flashdata('message');
               			 endif; ?>
                        <div class="table-responsive-sm">
                            <table id="table" class="table table-active">
                                <thead>
                                    <tr>
                                        <th>No</th>
										<th>Jenis Kelamin</th>
                                        <th>Status Gizi</th> 
                                        <th>Score</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
									$no = 1;
									foreach($status_gizi as $u){ 
									?>
                                    <tr>
                                        <td><?= $no++ ?></td>
										<td><?= $u->jk ?></td>
										<td><?= $u->status_gizi ?></td>
										<td><?= $u->score ?></td>
									    <td>
                                            <a href="<?= base_url() ?>Status_gizi/edit/<?= $u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> |
                                            <a href="<?= base_url() ?>Status_gizi/hapus/<?= $u->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<!-- /.content -->
<!-- Footer -->

<div class="clearfix"></div>

<!--Local Stuff-->
<?php $this->load->view('admin/templates/foot.php') ?>

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>
