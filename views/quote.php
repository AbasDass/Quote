<main class="quoteMain">
    <?php
    foreach ($quotes as $quote) { ?>
        <div class="quoteCard" style="background-image: url(/<?= $quote->image; ?>);">
        <a class="lienCitation" href="modifier?idUpdate=<?= $quote->id ?>">
            <blockquote>
                <p class="textQuote"> <?= $quote->content ?></p>
                <cite> <?= $quote->username ?> </cite>
            </blockquote>
        </a>
        </div>
    <?php
    }
    ?>
</main>