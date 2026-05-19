<section class="section">
    <ul class="item-list">
        <?php foreach ($resume['affiliations'] as $affiliation): ?>
            <li><?= htmlspecialchars($affiliation, ENT_QUOTES, 'UTF-8') ?></li>
        <?php endforeach; ?>
    </ul>
</section>
