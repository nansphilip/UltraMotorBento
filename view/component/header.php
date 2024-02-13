<?php $connected; ?>

<header class="d-flex flex-row" style="height: 3rem;">
    <a class="link-dark link-underline link-underline-opacity-0 d-flex flex-row bg-300 me-2 mb-2 px-3 py-1 rounded-3" href="index.php">
        <img class="object-fit-cover me-2" src="/static/img/Logo.webp" alt="Logo">
        <h1 class="d-flex fs-3 mb-0">Ultra Motor</h1>
    </a>
    <nav class="d-flex f-row gap-3 justify-content-end align-items-center bg-300 mb-2 px-2 py-1 rounded-3 flex-grow-1 pe-3">
        <a class="<?php if ($page == "home") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php">Accueil</a>
        <a class="<?php if ($page == "vehicle-detail") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?p=vehicle-detail">Véhicules d'occasion</a>
        <a class="<?php if ($page == "review") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?p=review">Avis clients</a>
        
        <?php if ($connected == true) : ?>
        <a class="<?php if ($page == "edition") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?p=edition">Édition</a>
        <?php else : ?>
        <a class="<?php if ($page == "quote-request") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?p=quote-request">Demander un devis</a>
        <?php endif ?>

        <!-- <a href="index.php?p=error">Error</a> -->
    </nav>
</header>