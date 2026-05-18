<?php
$page_title = "Five Short Stories";
require __DIR__ . "/data/stories.php";
include __DIR__ . "/includes/header.php";
?>
<section class="intro">
	<p>Pick a story to read. Each card opens its own page.</p>
</section>
<section class="story-grid">
	<?php foreach ($stories as $story) { ?>
		<article class="story-card">
			<a class="story-link" href="<?php echo htmlspecialchars($story["file"], ENT_QUOTES, "UTF-8"); ?>">
				<img
					class="story-image"
					src="<?php echo htmlspecialchars($story["image"], ENT_QUOTES, "UTF-8"); ?>"
					alt="<?php echo htmlspecialchars($story["title"], ENT_QUOTES, "UTF-8"); ?>"
				/>
				<h2><?php echo htmlspecialchars($story["title"], ENT_QUOTES, "UTF-8"); ?></h2>
				<p><?php echo htmlspecialchars($story["excerpt"], ENT_QUOTES, "UTF-8"); ?></p>
			</a>
		</article>
	<?php } ?>
</section>
<?php include __DIR__ . "/includes/footer.php"; ?>
