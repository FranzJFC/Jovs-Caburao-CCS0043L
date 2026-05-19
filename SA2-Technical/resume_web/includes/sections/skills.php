<section class="section">
    <div class="two-column">
        <div>
            <div class="section-label">Technical Skills</div>
            <ul class="item-list">
                <?php foreach ($resume['skills']['technical'] as $skill): ?>
                    <li><?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
            <div class="section-label">Soft Skills</div>
            <ul class="item-list">
                <?php foreach ($resume['skills']['soft'] as $skill): ?>
                    <li><?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
