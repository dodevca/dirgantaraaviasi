<?= $this->extend('layouts/app') ?>

<?= $this->section('main') ?>
<?= $this->include('partials/breadcrumb') ?>
<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center mb-2">Kata Pengantar</h2>
                <p class="mt-4">
                    Permintaan akan tenaga kerja bidang pelayanan penerbangan yang memenuhi standar kerja adalah hal kompetensi masuk dunia industri penerbangan masih banyak harus diberikan pelatihan melalui Program Pelatihan Kerja Khusus. Karena hal tersebut kami membuka Lembaga Pelatihan guna memenuhi kebutuhan sesuai standart dari perusahaan penerbangan baik dalam bidang pelayanan maupun spesifikasi khusus.
                    <br><br>
                    Dalam memenuhi hal ini kami Lembaga Pelatihan Penerbangan yaitu Dirgantara Aviasi Nusantara yang berdiri di Kabupaten Purworejo ikut berpartisipasi dan berperan aktif untuk bisa membantu memberikan keterampilan dalam mencarikan kerja berharap akan sangat bermanfaat sekali bagi masyarakat dan siswa-siswi yang baru lulus dari Sekolah Menengah Kejuruan/Sederajat.
                    <br><br>
                    Kegiatan ini dapat berjalan dengan baik, apabila mendapatkan dukungan berbagai pihak yang terkait. Harapan kami Lembaga Pelatihan Penerbangan Dirgantara Aviasi Nusantara dapat membantu hal pelatihan untuk meningkatkan kompetensi dan keterampilan khusus.
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