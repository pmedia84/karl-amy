<?php include("inc/header.inc.php");
//fetch image gallery
$gallery_query = ('SELECT * FROM images  LIMIT  6 ');
$gallery = $db->query($gallery_query);



?>
<!-- All above this is for each page -->
<title>The Wedding of <?= $wedding_name; ?></title>
</head>

<body>

    <div class="hero index-hero">
        <?php include("inc/nav.inc.php"); ?>
        <div class="hero-container  text-center">
            <h1 class="hero-title">We Are Getting Married!</h1>
            <div class="gallery-card">
                <div class="gallery-card-img">
                    <img src="assets/img/hero/index-hero-card.webp" height="250px" alt="">
                </div>
                <div class="gallery-card-footer">
                    <p>Engagement Day!</p>
                </div>
            </div>
            <p><?= $event_location; ?></p>
            <p><?php echo $wedding_date = date('l jS F Y', $weddingdate); ?></p>
        </div>
    </div>
    <main>
        <div class="section-divider my-4" id="section-one">
            <img src="assets/img/section-divider.svg" alt="">
        </div>
        <section class="container my-4">
            <div class="std-card primary-950">
                <div class="grid-row-3col">
                    <div class="profile-card">
                        <div class="profile-card-img">
                            <img src="assets/img/profiles/karl.webp" height="250px" alt="">
                        </div>
                        <div class="profile-card-body">
                            <h3>Karl</h3>
                            <p>Finally following his career goal of web development with his own business <a href="https://www.parrotmedia.co.uk" target="_blank">(Parrot Media)</a> And an amazing dad to our 11 children.</p>
                        </div>
                    </div>
                    <div class="center-card">
                        <span class="left">Karl</span> <img src="assets/img/icons/rings.png" alt=""><span class="right">Amy</span>
                    </div>
                    <div class="profile-card">
                        <div class="profile-card-img">
                            <img src="assets/img/profiles/amy.webp" height="250px" alt="">
                        </div>
                        <div class="profile-card-body">
                            <h3>Amy</h3>
                            <p>Studying paediatric nursing and will be fully qualified in 2025, she is also an amazing mother to our 11 children.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="countdown-container">
            <div class="countdown-body">
                <div id="clockdiv" class="countdown">
                    <div class="time">
                        <span class="days"></span>
                        <div class="time-footer">
                            <p class="countdown-subtitle">Days</p>
                        </div>
                    </div>
                    <div class="time">
                        <span class="hours"></span>
                        <div class="time-footer">
                            <p class="countdown-subtitle">Hours</p>
                        </div>
                    </div>
                    <div class="time">
                        <span class="minutes"></span>
                        <div class="time-footer">
                            <p class="countdown-subtitle">Minutes</p>
                        </div>
                    </div>
                    <div class="time">
                        <span class="seconds"></span>
                        <div class="time-footer">
                            <p class="countdown-subtitle">Seconds</p>
                        </div>
                    </div>
                </div>

                <div class="countdown-footer text-center">
                    <p><?php echo $wedding_date = date('l jS F Y', $weddingdate); ?></p>
                </div>


            </div>
        </section>

        <div class="my-7 section-divider">
            <img src="assets/img/section-divider.svg" alt="">
        </div>
        <section class="my-7">
            <div class="container">
                <div class="event-card">
                    <div class="event-card-body">
                        <div class="event-card-col">
                            <h3 class="event-card-title">The Venue</h3>
                            <p class="event-location">The Sessions House, Spalding</p>
                            <p>We are saying "I Do" in the amazing Sessions House in Spalding, we fell in love with this venue the moment we set eyes on it and we knew it had to be where we got married.</p>
                            <p>The venue is a court house that has been re developed into an incredible venue for weddings and other functions. It has an incredible character that we love and we are sure you will too.</p>
                            <br>
                            <p>We can't wait to see you there!</p>
                        </div>
                        <img src="assets/img/venue/sessions-house-2.webp" alt="">
                    </div>
                    <div class="event-rsvp">
                        <h3>Find Out More</h3>
                        <p>You can find out more about or big day here.</p>
                        <a href="theday" class="btn-primary my-2">Find Out More</a>
                    </div>
                </div>
            </div>
        </section>
        <?php if ($gallery->num_rows > 0) : ?>
            <section class="container">
                <h2 class="section-title text-center">Gallery</h2>
                <p class="section-subtitle text-center mb-3">Just a few of our favorite pics!</p>
                <div class="std-card gallery primary-950">
                    <div class="gallery-body">
                        <?php foreach ($gallery as $gallery_item) : ?>
                            <div class="gallery-card">
                                <div class="peg"></div>
                                <div class="gallery-card-img">
                                    <img src="../admin/assets/img/gallery/<?= $gallery_item['image_filename']; ?>" height="250px" alt="">
                                </div>
                                <div class="gallery-card-footer">
                                    <p><?= $gallery_item['image_description']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <h2 class="text-center my-7 cta-heading">We Can't Wait To See You!</h2>
    </main>
    <?php include("inc/footer.inc.php"); ?>
    <script>
        let now = "<?= gmdate('d/m/y'); ?>";
        const deadline = new Date(Date.parse(new Date('<?php echo $cd_date . " " . $wedding_time; ?>')));
        initializeClock('clockdiv', deadline);
    </script>
</body>

</html>