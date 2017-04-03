<?php get_header(); ?>  
    <main class="blog">
      <?php if( have_posts() ){
          while( have_posts() ){ 
            the_post(); ?>
      <article>
        <img src="http://placecorgi.com/550/320" />
        <h3><?php the_title(); ?></h3>
        <div><?php the_date(); ?></div>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Continue Reading</a>
      </article>
      <?php } //end while
    } //end if ?>
    </main>
<?php
  get_sidebar();
  get_footer();
?>
