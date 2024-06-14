<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?> - Dirgantara Aviasi Nusantara</title>
    <meta name="description" content="<?= $description ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('images/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('images/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('images/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('site.webmanifest') ?>">
    <link rel="stylesheet" href="<?= base_url('stylesheets/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('stylesheets/style.css') ?>">
    <?= $this->renderSection('stylesheets') ?>
    <script src="https://kit.fontawesome.com/218d08c2f0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="bg-white shadow-sm py-2 px-0 p-md-3">
        <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand me-4" href="<?= base_url() ?>">
                    <img src="<?= base_url('images/logo-colored-comp.png') ?>" class="img-fluid" width="154px" height="32px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle S">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item fw-bold">
                            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Beranda</a>
                        </li>
                        <li class="nav-item fw-bold dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                            <ul class="dropdown-menu shadow-lg">
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('kata-pengantar') ?>">Kata Pengantar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('tentang') ?>">Tentang Kami</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('visi-misi') ?>">Visi dan Misi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item fw-bold">
                            <a class="nav-link" href="<?= base_url('#program') ?>">Program</a>
                        </li>
                        <li class="nav-item fw-bold">
                            <a class="nav-link" href="<?= base_url('#pelatihan') ?>">Pelatihan</a>
                        </li>
                        <li class="nav-item fw-bold">
                            <a class="nav-link" href="<?= base_url('#fasilitas') ?>">Fasilitas</a>
                        </li>
                        <li class="nav-item fw-bold">
                            <a class="nav-link" href="<?= base_url('#syarat') ?>">Syarat</a>
                        </li>
                    </ul>
                    <?php if($name != 'form'): ?>
                        <a href="<?= base_url('daftar') ?>" class="btn btn-primary rounded-3">Daftar</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
    <main data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
        <?= $this->renderSection('main') ?>
    </main>
    <footer class="bg-tertiary">
        <section class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-start my-auto">
                    <img src="<?= base_url('images/logo-black-comp.png') ?>" class="img-fluid mb-4 mb-md-0">
                </div>
                <div class="col-md-8 text-center text-md-end my-auto">
                    <?php if($name != 'form'): ?>
                        <h6 class="d-md-inline me-2">Ingin bekerja di bandara?</h6>
                        <a href="<?= base_url('daftar') ?>" class="btn btn-primary rounded-3">Daftar Sekarang</a>
                    <?php endif; ?>
                </div>
                <div class="col-12 pt-5">
                    <div class="row border-top border-secondary border-opacity-25 pt-5">
                        <div class="col-md-3 pb-4 pb-md-0 pe-md-5">
                            <div class="w-100 rounded-3 mb-3"><iframe class="rounded-3" width="100%" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=250&amp;hl=en&amp;q=+(Dirgantara%20Aviasi%20Nusantara)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                            <p class="d-inline-block mb-0"><i class="fa-solid fa-location-dot text-muted me-2"></i>Jl. Ir. H. Juanda, Baledono, Purworejo, Jawa Tengah, 54119</p>
                        </div>
                        <div class="col-md-3 pb-4 pb-md-0 px-md-5">
                            <h6 class="text-primary mb-1 fw-bold">Profil</h6>
                            <ul class="ps-3 text-muted">
                                <li class="mb-1"><a href="<?= base_url('kata-pengantar') ?>" class="text-decoration-none text-dark">Kata Pengantar</a></li>
                                <li class="mb-1"><a href="<?= base_url('tentang') ?>" class="text-decoration-none text-dark">Tentang Kami</a></li>
                                <li class="mb-1"><a href="<?= base_url('visi-misi') ?>" class="text-decoration-none text-dark">Visi dan Misi</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 pb-4 pb-md-0 px-md-5">
                            <h6 class="text-primary mb-1 fw-bold">Links</h6>
                            <ul class="ps-3 text-muted">
                                <li class="mb-1"><a href="<?= base_url('daftar') ?>" class="text-decoration-none text-dark">Formulir</a></li>
                                <li class="mb-1"><a href="<?= base_url('pembayaran') ?>" class="text-decoration-none text-dark">Pembayaran</a></li>
                                <li class="mb-1"><a href="https://admin.dirgantaraaviasi.com" class="text-decoration-none text-dark">Admin</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 pb-4 pb-md-0 ps-md-5">
                            <h6 class="text-primary mb-1 fw-bold">Bantuan</h6>
                            <ul class="list-unstyled">
                                <li class="mb-1 text-dark"><i class="fa-solid fa-phone text-muted me-2"></i><?= $profile['contacts']['phone']['data'] ?></li>
                                <li class="mb-1 text-dark"><i class="fa-solid fa-envelope text-muted me-2"></i><?= $profile['contacts']['email']['data'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-3 pt-md-5">
                    <div class="row">
                        <div class="col-md-6 my-auto order-2 order-md-1">
                            <p class="mb-0 text-center text-md-start text-muted"><small>© 2021 CV. Dirgantara Aviasi Nusantara. All rights reserved.</small></p>
                        </div>
                        <div class="col-md-6 my-auto order-1 order-md-2 pb-4 pb-md-0">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end gap-3">
                                <a href="<?= $profile['socials']['instagram'] ?>" class="text-primary">
                                    <i class="fa-brands fa-square-instagram fa-xl"></i>
                                </a>
                                <a href="<?= $profile['socials']['facebook'] ?>" class="text-primary">
                                    <i class="fa-brands fa-facebook fa-xl"></i>
                                </a>
                                <a href="<?= $profile['socials']['twitter'] ?>" class="text-primary">
                                    <i class="fa-brands fa-twitter fa-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script type="text/javascript" src="<?= base_url('javascripts/bootstrap.bundle.min.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>
</hmtl>