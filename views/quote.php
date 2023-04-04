<main class="quoteMain">
    <?php
    foreach ($quotes as $quote) { ?>
        <div class="quoteCard" style="background-image: url(assets/img/<?= $quote->nI; ?>);">
            <blockquote>
                <p> <?= $quote->content ?></p>
                <cite> <?= $quote->nA ?> </cite>
            </blockquote>
        </div>
    <?php
    }
    ?>
</main>