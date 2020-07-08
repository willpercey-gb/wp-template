<?php get_header(); ?>

<?php $page_for_posts = get_option( 'page_for_posts' ); ?>

<section class="commonIntro"> 
 
   <img class="crossDec" src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.svg" />
     
   <?php if(get_field('journal_title', $page_for_posts)): ?>
        <h1><?php the_field('journal_title', $page_for_posts); ?></h1>
   <?php endif; ?>
   
   <?php if(get_field('journal_intro', $page_for_posts)): ?>
        <p><?php the_field('journal_intro', $page_for_posts); ?></p>
   <?php endif; ?>
   
   
</section>

<section class="journalList">
<div class="container">
    <div class="row grid journalListInner">
            <?php if ( have_posts() ) {
                while ( have_posts() ) : the_post(); ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail' ); ?>
                    <div class="col-md-4 journalDividers">
                        <article id="post-<?php the_ID(); ?>" class="grid-item post" role="article">
                            <img src="<?php echo $image[0];?>" />
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a class="btn" href="<?php the_permalink(); ?>">Read more</a>
                        </article>
                    </div>
                <?php endwhile; ?>
            <?php } ?>
        </div>
    </div>
</section>

<section>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="btn load-posts">Load more</div>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>
    
    
    