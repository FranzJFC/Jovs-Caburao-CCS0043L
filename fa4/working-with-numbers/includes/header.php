<?php
if (!isset($page_title)) {
    $page_title = "Five Short Stories";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, "UTF-8"); ?></title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="page">
        <header class="site-header">
            <p class="kicker">Short Story Collection</p>
            <h1><?php echo htmlspecialchars($page_title, ENT_QUOTES, "UTF-8"); ?></h1>
            <nav class="site-nav">
                <a href="index.php">Home</a>
                <a href="story-1.php">Story 1</a>
                <a href="story-2.php">Story 2</a>
                <a href="story-3.php">Story 3</a>
                <a href="story-4.php">Story 4</a>
                <a href="story-5.php">Story 5</a>
            </nav>
        </header>
        <main class="content">
