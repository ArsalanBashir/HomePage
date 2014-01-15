<?php snippet('header') ?>
<section class="content">

  <article>
 	<p>My latest article, titled <a href="<?php echo html($page->urltitle()) ?>">'<?php echo html($page->posttitle()) ?>'</a> is about <?php echo html($page->summary()) ?> You
	can catch up on <a href="#">my blog here.</a>  <br><br>

	I’m <a href="#">working</a>  on <a href="#"><?php echo html($page->project()) ?></a>. <?php echo html($page->projectsummary()) ?> Read more about it <a href="#">here.</a>
	<br><br>

	You can follow my <a href="#">Flickr</a>  and <a
	href="#">Vimeo</a>  to see what I've photographed or filmed on my
	recent trip to <?php echo html($page->location()) ?>. </p>
  </article>

</section>

<?php snippet('footer') ?>

