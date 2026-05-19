<?php
$fruits = [
    [
        'name' => 'Apple',
        'description' => 'Color: Red',
        'facts' => 'Apples provide fiber and vitamin C and can support heart health.',
        'image' => 'images/apple.svg',
    ],
    [
        'name' => 'Banana',
        'description' => 'Color: Yellow',
        'facts' => 'Bananas are a good source of potassium and quick energy.',
        'image' => 'images/banana.svg',
    ],
    [
        'name' => 'Cherry',
        'description' => 'Color: Red',
        'facts' => 'Cherries contain antioxidants and are known for their bright flavor.',
        'image' => 'images/cherry.svg',
    ],
    [
        'name' => 'Grapes',
        'description' => 'Color: Purple',
        'facts' => 'Grapes hydrate well and contain natural plant compounds.',
        'image' => 'images/grapes.svg',
    ],
    [
        'name' => 'Mango',
        'description' => 'Color: Orange',
        'facts' => 'Mangoes are rich in vitamins A and C and taste tropical.',
        'image' => 'images/mango.svg',
    ],
    [
        'name' => 'Orange',
        'description' => 'Color: Orange',
        'facts' => 'Oranges are a classic source of vitamin C and citrus fiber.',
        'image' => 'images/orange.svg',
    ],
    [
        'name' => 'Papaya',
        'description' => 'Color: Orange',
        'facts' => 'Papaya contains enzymes that help with digestion.',
        'image' => 'images/papaya.svg',
    ],
    [
        'name' => 'Pineapple',
        'description' => 'Color: Yellow',
        'facts' => 'Pineapple is sweet, juicy, and contains bromelain.',
        'image' => 'images/pineapple.svg',
    ],
    [
        'name' => 'Strawberry',
        'description' => 'Color: Red',
        'facts' => 'Strawberries are fragrant berries with vitamin C and fiber.',
        'image' => 'images/strawberry.svg',
    ],
    [
        'name' => 'Watermelon',
        'description' => 'Color: Green',
        'facts' => 'Watermelon is hydrating and especially refreshing when chilled.',
        'image' => 'images/watermelon.svg',
    ],
];

usort($fruits, function ($a, $b) {
    return strcasecmp($a['name'], $b['name']);
});
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fruits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page">
        <table class="fruit-table">
            <caption>My Fruits</caption>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Facts</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fruits as $fruit): ?>
                    <?php
                    $safeName = htmlspecialchars($fruit['name'], ENT_QUOTES, 'UTF-8');
                    $safeDesc = htmlspecialchars($fruit['description'], ENT_QUOTES, 'UTF-8');
                    $safeFacts = htmlspecialchars($fruit['facts'], ENT_QUOTES, 'UTF-8');
                    $safeImage = htmlspecialchars($fruit['image'], ENT_QUOTES, 'UTF-8');
                    ?>
                    <tr>
                        <td class="image-cell"><img src="<?= $safeImage ?>" alt="<?= $safeName ?>"></td>
                        <td class="name-cell"><?= $safeName ?></td>
                        <td class="desc-cell"><?= $safeDesc ?></td>
                        <td class="facts-cell"><?= $safeFacts ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
