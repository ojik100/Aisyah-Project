<body>

    <div id="right-panel" class="right-panel">
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?= base_url() ?>Home"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                        </li>
                        <li class="menu-title">Master Data</li><!-- /.menu-title -->
                        <li class="active">

                        <li>
                            <?php if($this->session->userdata('akses') =="Admin"):?>
                            <a href="<?= base_url() ?>Users"><i class="menu-icon fa fa-users"></i>Users </a>
                            <a href="<?= base_url() ?>Belita"><i class=" menu-icon fa fa-users"></i>Belita </a>
                            <a href="<?= base_url() ?>Indikator"><i class="menu-icon fa fa-bar-chart-o"></i>Indikator </a>
                            <a href="<?= base_url() ?>Status_gizi"><i class="menu-icon fa fa-pagelines"></i>Status Gizi </a>
                            <a href="<?= base_url() ?>Keanggotaan"><i class="menu-icon fa fa-users"></i>Keanggotaan </a>
                            <a href="<?= base_url() ?>Penilaian"><i class="menu-icon fa fa-check-square-o"></i>Penilaian </a>
                            <?php endif;?>
                            <?php if($this->session->userdata('akses') =="Bidan"):?>
                            <a href="<?= base_url() ?>Belita"><i class=" menu-icon fa fa-users"></i>Belita </a>
                            <a href="<?= base_url() ?>Indikator"><i class="menu-icon fa fa-bar-chart-o"></i>Indikator </a>
                            <a href="<?= base_url() ?>Status_gizi"><i class="menu-icon fa fa-pagelines"></i>Status Gizi </a>
                            <a href="<?= base_url() ?>Keanggotaan"><i class="menu-icon fa fa-users"></i>Keanggotaan </a>
                            <a href="<?= base_url() ?>Penilaian"><i class="menu-icon fa fa-check-square-o"></i>Penilaian </a>
                            <?php endif;?>
                            <?php if($this->session->userdata('akses') =="Petugas"):?>
                            <a href="<?= base_url() ?>Belita"><i class=" menu-icon fa fa-users"></i>Belita </a>
                            <a href="<?= base_url() ?>Indikator"><i class="menu-icon fa fa-bar-chart-o"></i>Indikator </a>
                            <a href="<?= base_url() ?>Status_gizi"><i class="menu-icon fa fa-pagelines"></i>Status Gizi </a>
                            <a href="<?= base_url() ?>Keanggotaan"><i class="menu-icon fa fa-users"></i>Keanggotaan </a>
                            <a href="<?= base_url() ?>Penilaian"><i class="menu-icon fa fa-check-square-o"></i>Penilaian </a>
                            <?php endif;?>
								
                        </li>


						

						<?php if($this->session->userdata('akses') =="Admin"):?>
                         <li class="menu-title">Laporan</li>
                        <li>
                            <a href="<?= base_url() ?>Laporan"><i class="menu-icon fa fa-print"></i>Laporan </a>
                        </li>
						<?php endif;?>
                        <li class="menu-title">Pengaturan</li><!-- /.menu-title -->
                        <li>
                            <a href="<?= base_url() ?>Login/logout"><i class="menu-icon fa fa-sign-out"></i>Keluar </a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
