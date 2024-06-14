<?= $this->extend('layouts/app') ?>

<?= $this->section('main') ?>
<section class="" id="jumbotron">
    <div class="container pb-4">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h6>Training Staff Penerbangan</h6>
                <h1 class="jumbotron-title">Dirgantara<br>Aviasi<br>Nusantara</h1>
                <p class="text-muted">Bekerja sama secara langsung dengan salah satu Ground Handling Maskapai terbesar di Indonesia dalam hal penyaluran kerja dan On Job (magang kerja)</p>
                <a href="<?= base_url('tentang') ?>" class="btn btn-primary rounded-3">Lebih lanjut<i class="fa-solid fa-chevron-right ms-2"></i></a>
            </div>
            <div class="col-md-6 text-center p-4">
                <img src="<?= base_url('images/jumbotron-image.png') ?>" class="w-100 h-auto">
            </div>
        </div>
    </div>
</section>
<section class="bg-tertiary">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-center px-5">
                <img src="<?= base_url('images/section-1.png') ?>" class="section-image rounded-3">
            </div>
            <div class="col-md-7 my-auto">
            <p>Dirgantara Aviasi Nusantara membuka pendaftaran dengan kuota hanya 25 siswa setiap bulannya.</p>
            <h2 class="mb-4">Daftarkan diri anda segera!<br>Kuota terbatas!</h2>
            <a href="<?= base_url('daftar') ?>" class="btn btn-primary">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
<section class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-7 my-auto">
                <h2 class="mb-4">Apa yang membedakan Dirgantara Aviasi Nusantara dengan lembaga pelatihan lain?</h2>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-3"><i class="fa-solid fa-circle-check mt-1 me-2 text-muted"></i><p class="mb-0">Didirikan oleh organisasi yang sudah berpengalaman di dunia aviasi.</p></li>
                    <li class="d-flex align-items-start mb-3"><i class="fa-solid fa-circle-check mt-1 me-2 text-muted"></i><p class="mb-0">Pelatihan diampu oleh instruktur yang masih aktif di dunia penerbangan.</p></li>
                    <li class="d-flex align-items-start mb-3"><i class="fa-solid fa-circle-check mt-1 me-2 text-muted"></i><p class="mb-0">Bekerja sama secara langsung dengan salah satu perusahaan Ground Handling Maskapai terbesar di Indonesia yang tersebar di 26 bandara.</p></li>
                </ul>
            </div>
            <div class="col-md-5 text-center px-5">
                <img src="<?= base_url('images/section-2.png') ?>" class="section-image rounded-3">
            </div>
        </div>
    </div>
