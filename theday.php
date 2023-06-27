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
                $end_time = strtotime($event['event_end']);
                $event_time = date('g:i A', $time);
                $event_end_time = date('g:i A', $end_time);
                if ($event_end_time == "12:00 AM") {
                    $event_end_time = "Midnight";
                }
            ?>
                <div class="my-3 event-card">
                    <div class="event-card-body">
                        <div class="event-card-col">
                            <h3 class="event-card-title"><?= $event['event_name']; ?></h3>

                            <p class="event-time"><?= $event_time; ?> Till <?= $event_end_time; ?></p>
                            <p class="event-location"><strong><?= $event['event_location']; ?>, <?= $event['event_postcode']; ?></strong></p>

                            <?php if ($event['event_notes'] > "") : ?>

                                <p><?= html_entity_decode($event['event_notes']); ?></p>
                            <?php endif; ?>

                        </div>
                        <img src="assets/img/venue/sessions-house-2.webp" alt="">
                    </div>
                    <h3>Getting There:</h3>
                    <p class="event-address"><?= $event['event_address']; ?></p>
                    <div class="event-card-map">
                        <?php echo '<iframe frameborder="0" width="100%" height="350px" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $event['event_address'])) . '&z=14&output=embed"></iframe>'; ?>
                    </div>
                    <div class="event-card-sub-card">
                        <h3>RSVP</h3>
                        <p>We would love to see you, please let us know if you will be attending</p>
                        <a href="/guests/rsvp" class="btn-primary my-2">RSVP</a>
                    </div>


                </div>
                <div class="my-7 section-divider">
                    <img src="assets/img/section-divider.svg" alt="">
                </div>
            <?php endforeach; ?>

            <div class="event-card my-2">
                <h2 class="event-card-title">Accommodation and Local Taxi Companies</h2>
                <p>Spalding and the surrounding area has a good selection of hotels. Here some that you can choose from.</p>
                <p>We have also listed some local taxi companies that we would recommend using.</p>
                <div class="event-card-body">
                    <div class="event-card-col">
                        <h3>Hotels</h3>
                        <ul role="list">
                            <li class="event-card-sub-card">
                                <h4>Cley Hall Hotel </h4>
                                <h5>Website</h5>
                                <p><a href="https://www.cleyhall.com/" target="_blank">www.cleyhall.com <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
                                <h5>Phone No.</h5>
                                <p><a href="tel:01775 725157">01775 725157</a></p>
                            </li>
                            <li class="event-card-sub-card">
                                <h4>Woodlands Hotel</h4>
                                <h5>Website</h5>
                                <p><a href="http://www.woodlandshotelspalding.com/" target="_blank">www.woodlandshotelspalding.com <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
                                <h5>Phone No.</h5>
                                <p><a href="tel:01775 725157">01775 769933</a></p>
                            </li>
                            </li>
                            <li class="event-card-sub-card">
                                <h4>Red Lion Hotel</h4>
                                <h5>Website</h5>
                                <p><a href="http://www.redlionhotel.co.uk/" target="_blank">www.redlionhotel.co.uk <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
                                <h5>Phone No.</h5>
                                <p><a href="tel:01775 725157">01775 722869</a></p>
                            </li>
                            <li class="event-card-sub-card">
                                <h4>Travelodge Spalding</h4>
                                <h5>Website</h5>
                                <p><a href="https://www.travelodge.co.uk/hotels/370/spalding-hotel?utm_source=google&utm_medium=GHA_Organic&utm_campaign=GHA_Spalding&WT.tsrc=GHA_Organic" target="_blank">www.travelodge.co.uk <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="event-card-col">
                        <h3>Taxi Companies</h3>
                        <ul role="list">
                            <li class="event-card-sub-card">
                                <h4>Spalding Taxis</h4>
                                <h5>Phone No.</h5>
                                <p><a href="tel:01775 722 115">01775 722 115</a></p>
                            </li>
                            <li class="event-card-sub-card">
                                <h4>A1 Taxis Spalding</h4>
                                <h5>Phone No.</h5>
                                <p><a href="tel:01775714545">01775 714545</a></p>
                            </li>
                            <li class="event-card-sub-card">
                                <h4>Royal Taxis</h4>
                                <h5>Phone No.</h5>
                                <p><a href="tel:01775714714">01775 714714</a></p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="event-card">
                <h2 class="event-card-title">Parking</h2>
                <p>The Sessions house has limited parking spaces, therefore, please use the car park below. This is situated within walking distance of our venue and offers long stay parking.</p>

                <ul role="list">
                    <li class="event-card-sub-card">
                        <h3>Victoria Street Car Park </h3>
                        <h4>Address</h4>
                        <p class="mb-2">Victoria Street, Spalding, Lincolnshire, PE11 1EA</p>
                        <?php echo '<iframe frameborder="0" width="100%" height="200px" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", "Visctoria Street Car Park,13 Winsover Rd, Spalding PE11 1EW, United Kingdom")) . '&z=14&output=embed"></iframe>'; ?>

                    </li>

                </ul>

            </div>

        </section>






    </main>
    <?php include("inc/footer.inc.php"); ?>

</body>

</html>