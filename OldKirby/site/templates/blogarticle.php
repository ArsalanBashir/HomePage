<?php snippet('header') ?>

<section class="content blogarticle">
  <article>
    <h3 style=" margin-bottom: 0px; "><?php echo html($page->title()) ?></h3>
    <p style=" font-size: 19px; margin-top: 4px; margin-bottom: 40px; letter-spacing: 2px; text-align: left; color: #eb7966;"><?php echo $page->date('d F y')?></p>
    <p> <?php echo kirbytext($page->text()) ?></p>

    <div class="back"><a href="<?php echo url('blog') ?>">BACK TO BLOG HOME</a></div>

  </article>
</section>

<?php snippet('footer') ?>