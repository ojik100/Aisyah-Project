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
                        <strong class="card-title">Indikator</strong>
                    </div>

                    <div class="card-body">
                        <div class="container">
						<?php foreach($indikator as $u){ ?>
                            <form action="<?= base_url() ?>Indikator/update" method="POST">
                                <div>
								<input type="hidden" class="form-control"name="id"
                                        id="" value="<?= $u->id ?>" required>
                                    <label for="">Usia Belita</label>
                                    <input type="text" class="form-control" placeholder="Di hitung Bualn ct 6 / bulan " name="usia_belita"
                                        id="" value="<?= $u->usia_belita ?>" required>
										
                                </div>
								<div>
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="checkbox" name="jk" id="" value="Laki-Laki"> Laki-Laki
                                    <input type="checkbox" name="jk" id="" value="Perempuan"> Perempuan

                                </div>
								<div>
                                    <label for="">Tinggi badan</label>
                                    <input type="number" value="<?= $u->tinggi_badan ?>" class="form-control" placeholder="Enter Tingi badan ct 10 cm" name="tinggi_badan"
                                        id="" required>
                                </div>
								<div>
                                    <label for="">Berat badan</label>
                                    <input type="number" class="form-control" placeholder="Enter Berat badan ct 10 kg" name="berat_badan"
                                        id="" value="<?= $u->berat_badan ?>" required>
                                </div>
                               

                                <br>
                                <div style="text-align:right;">
                                    <button class="btn btn-success btn-sm">Update Indikator</button>

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
