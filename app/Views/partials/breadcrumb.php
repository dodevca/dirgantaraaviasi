<section class="container"> 
    <nav aria-label="breadcrumb" class="bg-light p-3 rounded-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>" aria-label="Beranda"><i class="fa-solid fa-house me-2"></i>Beranda</a>
            </li>
            <?php for($i = 0; $i < count($breadcrumb); $i++): ?>
                <?php if($i == count($breadcrumb) - 1): ?>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?= $breadcrumb[$i][0] ?>
                    </li>
                <?php else: ?>
                    <li class="breadcrumb-item">
                        <a href="<?= base_url($breadcrumb[$i][1]) ?>" aria-label="<?= $breadcrumb[$i][0] ?>"><?= $breadcrumb[$i][0] ?></a>
                    </li>
                <?php endif; ?>
            <?php endfor ?>
        </ol>
    </nav>
</section>