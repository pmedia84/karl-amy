<?php include("inc/header.inc.php");

$story_query = ('SELECT * FROM wedding_story LIMIT  1');
$story = $db->query($story_query);
$story_result = $story->fetch_assoc();?>
<!-- All above this is for each page -->
<title>The Wedding of <?= $wedding_name; ?></title>
</head>
<body>

    <div class="hero index-hero">
    <?php include("inc/nav.inc.php"); ?>

        <div class="container hero-container">
        
            <div class="hero-title text-center ">
                <h1>We Are Getting Married!</h1>
            </div>
            <div class="hero-img-card">
                <img src="assets/img/hero/index-hero-card.jpg" alt="" height="">
            </div>
            <div class="hero-footer">
                <span><?= $event_location; ?></span>
                <span><?php echo $wedding_date = date('l jS F Y', $weddingdate); ?></span>
            </div>
        </div>
    </div>

    <main>
        <section class="container my-7 text-center">
            <div class="std-card">
                <div class="story-intro">
                    <?php if ($story->num_rows > 0 && $story_result['story_status'] == "Published") :
                        $story_body = html_entity_decode($story_result['story_body']); ?>
                        <?= $story_body; ?>
                    <?php endif; ?>
                </div>
                <a href="our_story" class="btn-primary my-3">Read More</a>
            </div>
        </section>

        <section class="event-card-section">
            <div class="container">
                <div class="event-card-images">
                    <div class="img-card">
                        <img src="assets/img/event-card/event-card-img1.jpg" alt="">
                    </div>
                    <div class="img-card">
                        <img src="assets/img/event-card/event-card-img2.jpg" alt="">
                    </div>
                </div>
                <div class="event-card">

                    <div id="clockdiv" class="countdown">
                        <div class="time">
                            <span class="days"></span>
                            <p class="countdown-subtitle">Days</p>
                        </div>
                        <div class="time">
                            <span class="hours"></span>
                            <p class="countdown-subtitle">Hours</p>
                        </div>
                        <div class="time">
                            <span class="minutes"></span>
                            <p class="countdown-subtitle">Minutes</p>
                        </div>
                        <div class="time">
                            <span class="seconds"></span>
                            <p class="countdown-subtitle">Seconds</p>
                        </div>
                    </div>
                    <h2>We Can't Wait To Celebrate With You!</h2>
                    <p>We are saying "I Do" on <?php echo $wedding_date = date('l jS F Y', $weddingdate); ?></p>
                    <a href="/guests/rsvp" class="btn-primary my-4 btn-cta">RSVP</a>
                </div>
            </div>
        </section>
<div class="my-7 section-divider">
    <img src="assets/img/flowers.svg" alt="">
</div>
        <section class="primary-900 my-7">
            <div class="container">
                <div class="venue-card">

                    <div class="venue-text">
                        <h2>The Venue</h2>
                        <p class="venue-card-subtitle"><?= $event_location; ?></p>
                        <p class="venue-card-subtitle"><?= $event_address; ?></p>
                        <p>Find out more about our big day <a href="">Here!</a></p>
                        <p>You can also check out the venue here: <a href="https://www.mercurebristol.co.uk/">www.mercurebristol.co.uk</a></p>
                    </div>
                    <img src="assets/img/venue/mercure.jpg" alt="">

                </div>
            </div>
        </section>
        <h2 class="text-center my-7 cta-heading">See You At The Wedding!</h2>


        <img src="assets/img/footer-img.jpg" alt="" class="footer-img-card">


    </main>
    <?php include("inc/footer.inc.php"); ?>
    <script>
        const deadline = new Date(Date.parse(new Date('<?php echo $cd_date; ?>')));
        initializeClock('clockdiv', deadline);
    </script>
</body>

</html>