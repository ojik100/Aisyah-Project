<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/owl.carousel.min.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/admin/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/style.css">

    <title>Login</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= base_url() ?>assets/login/images/undraw_remotely_2j6y.svg" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <img src="<?= base_url() ?>assets/admin/logo.png" width="20%" alt="">
                                <h3>Sign In</h3>

                                <p class="mb-4">Sistem Penentuan Keputusan Penentuan Status Gizi.</p>
                                <?php echo $this->session->flashdata('msg');?>
                            </div>
                            <form action="<?= base_url() ?>Login/auth" method="post">
                                <div class="form-group first">
                                    <label for="username">NIP</label>
                                    <input type="text" class="form-control" id="username" name="nip">

                                </div>
                                <br>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>
                                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                                <span class="d-block text-left my-4 text-muted">&mdash; Already have an account?
                                    &mdash;</span>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Sign Up</a></span>

                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="<?= base_url() ?>assets/login/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/login/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/login/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/login/js/main.js"></script>
</body>

</html>
