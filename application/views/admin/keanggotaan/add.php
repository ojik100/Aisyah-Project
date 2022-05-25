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
                        <strong class="card-title">Keanggotaan</strong>
                    </div>

                    <div class="card-body">
                        <div class="container">

                            <form action="<?= base_url() ?>Keanggotaan/save" method="POST">
                                <div>
                                    <label for="">Batas Atas</label>
                                    <input type="number" class="form-control" placeholder="Batas Atas" name="batas_atas"
                                        id="" required>
                                </div>
                                <div>
                                    <label for="">Batas Tengah</label>
                                    <input type="number" class="form-control" placeholder="Batas Tengah"
                                        name="batas_tengah" id="" required>
                                </div>
                                <div>
                                    <label for="">Batas Bawah</label>
                                    <input type="number" class="form-control" placeholder="batas Bawah"
                                        name="batas_bawah" id="" required>
                                </div>
                                <div>
                                    <label for="">Jk </label>
                                    <select name="id_indikator" class="form-control" id="">
                                        <option value="">No Selectd</option>
                                        <?php foreach($indikator as $row):?>
                                        <option value="<?php echo $row->id;?>"><?php echo $row->jk;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>


                                <div>
                                    <label for="">Variabel</label>
                                    <input type="text" class="form-control" placeholder="cth berat baddan,umur,dll"
                                        name="variabel" id="">
                                </div>
                                <div>
                                    <label for="">Keterangan</label>
                                    <input type="text" class="form-control" placeholder="keterangan" name="keterangan"
                                        id="">
                                </div>
                                <br>
                                <div style="text-align:right;">
                                    <button class="btn btn-success btn-sm">Tambah keanggotaan</button>

                                </div>

                            </form>
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
