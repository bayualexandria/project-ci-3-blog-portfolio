<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= base_url('asset/frontend/img/icon.png') ?>" type="image/x-icon">
    <title>About use</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="asset/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('asset/frontend/vendor/fontawesome/css/all.css') ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?= base_url('asset/frontend/css/material-kit.css?v=2.0.7') ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('asset/frontend/demo/demo.css') ?>" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top: 10%;">
                    <div class="ml-3 mt-3">
                        <a href="<?= base_url('/');?>">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="card-body text-center mt-5 p-0">
         
                        <img src="" alt="" class="rounded-circle w-25">

                        <h4 class="text-bold">Name</h4>
                        <h5 class="text-muted">Email</h5>
                        <p>
                            Website ini menggunakan freamwork Laravel versi 8 untuk pembuatanya
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url('asset/frontend/js/core/jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('asset/frontend/js/core/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('asset/frontend/js/core/bootstrap-material-design.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('asset/frontend/js/plugins/moment.min.js') ?>"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="<?= base_url('asset/frontend/js/plugins/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?= base_url('asset/frontend/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('asset/frontend/js/material-kit.js?v=2.0.7') ?>" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
        });


        function scrollToDownload() {
            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>
</body>

</html>