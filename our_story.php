<?php include("inc/header.inc.php");
$story_query = ('SELECT * FROM wedding_story LIMIT  1');
$story = $db->query($story_query);
$story_result = $story->fetch_assoc();
?>
<!-- All above this is for each page -->
<title>The Wedding of <?= $wedding_name; ?> | Our Story</title>
</head>

<body>
    
    <div class="hero story-hero">
    <?php include("inc/nav.inc.php"); ?>
        <div class="hero-container">
            <div class="hero-title text-center ">
                <h1>Our Story</h1>

            </div>
            <div class="hero-img-card">
                <img src="assets/img/hero/index-hero-card.jpg" alt="">
            </div>
        </div>
    </div>
    <main>
        <section class="container my-7 ">
            <div class="std-card story">
                <?php if ($story->num_rows > 0 && $story_result['story_status'] == "Published") :
                    $story_body = html_entity_decode($story_result['story_body']); ?>
                    <?= $story_body; ?>
                <?php endif; ?>
            </div>
        </section>
        <div class="my-7 section-divider">
            <img src="assets/img/flowers.svg" alt="">
        </div>



    </main>
    <?php include("inc/footer.inc.php"); ?>

</body>

</html>