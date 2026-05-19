<section class="section">
    <ul class="item-list">
        <?php foreach ($resume['experience'] as $job): ?>
            <li>
                <div class="item-title"><?= htmlspecialchars($job['role'], ENT_QUOTES, 'UTF-8') ?></div>
                <div class="item-subtitle">
                    <?= htmlspecialchars($job['company'], ENT_QUOTES, 'UTF-8') ?> |
                    <?= htmlspecialchars($job['period'], ENT_QUOTES, 'UTF-8') ?>
                </div>
                <div class="item-description"><?= htmlspecialchars($job['details'], ENT_QUOTES, 'UTF-8') ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
