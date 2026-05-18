<?php
$story_id = 5;
require __DIR__ . "/data/stories.php";
$story = $stories[$story_id - 1];
$page_title = "Story 5 - " . $story["title"];
include __DIR__ . "/includes/header.php";
?>
<article class="story-page">
    <div class="story-hero">
        <img class="story-hero-image" src="<?php echo htmlspecialchars($story["image"], ENT_QUOTES, "UTF-8"); ?>" alt="<?php echo htmlspecialchars($story["title"], ENT_QUOTES, "UTF-8"); ?>" />
        <div class="story-hero-text">
            <p class="story-label">Story 5</p>
            <h2><?php echo htmlspecialchars($story["title"], ENT_QUOTES, "UTF-8"); ?></h2>
        </div>
    </div>
    <?php foreach ($story["content"] as $paragraph) { ?>
        <p><?php echo htmlspecialchars($paragraph, ENT_QUOTES, "UTF-8"); ?></p>
    <?php } ?>
    <p class="story-back"><a href="index.php">Back to all stories</a></p>
</article>
<?php include __DIR__ . "/includes/footer.php"; ?>
