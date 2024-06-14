<?= $this->extend('layouts/app') ?>

<?= $this->section('main') ?>
<?= $this->include('partials/breadcrumb') ?>
<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center">Visi</h2>
                <p class="text-center mt-4">
                    Menjadi lembaga pelatihan kerja dibidang pelayanan penerbangan berkompeten dengan menciptakan sumber daya manusia yang siap kerja.
                </p>
                <h2 class="text-center">Misi</h2>
                <ol type="0" class="mt-4">
                    <li>Mengembangkan pelatihan dengan metode dan sistem yang modern dan berwawasan tentang penerbangan.</li>
                    <li>Mengimplementasikan sistem dan metode pelatihan bidang pelayanan penerbangan.</li>
                    <li>Meningkatkan kualitas sumber daya pelatihan sesuai dengan update regulasi bidang penerbangan.</li>
                    <li>Mencetak sumber daya manusia yang cakap, terampil, dan siap kerja dengan kualifikasi khusus sesuai dengan standar dari perusahaan bidang penerbangan.</li>
                    <li>Mengembangkan jejaring kemitraan dan komunikasi dengan perusahaan-perusahaan bidang penerbangan baik dalam negeri maupun luar negeri guna memaksimalkan terserapnya peserta pelatihan ke dunia kerja secara cepat dan tepat.</li>
                </ol>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <?= $this->include('partials/sidenav') ?>
            </div>
        </div>
    </div>
</section>
<?= $this->include('partials/before-footer') ?>
<?= $this->endSection() ?>