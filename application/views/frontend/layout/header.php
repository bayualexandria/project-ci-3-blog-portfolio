<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('asset/frontend/img/icon.png') ?>" type="image/x-icon">
    <title><?= $title??'' ?></title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> 
    <link rel="stylesheet" href="<?= base_url('asset/frontend/vendor/fontawesome/css/all.css') ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?= base_url('asset/frontend/css/material-kit.css?v=2.0.7') ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('asset/frontend/demo/demo.css') ?>" rel="stylesheet" />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">
    <style>
        pre code {
            background-color: #eee;
            border: 1px solid #999;
            display: block;
            padding: 20px;
        }
    </style>
</head>

<body class="<?= $css?> sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?= base_url('/') ?>" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: bold;margin-top: -15px;">
                    <img src="<?= base_url('asset/frontend/img/logo.png') ?>" class="rounded-circle img-fluid" alt="" style="width: 45px;box-shadow: 1px 1px -1px -1px rgba(255, 255, 255, 0.4);border: 1px solid rgba(255, 255, 255, 0.1);" /> b@yu 4lex@ndr!4</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Komponen
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="<?= base_url('kategorimateri') ?>" class="dropdown-item">
                                <i class="material-icons">layers</i> Materi
                            </a>
                            <a href="<?= base_url('blog') ?>" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Blog
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://github.com/bayualexandria/project-porfolio-project-laravel-8" onclick="scrollToDownload()">
                            <i class="material-icons">cloud_download</i> Download
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/b4yu_4lex4ndri4" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/bayu.alexandria.315" target="_blank" data-original-title="Add us on Facebook" rel="nofollow">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/bayualexandria13/" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>