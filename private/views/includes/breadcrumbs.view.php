<nav class="" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <?php if (isset($crumbs)) : ?>
            <?php foreach ($crumbs as $crumb) : ?>
                <li class="breadcrumb-item"><a href="<?= ROOT . $crumb[0] ?>"><?= $crumb[1]; ?></a></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ol>
</nav>