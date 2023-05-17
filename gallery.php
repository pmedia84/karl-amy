<?php include("inc/header.inc.php"); ?>
<!-- All above this is for each page -->
<?php
//load all images
$images = $db->query('SELECT * FROM images WHERE image_placement="Gallery" AND status ="Approved"');
?>
<title>The Wedding of <?= $wedding_name; ?> | Our Photo Gallery</title>
</head>

<body>

  <div class="hero gallery-hero">
    <?php include("inc/nav.inc.php"); ?>
    <div class="hero-container text-center">
      <h1 class="hero-title">Our Photo Gallery</h1>
      <div class="gallery-card">
        <div class="gallery-card-img">
          <img src="assets/img/hero/gallery-hero-card.webp" height="250px" alt="">
        </div>
        <div class="gallery-card-footer">
          <p>Our First Selfie</p>
        </div>
      </div>

      <p><?php echo $wedding_date = date('l jS F Y', $weddingdate); ?></p>
    </div>
  </div>

  <main>
    <section class="container my-3">
      <h2 class="text-center mt-3">Some of our favorite memories.</h2>
      <p class="text-center section-subtitle mb-3">Click on any image to view a slideshow</p>
      <div class="gallery-grid grid-row-3col">
        <?php $count = 1; ?>
        <?php foreach ($images as $image) : ?>
          <img class="gallery-img" src="../admin/assets/img/gallery/<?= $image['image_filename']; ?>" alt="" onclick="openModal();currentSlide(<?= $count; ?>)" class="hover-shadow">

        <?php $count++;
        endforeach; ?>

      </div>

    </section>
    <div id="myModal" class="modal">
      <button class="btn-close modal-close cursor" type="button" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></button>
      <div class="modal-content">


        <?php $slide_count = 1; ?>
        <?php foreach ($images as $slides) : ?>

          <div class="mySlides">
            <div class="numbertext">
              <?= $slide_count; ?> / <?= $images->num_rows; ?>
            </div>
            <div class="slide-body">

              <div class="slide-body-img">
                <img src="../admin/assets/img/gallery/<?= $slides['image_filename']; ?>">
              </div>
              <!-- Caption text -->
              <p class="slide-body-caption text-center"><?= $slides['image_description']; ?></p>
            </div>

          </div>

        <?php $slide_count++;
        endforeach; ?>




        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>


      </div>
      <?php $thumb_count = 1; ?>
      <div class="thumbnails">


        <?php foreach ($images as $image) :
        ?>
          <!-- Thumbnail image controls -->

          <img class="demo" src="../admin/assets/img/gallery/<?= $image['image_filename']; ?>" onclick="currentSlide(<?= $thumb_count; ?>)">


        <?php $thumb_count++;
        endforeach; ?>

      </div>
    </div>






  </main>
  <script src="assets/js/gallery.js"></script>
  <?php include("inc/footer.inc.php"); ?>

</body>

</html>