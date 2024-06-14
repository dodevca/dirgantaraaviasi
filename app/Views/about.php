<?= $this->extend('layouts/app') ?>

<?= $this->section('main') ?>
<?= $this->include('partials/breadcrumb') ?>
<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center">Tentang Dirgantara Aviasi Nusantara</h2>
                <p class="mt-4">
                    Lembaga pelatihan Dirgantara Aviasi Nusantara adalah sebuah pelatihan yang didirikan di kota Purworejo yang mana lokasi relatif dekat dengan Bandara baru Yogyakarta International Airport (YIA) kulonprogo, didirikan oleh organisasi yang sudah berpengalaman di dunia aviasi untuk membantu para calon sumber daya manusia yang mencari keterampilan khususnya bidang aviasi atau penerbangan.
                    <br><br>
                    Proses pelatihan diampu oleh instruktur yang masih aktif di dunia penerbangan dengan segudang pengalaman didalamnya.
                    <br><br>
                    Lembaga Dirgantara Aviasi Nusantara juga bekerja sama secara langsung dengan salah satu perusahaan Ground Handling Maskapai terbesar di Indonesia yang tersebar di 26 bandara dalam hal sertifikasi awareness, pelatihan keahlian khusus berlisensi, program On Job Training (magang kerja), dan proses penyerapan tenaga kerja.
                </p>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <?= $this->include('partials/sidenav') ?>
            </div>
        </div>
    </div>
</section>
<?= $this->include('partials/before-footer') ?>
<?= $this->endSection() ?>