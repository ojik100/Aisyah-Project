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
                        <strong class="card-title">Penilaian</strong>
                    </div>
                    <div class="card">
                        <div class="card-body">
                             <?php 
									$no = 1;
									foreach($dataimt as $u){ 
									?>
									<p><?= $u ?></p>
						
                            <?php if ($u <= 10): ?>
                            <p>Berat Kurang</p>
                            <?php elseif ($u >= 10 && $u <= 20): ?>
                            <p>Berat Badan Normal</p>
                            <?php elseif ($u  > 20 && $u  <=30): ?>
                            <p>Berat Badan Berlebih</p>
                            <?php else: ?>
                            <p>Berat Badan Obesitas</p>
                           
                            <?php endif; ?>

                            <?php }?> 
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-active">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Sex</th>
                                    <th>BB(Kg)</th>
                                    <th>TB(Tb)</th>
                                    <th>Umur(Bulan)</th>
                                    <th>BBU</th>
                                    <th>PBU TBU</th>
                                    <th>BPPB </th>
                                    <th>BBU</th>
                                    <th>BBPB</th>
                                    <th>Status Gizi</th>
                                    <th>Score</th>
                                    <th>Validasi</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
									$no = 1;
									foreach($nilai as $d){ 
									?>
                                <tr>
                                    <td>1</td>
                                    <td><?= $d->nama_belita ?></td>
                                    <td><?= $d->jk ?></td>
                                    <td>10</td>
                                    <td>50</td>
                                    <td>100</td>
                                    <td>Normal</td>
                                    <td>Normal</td>
                                    <td>-0.17</td>
                                    <td>-0.96</td>
                                    <td>0.44</td>
                                    <td>Gizi Normal</td>
                                    <td>51.00</td>
                                    <td>Sesuai</td>
                                </tr>
										<?php }?>
                            </tbody>


                        </table>
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
