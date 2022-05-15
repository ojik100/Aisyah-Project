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
                        <strong class="card-title">Users</strong>
                    </div>

                    <div class="card-body">
                        <div class="container">
						<?php foreach($users as $u){ ?>
                            <form action="<?= base_url() ?>users/update" method="POST">
                                <div>
                                    <label for="">Nama Belita</label>
                                    <input type="text" class="form-control" placeholder="Enter nama" name="nama_belita"
                                        id="" required value="<?= $u->nama_belita ?>">
										<input type="hidden" class="form-control" placeholder="Enter nama" name="id"
                                        id="" required value="<?= $u->id ?>">
									
                                </div>
                                <div>
                                    <label for="">NIP</label>
                                    <input type="text" class="form-control" value="<?= $u->nip ?>" placeholder="Enter NIP" name="nip" id="" required>
                                </div>
                                <div>
                                    <label for="">Nama Ayah</label>
                                    <input type="text" class="form-control" value="<?= $u->nama_ayah ?>" placeholder="Enter ayah" name="nama_ayah"
                                        id="" required>
                                </div>
                                <div>
                                    <label for="">Nama Ibu</label>
                                    <input type="text" class="form-control" value="<?= $u->nama_ibu ?>" placeholder="Enter ibu" name="nama_ibu"
                                        id="" required>
                                </div>
                                <div>
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="checkbox" name="jk" id=""  value="Laki-Laki"> Laki-Laki
                                    <input type="checkbox" name="jk" id="" value="Perempuan"> Perempuan

                                </div>
								<div>
                                <label for="">Password</label>
                                 <input type="text" class="form-control" name="password" value="<?= $u->password  ?>" id="">
                                </div>
                                <div>
                                    <label for="">Level</label>
                                    <select name="level" class="form-control" id="" required>
                                        <option value="">No Selectd</option>
                                        <option value="Petugas" >Petugas</option>
                                        <option value="Bidan">Bidan</option>
                                    </select>
                                </div>
							

                                <br>
                                <div style="text-align:right;">
                                    <button class="btn btn-success btn-sm">Ubah Users</button>

                                </div>

                            </form>
							<?php } ?>
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
