<?php snippet('header') ?>
<section class="content blog">

  <?php if(param('tag')) {

  $articles = $pages->find('blog')
                    ->children()
                    ->visible()
                    ->filterBy('tags', param('tag'), ',')
                    ->flip()
                    ->paginate(10);

} else {

  $articles = $pages->find('blog')
                    ->children()
                    ->visible()
                    ->flip()
                    ->paginate(10);

}?>

	<?php foreach($articles as $article): ?>

	<article>
    <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
    <p><?php echo excerpt($article->text(), 300) ?><a class ="readmore" href="<?php echo $article->url() ?>">[READ  MORE]</a></p>
    
 	</article>

	<?php endforeach ?>

	<?php if($articles->pagination()->hasPages()): ?>
<nav class="pagination">  

  <?php if($articles->pagination()->hasNextPage()): ?>
  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; Older Posts</a>
  <?php endif ?>

  <?php if($articles->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">Newer Posts &rsaquo;</a>
  <?php endif ?>

</nav>
<?php endif ?>
  
</section>

<?php snippet('footer') ?>