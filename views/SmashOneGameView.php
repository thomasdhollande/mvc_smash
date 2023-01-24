<section id="smashOneGame" class="top-section">

        <div><?= $smashOneGame->getName() ?></div>
        <div><?= $smashOneGame->getDateRelease() ?></div>
        <iframe src=<?= $smashOneGame->allVideos() ?>>
        </iframe>

</section>