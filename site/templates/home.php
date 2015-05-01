<?php snippet('header') ?>

  <video autoplay loop poster="<?php echo url('assets/images/desktop_placeholder.jpg') ?>" id="bgvid">
  <source src="<?php echo url('assets/images/gholtz.webm') ?>" type="video/webm">
  <source src="<?php echo url('assets/images/gholtz.mp4') ?>" type="video/mp4">
  </video>
  <div class="inner-container">

    <main class="main" role="main">

      <div class="text">
        <!-- <h1><?php echo $page->title()->html() ?></h1> -->
        <?php echo $page->text()->kirbytext() ?>
      </div>

      <a href="#">
        <div class="interested">
          <h2>Interested?</h2>
        </div>
      </a>

      <div class="philosophy">

      </div>

    </main>

  </div>

<?php snippet('footer') ?>
