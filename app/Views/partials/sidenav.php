<ul class="list-unstyled">
    <li class="<?= $name == 'foreword' ? 'bg-secondary' : 'bg-tertiary' ?> p-3 rounded-3 mb-3">
        <a href="<?= base_url('kata-pengantar') ?>" class="text-decoration-none fw-bold <?= $name == 'foreword' ? 'text-white' : 'text-primary' ?>">
            Kata Pengantar
        </a>
    </li>
    <li class="<?= $name == 'about' ? 'bg-secondary' : 'bg-tertiary' ?> p-3 rounded-3 mb-3">
        <a href="<?= base_url('tentang') ?>" class="text-decoration-none fw-bold <?= $name == 'about' ? 'text-white' : 'text-primary' ?>">
            Tentang Kami
        </a>
    </li>
    <li class="<?= $name == 'vision' ? 'bg-secondary' : 'bg-tertiary' ?> p-3 rounded-3 mb-3">
        <a href="<?= base_url('visi-misi') ?>" class="text-decoration-none fw-bold <?= $name == 'vision' ? 'text-white' : 'text-primary' ?>">
            Visi & Misi
        </a>
    </li>
</ul>