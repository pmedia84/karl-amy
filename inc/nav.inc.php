<div class="nav-container">
    <nav class="nav-bar">

        <div class="nav-brand">
            <a href="/">Karl<span>&</span>Amy</a>
        </div>
        <button class="nav-btn" aria-controls="nav-links" id="nav-btn" type="button" aria-label="Menu" aria-expanded="false">

            <svg class="hamburger" viewBox="0 0 100 100" width="50">
                <rect class="line top" width="80" height="5" x="10" y="25" rx="2.5"></rect>
                <rect class="line middle" width="80" height="5" x="10" y="45" rx="2.5"></rect>
                <rect class="line bottom" width="80" height="5" x="10" y="65" rx="2.5"></rect>

            </svg>
            <span class="sr-only">Menu</span>
        </button>
        <ul class="nav-links" id="nav-links" data-state="closed" data-nav="">
            <li><a href="/">Home</a></li>
                <?php if ($guest_area_status == "On") : ?>
                <li><a href="guests/rsvp">RSVP <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
                <?php endif; ?>
            <li><a href="our_story">Our Story</a></li>
            <li><a href="theday">The Big Day</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="gift_list">Gift List</a></li>
            <li><a href="contact">Contact Us</a></li>
            <?php if ($guest_area_status == "On") : ?>
                <li><a href="/guests">Guest Area <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
                <?php endif; ?>
            
        </ul>



    </nav>
</div>