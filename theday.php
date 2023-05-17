<?php include("inc/header.inc.php"); ?>
<!-- All above this is for each page -->
<?php //Load the events
$events_day = $db->query('SELECT * FROM wedding_events ORDER BY event_time ');
$events_day_result = $events->fetch_assoc();

?>
<title>The Wedding of <?= $wedding_name; ?> | Our Story</title>
</head>

<body>

    <div class="hero day-hero">
        <?php include("inc/nav.inc.php"); ?>
        <div class="hero-container text-center">
            <h1 class="hero-title ">Our Big Day!</h1>
            <div class="gallery-card">

                <div class="gallery-card-img">
                    <img src="assets/img/venue/sessions-house-2.webp" height="250px" alt="">
                </div>
                <div class="gallery-card-footer">
                    <p>The Sessions House</p>
                </div>
            </div>

        </div>
    </div>

    <main>
        <section class="container my-3 " id="sectionone">
        <h2 class="text-center">Our Big Day</h2>
        <p class="section-subtitle text-center"><?php echo $wedding_date = date('l jS F Y', $weddingdate); ?></p>
            <?php foreach ($events_day as $event) :
                $time = strtotime($event['event_time']);
                $event_time = date('g:i A', $time);
            ?>
                <div class="my-3 event-card">
                    <div class="event-card-body">
                        <div class="event-card-col">
                            <h3 class="event-card-title"><?=$event['event_name']; ?></h3>
                            
                            <p class="event-time">Begins at <?= $event_time; ?></p>
                            <p class="event-location"><strong><?= $event['event_location']; ?></strong></p>
                            
                            <?php if ($event['event_notes'] > "") : ?>
                                
                                <p><?= html_entity_decode($event['event_notes']); ?></p>
                            <?php endif; ?>

                        </div>
                        <img src="assets/img/venue/sessions-house-2.webp" alt="">
                    </div>
                    <h3>Getting There:</h3>
                    <p class="event-address" ><?= $event['event_address']; ?></p>
                    <div class="event-card-map">
                        <?php echo '<iframe frameborder="0" width="100%" height="350px" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $event['event_address'])) . '&z=14&output=embed"></iframe>'; ?>
                        </div>
                        <div class="event-rsvp">
                            <h3>RSVP</h3>
                            <p>We would love to see you, please let us know if you will be attending</p>
                            <a href="/guests/rsvp" class="btn-primary my-2">RSVP</a>
                        </div>


                </div>
                <div class="my-7 section-divider">
                    <img src="assets/img/section-divider.svg" alt="">
                </div>
            <?php endforeach; ?>


        </section>






    </main>
    <?php include("inc/footer.inc.php"); ?>

</body>

</html>