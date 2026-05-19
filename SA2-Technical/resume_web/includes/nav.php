<?php
$navItems = [
    ['label' => 'Career Objective', 'href' => 'career-objective.php'],
    ['label' => 'Personal Information', 'href' => 'personal-information.php'],
    ['label' => 'Educational Attainment', 'href' => 'educational-attainment.php'],
    ['label' => 'Skills', 'href' => 'skills.php'],
    ['label' => 'Affiliation', 'href' => 'affiliation.php'],
    ['label' => 'Work Experience', 'href' => 'work-experience.php'],
];
?>
<nav class="nav-list">
    <?php foreach ($navItems as $item): ?>
        <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>">
            <span class="bullet">&bull;</span><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
        </a>
    <?php endforeach; ?>
</nav>
