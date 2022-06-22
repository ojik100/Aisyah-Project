<?php $this->load->view('admin/templates/head.php') ?>
<?php $this->load->view('admin/templates/slide.php') ?>
<?php $this->load->view('admin/templates/nav.php') ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

<!-- /#header -->
<!-- Content -->

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Laporan</strong>
                    </div>
                    <div class="card">
                        <div class="card-body">
                           
						
                  <div class="row">
				  <div class="col-md-2">
				  <span>Pilih dari tanggal</span>
				  <div class="input-group">
				    <input type="text" placeholder="mm/dd/yyyy" class="form-control pickdate date_range_filter" name="" >
				    <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar"></span></span>
				  </div>
				</div>
			
				<div class="col-md-2">
				  <span>Sampai tanggal</span>
				  <div class="input-group">
				    <input type="text" placeholder="mm/dd/yyyy" class="form-control pickdate date_range_filter2" name="">
				    <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar"></span></span>
				  </div>
				</div>
				  </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="tabledata"  class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
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
                                    <td><?=$d->created_at  ?></td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		var table = $('#tabledata').DataTable({
			"order": [[ 1, "desc" ]],
			"ordering": true
		});
		$.fn.dataTable.ext.search.push(
			function(settings, data, dataIndex) {
			  var min = $('.date_range_filter').val();
			  var max = $('.date_range_filter2').val();
			  var createdAt = data[0];  // -> rubah angka 4 sesuai posisi tanggal pada tabelmu, dimulai dari angka 0
			  if (
			    (min == "" || max == "") ||
			    (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
			  ) {
			    return true;
			  }
			  return false;
			}
		);
	    $('.pickdate').each(function() {
	        $(this).datepicker({format: 'mm/dd/yyyy'});
	     });
		$('.pickdate').change(function() {
	        table.draw();
	    });		
	});
// $(document).ready(function() {
	
//     $('#table').DataTable();
// });
</script>
