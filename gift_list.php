<?php include("inc/header.inc.php"); ?>
<?php //load gift list
$gift_list = $db->query('SELECT * FROM gift_list');



?>
<!-- All above this is for each page -->
<title>The Wedding of <?= $wedding_name; ?> | Our Gift List</title>
</head>

<body>

    <div class="hero gift-hero">
        <?php include("inc/nav.inc.php"); ?>
        <div class="hero-container text-center">
            <h1 class="hero-title">Our Gift List</h1>
            <div class="gallery-card">
                <div class="gallery-card-img">
                    <img src="assets/img/hero/gift-hero-card.webp" height="250px" alt="">
                </div>
                <div class="gallery-card-footer">
                    <p>Date Night In Norwich</p>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section class="container">
            <h2 class="text-center my-3">Our gift ideas</h2>
            <?php if ($gift_list->num_rows > 0) : ?>
                <?php foreach ($gift_list as $gift_item) :
                    $gift_item_desc = html_entity_decode($gift_item['gift_item_desc']);
                ?>
                    <?php if ($gift_item['gift_item_type'] == "message") : ?>
                        <div class="std-card my-3">
                            <p><?= $gift_item_desc; ?></p>
                        </div>
                    <?php else : ?>
                        <div class="std-card my-3">
                            <h3><?= $gift_item['gift_item_name']; ?></h3>
                            <p><?= $gift_item['gift_item_desc']; ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
        <div class="my-7 section-divider">
            <img src="assets/img/section-divider.svg" alt="">
        </div>

    </main>
    <?php include("inc/footer.inc.php"); ?>

</body>

</html>