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

                    <div class="card-body">
                        <div class="container">
                            <?php foreach($status_gizi as $u){ ?>
                            <form action="<?= base_url() ?>Status_gizi/update" method="POST">
                                <div>
                                    <label for="">Status Gizi</label>
                                    <select name="status_gizi" class="form-control" id="">
                                        <option value="">No Selecd</option>
                                        <option value="Gizi buruk">Gizi buruk</option>
                                        <option value="Gizi kurang">Gizi kurang</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Obesitas">Obesitas</option>
                                    </select>

                                    <input type="hidden" class="form-control" placeholder="Enter Status gizi " name="id"
                                        id="" value="<?= $u->id ?>" required>
                                </div>
                                <div>
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="checkbox" name="jk" id="" value="Laki-Laki"> Laki-Laki
                                    <input type="checkbox" name="jk" id="" value="Perempuan"> Perempuan

                                </div>
                                <div>
                                    <label for="">Score</label>
                                    <select name="score" class="form-control" id="">
                                        <option value="">No Selecetd</option>
                                        <option value="43">43 /Gizi buruk</option>
                                        <option value="49">49 / Gizi kurang</option>
                                        <option value="53">53 / Normal</option>
                                        <option value="70">70 /Gizi Lebih</option>
                                        <option value="82">83 /Obesitas</option>
                                    </select>
                                </div>
                                <br>
                                <div style="text-align:right;">
                                    <button class="btn btn-success btn-sm">Update Status Gizi</button>

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
