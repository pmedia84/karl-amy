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
        <div class="container hero-container">
            <div class="hero-title text-center ">
                <h1>Our Big Day</h1>
                <p><?= $wedding_date; ?></p>

            </div>
            <div class="hero-img-card">
                <img src="assets/img/venue/mercure.jpg" alt="">
            </div>
        </div>
    </div>

    <main>
        <section class="container my-7 ">

            <?php foreach ($events_day as $event) : 
                $time =strtotime($event['event_time']);
                $event_time = date('g:i A',$time);
                ?>
                    
                <div class="my-3 event-card day-card">
                <h2 class="text-center my-3"><?= $event_time.' '. $event['event_name']; ?></h2>
                    <div class="day-card-body">
                        <div class="day-card-col">
                            <h3>Location</h3>
                            <p><?= $event['event_location']; ?></p>
                            <address><?= $event['event_address']; ?></address>
                            <h3>Time</h3>
                            <p><?= $event_time; ?></p>
                            <?php if ($event['event_notes']>""):?>
                                <h3>Notes</h3>
                                <p><?= $event['event_notes']; ?></p>
                            <?php endif;?>    
                            
                            <h3>Let us know if you will be attending:</h3>
                                <a href="/guests/rsvp" class="btn-primary my-3">RSVP </a>
                        </div>
                        <div class="day-card-col">
                        <?php echo '<iframe frameborder="0" width="100%" height="250px" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $event['event_address'])) . '&z=14&output=embed"></iframe>'; ?>
                        </div>
                    </div>

                </div>
                <div class="my-7 section-divider">
                    <img src="assets/img/flowers.svg" alt="">
                </div>
            <?php endforeach; ?>


        </section>






    </main>
    <?php include("inc/footer.inc.php"); ?>

</body>

</html>