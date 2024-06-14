<?= $this->extend('app') ?>

<?= $this->section('main') ?>
<section class="bg-gradient vh-100 p-0">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center gap-5" style="min-height: 90vh;">
            <img src="<?= base_url('images/logo-white-comp.png') ?>" class="opacity-25">
            <div class="text-center">
                <h1 class="h4 fw-bold mb-2">Halaman Sedang Dalam Pemeliharaan</h1>
                <p>Mohon maaf mengganggu kenyamanan anda.<br>Kami sedang melakukan pemeliharaan, halaman ini akan tersedia segera.</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>