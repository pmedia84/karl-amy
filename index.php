<?php include("inc/header.inc.php");
//fetch image gallery
$gallery_query = ('SELECT * FROM images WHERE image_placement LIKE "%Home%" LIMIT  6 ');
$gallery = $db->query($gallery_query);
 ?>
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
        <div class="section-divider my-4">
            <img src="assets/img/section-divider.svg" alt="">
        </div>

        <section class="container my-4">
            <div class="std-card primary-950">
                <div class="grid-row-3col">
                    <div class="profile-card">
                        <div class="profile-card-img">
                            <img src="assets/img/profiles/karl.JPG" height="250px" alt="">
                        </div>
                        <div class="profile-card-body">
                            <h3>Karl</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores itaque sit corrupti molestiae praesentium aliquid porro eius iure ipsa natus?</p>
                        </div>
                    </div>
                    <div class="center-card">
                        <span class="left">Karl</span> <img src="assets/img/icons/rings.svg" alt=""><span class="right">Amy</span>
                    </div>
                    <div class="profile-card">
                        <div class="profile-card-img">
                            <img src="assets/img/profiles/amy.JPG" height="250px" alt="">
                        </div>
                        <div class="profile-card-body">
                            <h3>Amy</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi consectetur repellendus temporibus nulla dolores hic sit provident? Esse, debitis non!</p>
                        </div>
                    </div>
                </div>
                <div class="text-center"><a href="" class="btn-primary my-3 text-center">Read Our Story</a></div>
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
        <section class="primary-900 my-7">
            <div class="container">
                <div class="venue-card">

                    <div class="venue-text">
                        <h2>The Venue</h2>
                        <p class="venue-card-subtitle"><?= $event_location; ?></p>
                        <p class="venue-card-subtitle"><?= $event_address; ?></p>
                        <p>Find out more about our big day <a href="">Here!</a></p>
                    </div>
                    <img src="assets/img/venue/venue.jpg" alt="">

                </div>
            </div>
        </section>
<?php if($gallery->num_rows>0):?>
    <section class="container">
            <h2 class="section-title text-center">Gallery</h2>
            <p class="section-subtitle text-center mb-3">Just a few of our favorite pics!</p>
            <div class="std-card gallery primary-950">
                <div class="gallery-body">
                <?php foreach($gallery as $gallery_item):?>
                    <div class="gallery-card">
                    <div class="peg"></div>
                        <div class="gallery-card-img">
                            <img src="assets/img/gallery/<?=$gallery_item['image_filename'];?>" height="250px" alt="">
                        </div>
                        <div class="gallery-card-footer">
                            <p>What we love</p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    
    
    
    
    <?php endif;?>
        
        <h2 class="text-center my-7 cta-heading">We Can't Wait To See You!</h2>
    </main>
    <?php include("inc/footer.inc.php"); ?>
    <script>
        const deadline = new Date(Date.parse(new Date('<?php echo $cd_date." ".$wedding_time; ?>')));
        initializeClock('clockdiv', deadline);
        
    </script>
</body>

</html>