<?php $this->load->view('admin/templates/head.php') ?>
<?php $this->load->view('admin/templates/slide.php') ?>
<?php $this->load->view('admin/templates/nav.php') ?>
<!-- /#header -->
<!-- Content -->

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-xl-12">

                <div class="card br-1">
                    <div class="card-body">
                        <h5 style="text-align:center">Grafig Pemeriksa Belita</h5><br>
                        <div class="">
                            <center> <canvas id="pieChart" style="max-width: 50%;"></canvas>
                                <br>
                                <p style="font-size:12px">Priode 2021/2022</p>
                            </center>
                            <div style="text-align:left">
                                <p><b>Red :</b> Total Belita Desa Rarak Rongse</p>
                                <p><b>Green :</b> Total Belita Melakukan Pemeriksaan</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card -->
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<div class="clearfix"></div>
<!--Local Stuff-->
<?php $this->load->view('admin/templates/foot.php') ?>

</body>

</html>
<script>
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["Red", "Green"],
        datasets: [{
            data: [75, 25],
            backgroundColor: ["#F7464A", "#46BFBD", ],
            hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", ]
        }]
    },
    options: {
        responsive: true
    }
});
</script>
</body>

</html>
