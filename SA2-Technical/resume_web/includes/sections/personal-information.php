<section class="section">
    <div class="info-grid">
        <div class="label">Full Name</div>
        <div class="value"><?= htmlspecialchars($resume['name'], ENT_QUOTES, 'UTF-8') ?></div>

        <div class="label">Birthdate</div>
        <div class="value"><?= htmlspecialchars($resume['birthdate'], ENT_QUOTES, 'UTF-8') ?></div>

        <div class="label">Age</div>
        <div class="value"><?= htmlspecialchars($resume['age'], ENT_QUOTES, 'UTF-8') ?></div>

        <div class="label">Gender</div>
        <div class="value"><?= htmlspecialchars($resume['gender'], ENT_QUOTES, 'UTF-8') ?></div>

        <div class="label">Nationality</div>
        <div class="value"><?= htmlspecialchars($resume['nationality'], ENT_QUOTES, 'UTF-8') ?></div>

        <div class="label">Email</div>
        <div class="value"><?= htmlspecialchars($resume['email'], ENT_QUOTES, 'UTF-8') ?></div>

        <div class="label">Contact Number</div>
        <div class="value"><?= htmlspecialchars($resume['phone'], ENT_QUOTES, 'UTF-8') ?></div>

        <div class="label">Address</div>
        <div class="value"><?= htmlspecialchars($resume['address'], ENT_QUOTES, 'UTF-8') ?></div>
    </div>
</section>
