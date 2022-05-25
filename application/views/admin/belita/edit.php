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
                        <strong class="card-title">Belita</strong>
                    </div>
                    <div class="card-body">
                        <div class="container">
						<?php foreach($belita as $u){ ?>
                            <form action="<?= base_url() ?>Belita/update" method="POST">
                                <div>
                                    <input type="hidden" class="form-control" placeholder="ID User" name="id_users" id=""
                                        value="<?= $this->session->userdata('id') ?>">
                                </div>
								<div>
                                    <input type="hidden" class="form-control" placeholder="ID User" name="id" id=""
                                        value="<?= $u->id ?>">
                                </div>
                                <div>
                                    <label for="">Nama Pemeriksa</label>
                                    <input type="text" class="form-control" placeholder="Enter nama pemeriksa"
                                        name="nama_pemeriksa" id="" value="<?= $u->nama_pemeriksa ?>" required>
                                </div>
                                <div>
                                    <label for="">Nama Belita</label>
                                    <input type="text" class="form-control" placeholder="Enter nama belita"
                                        name="nama_belita" id="" value="<?= $u->nama_belita ?>" required>
                                </div>
								<div>
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="checkbox" name="jk" id="" value="L"> Laki-Laki
                                    <input type="checkbox" name="jk" id="" value="P"> Perempuan

                                </div>
                                <div>
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" class="form-control" placeholder="" name="tgl_lhr" id=""
                                        required  value="<?= $u->tgl_lhr ?>">
                                </div>
                                <div>
                                    <label for="">Nama Ayah</label>
                                    <input type="text" class="form-control" placeholder="Enter ayah" name="nama_ayah"
                                        id="" required value="<?= $u->nama_ayah ?>">
                                </div>
                                <div>
                                    <label for="">Nama Ibu</label>
                                    <input type="text" class="form-control" placeholder="Enter ibu" name="nama_ibu"
                                        id="" required  value="<?= $u->nama_ibu ?>">
                                </div>
                                <div>
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="" cols="30" rows="2"
                                        placeholder="Enter Alamat"><?= $u->alamat ?></textarea>
                                </div>
                                <div>
                                    <label for="">Kontak Orang Tua</label><br>
                                    <input type="text" class="form-control" name="no_ortu" placeholder="Enter Nomor Tlp"
                                        required value="<?= $u->no_ortu ?>">
                                </div>
                                <br>
                                <div style="text-align:right;">
                                    <button class="btn btn-success btn-sm">Update Belita</button>
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
