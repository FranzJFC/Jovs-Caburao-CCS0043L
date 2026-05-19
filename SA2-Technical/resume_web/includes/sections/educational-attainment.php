<section class="section">
    <ul class="item-list">
        <?php foreach ($resume['education'] as $education): ?>
            <li>
                <div class="item-title"><?= htmlspecialchars($education['program'], ENT_QUOTES, 'UTF-8') ?></div>
                <div class="item-subtitle">
                    <?= htmlspecialchars($education['school'], ENT_QUOTES, 'UTF-8') ?> |
                    <?= htmlspecialchars($education['year'], ENT_QUOTES, 'UTF-8') ?>
                </div>
                <div class="item-description"><?= htmlspecialchars($education['details'], ENT_QUOTES, 'UTF-8') ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
