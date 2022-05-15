<header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="<?= base_url() ?>assets/admin/logo.png" width="15%"  alt="Logo" >  <?= $this->session->userdata('akses') ?></a>
                    <a class="navbar-brand hidden" href="./"><img src="<?= base_url() ?>assets/admin/logo.png" alt="Logo"></a> 
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
					
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-user"></i></button>
                        <div class="form-inline">
                        </div>
                        <div class="dropdown for-notification">
                          <p><?= $this->session->userdata('nama') ?></p>
                        </div>

                     
                    </div>


                </div>
            </div>
        </header>
