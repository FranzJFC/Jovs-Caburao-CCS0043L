<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Resume';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page">
        <table class="resume-table">
            <tr class="hero-row">
                <td class="avatar-cell">
                    <img src="<?= htmlspecialchars($profileImage, ENT_QUOTES, 'UTF-8') ?>" alt="Profile photo">
                </td>
                <td class="title-cell">
                    <div class="name"><?= htmlspecialchars($resume['name'], ENT_QUOTES, 'UTF-8') ?></div>
                    <div class="page-title"><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></div>
                    <div class="subtitle"><?= htmlspecialchars($resume['title'], ENT_QUOTES, 'UTF-8') ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="content-cell">