</section>
<section id="program" class="bg-tertiary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center text-md-start mb-4">Apa saja jenis pelatihan yang dapat diambil?</h2>
            </div>
            <div class="col-md-6">
                <h6 class="text-center text-md-end">Program Studi Dirgantara Aviasi Nusantara</h6>
            </div>
            <div class="col-12 mt-4">
                <div class="d-flex flex-wrap align-items-center justify-content-center gap-5">
                    <div class="item d-flex flex-column align-content-center justify-content-end rounded-3 p-3" style="background-image: url('/images/placeholder.png');max-width: 280px;height: 280px">
                        <div class="bg-white shadow rounded-3 px-3 py-2">
                            <h3 class="h6 text-center mb-0">Short Course</h3>
                            <p class="item-content mt-3 mb-0">Staff Maskapai Penerbangan yang bertugas di darat untuk memberikan pelayanan kepada customer</p>
                        </div>
                    </div>
                    <div class="item d-flex flex-column align-content-center justify-content-end rounded-3 p-3" style="background-image: url('/images/placeholder.png');max-width: 280px;height: 280px">
                        <div class="bg-white shadow rounded-3 px-3 py-2">
                            <h3 class="h6 text-center mb-0">GSE Operator</h3>
                            <p class="item-content mt-3 mb-0">Personel peralatan pelayanan darat untuk melaksanakan pengoperasian peralatan pelayanan darat</p>
                        </div>
                    </div>
                    <div class="item d-flex flex-column align-content-center justify-content-end rounded-3 p-3" style="background-image: url('/images/placeholder.png');max-width: 280px;height: 280px">
                        <div class="bg-white shadow rounded-3 px-3 py-2">
                            <h3 class="h6 text-center mb-0">AVSEC</h3>
                            <p class="item-content mt-3 mb-0">Security atau petugas keamanan yang bertugas menjaga dan menjamin keselamatan pengguna jasa penerbangan.</p>
                        </div>
                    </div>
                    <div class="item d-flex flex-column align-content-center justify-content-end rounded-3 p-3" style="background-image: url('/images/placeholder.png');max-width: 280px;height: 280px">
                        <div class="bg-white shadow rounded-3 px-3 py-2">
                            <h3 class="h6 text-center mb-0">Marshaller</h3>
                            <p class="item-content mt-3 mb-0">Juru parkir pesawat yang bertugas mengarahkan pilot untuk mengeluarkan pesawat dari apron maupun memarkirkan pesawat setelah landing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pelatihan">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-center mb-2">Masa Pelatihan</h2>
                <h6 class="text-center text-muted">Ada 2 jenis pelatihan yang akan ditempuh siswa</h6>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card rounded-3 card-1">
                            <div class="card-header bg-transparent border-0 p-3">
                                <h3 class="text-center text-md-start mb-0">Pelatihan & Materi</h3>
                            </div>
                            <div class="card-body">
                            Pelatihan teori dilaksanakan di lembaga selama satu bulan di setiap hari senin sampai dengan sabtu dengan sistem full day training dimulai dari jam 08.00 - 16.00 (7 jam sehari).
                            <br><br>
                            Total waktu teori yang akan ditempuh lembaga sampai dengan selesai adalah 182 jam.
                            <br><br>
                            Tambahan kelas teori akan dilaksanakan oleh salah satu perusahaan Ground Handling Maskapai yang ber-afiliasi dengan lembaga Dirgantara Aviasi Nusantara.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card rounded-3 card-2">
                            <div class="card-header bg-transparent border-0 p-3">
                                <h3 class="text-center text-md-start mb-0">On Job Training (Magang Kerja)</h3>
                            </div>
                            <div class="card-body">
                            Program on job training (magang kerja) adalah kegiatan lanjutan berupa praktek kerja langsung di Bandara guna mengaplikasikan ilmu teori setelah menyelesaikan kegiatan pelatihan materi kelas.
                            <br><br>
                            Dalam hal ini para peserta pelatihan akan menjadi lebih matang untuk dipersiapkan menjadi ground staff yang berkompeten dan menguasai bidangnya.
                            <br><br>
                            Kegiatan on job training (magang kerja) di perusahaan akan ditempuh selama 2 bulan penuh menyesuaikan jadwal dari perusahaan sesuai dengan ketentuan yang berlaku.
                            <br><br>
                            Di program on job training (magang kerja) peserta akan ditempatkan di cabang perusahaan Ground Handling Maskapai yang telah berafiliasi dengan lembaga yang tersebar di bandara seleruh Indonesia.    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fasilitas">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-center mb-2">Fasilitas</h2>
                <h6 class="text-center text-muted">Fasilitas yang didapatkan selama masa pelatihan</h6>
            </div>
            <div class="col-12 mt-4">
                <div class="row align-items-center justify-content-center">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-temperature-low fa-3x text-primary mb-3"></i>
                        <p>Ruang kelas AC</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-person-chalkboard fa-3x text-primary mb-3"></i>
                        <p>Infocus projector</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-wifi fa-3x text-primary mb-3"></i>
                        <p>Free Wi-Fi</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-briefcase fa-3x text-primary mb-3"></i>
                        <p>Gratis informasi bursa kerja</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-clipboard-question fa-3x text-primary mb-3"></i>
                        <p>Gratis bimbingan perekrutan kerja</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-plane-departure fa-3x text-primary mb-3"></i>
                        <p>Bebas biaya OJT (magang kerja)</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-mug-hot fa-3x text-primary mb-3"></i>
                        <p>Coffee break selama teori</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-utensils fa-3x text-primary mb-3"></i>
                        <p>Makan siang selama teori</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-bed fa-3x text-primary mb-3"></i>
                        <p>Gratis tempat tinggal selama masa pelatihan</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-certificate fa-3x text-primary mb-3"></i>
                        <p>Gratis sertifikasi mandatory perusahaan</p>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 py-2 text-center">
                        <i class="fa-solid fa-book fa-3x text-primary mb-3"></i>
                        <p>Modul materi pembelajaran yang update</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="syarat">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 pe-md-5">
                <img src="<?= base_url('images/section-3.png') ?>" class="section-image rounded-3 mx-auto">
            </div>
            <div class="col-md-6 ps-md-5">
                <h2 class="text-center text-md-start mb-2">Syarat Pendaftaran</h2>
                <h6 class="text-center text-md-start ">Berlaku syarat-syarat sebagai berikut bagi calon siswa yang mendaftar</h6>
                <ol type="1" class="ps-3">
                    <li>Pria / Wanita usia 17 - 24 tahun</li>
                    <li>Minimal lulus SMA / sederajat</li>
                    <li>
                        Tinggi badan minimal :
                        <ul>
                            <li>Pria : 165cm</li>
                            <li>Wanita : 158cm</li>
                        </ul>
                    </li>
                    <li>Sehat jasmani dan rohani</li>
                    <li>Bersedia ditempatkan di mana saja</li>
                    <li>Tidak berkacamata dan buta warna</li>
                    <li>Mengisi formulir dan mengikuti tes seleksi lembaga</li>
                    <li>Berkelakuan baik dibuktikan dengan SKCK yang masih berlaku</li>
                    <li>Belum menikah</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section id="faq" class="bg-tertiary">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="text-center text-md-start mb-4">Yang sering ditanyakan</h2>
            </div>
            <div class="col-md-6">
                <h6 class="text-center text-md-end">Jawaban yang mungkin dapat membantu</h6>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlush">
            <div class="accordion-item rounded-top">
                <h2 class="accordion-header rounded-top">
                    <button class="accordion-button collapsed fw-bold rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Kenapa saya harus memilih Dirgantara Aviasi Nusantara, bukan yang lain?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                    <div class="accordion-body">
                        <p>Karena kami berafiliasi dan ditunjuk langsung dengan salah satu perusahaan ground handling terbesar di Indonesia bukan hanya sebatas kerjasama sementara.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Saya lulus SMA/SMK tetapi menggunakan ijazah paket c, apakah bisa?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                    <div class="accordion-body">
                        <p>Ijazah paket c bisa digunakan untuk mendaftar di tempat kami karena setara dengan SMA/SMK sederajat.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Apakah jika saya ingin bekerja di Fourbandara perlu mengikuti pelatihan di Dirgantara Aviasi Nusantara?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                    <div class="accordion-body">
                        <p>Sangat diperlukan, karena untuk bisa kerja di bandara diperlukan kompetensi khusus yang akan didapat secara detail teori maupun praktek.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Apakah setelah saya menyelesaikan pelatihan di Dirgantara Aviasi Nusantara akan disalurkan bekerja?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                    <div class="accordion-body">
                        <p>Kami bekerjasama secara langsung dengan perusahaan Ground Handling maskapai yang mempunyai cabang di 26 bandara Indonesia, setiap ada kebutuhan SDM dari perusahaan akan mengambil SDM dari Dirgantara Aviasi Nusantara.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Apakah pembayaran bisa diangsur?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                    <div class="accordion-body">
                        <p>Bisa, dengan ketentuan dilunasi sebelum program OJT (On Job Training) berjalan dan dengan miniman pembayaran sesuai dengan ketentuan yang ada.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item rounded-bottom">
                <h2 class="accordion-header rounded-bottom">
                    <button class="accordion-button collapsed fw-bold rounded-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Bisakah saya melamar di bidang lain setelah saya lulus dari Dirgantara Aviasi Nusantara? Misalnya pramugari.
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                    <div class="accordion-body">
                        <p>Sangat bisa, kami juga selalu menjalin komunikasi dengan beberapa perusahaan masakapai secara intensif.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->include('partials/before-footer') ?>
<?= $this->endSection() ?>