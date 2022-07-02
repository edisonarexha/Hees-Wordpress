<article id="post-<?php the_ID(); ?>" 
            <?php post_class('') ?>
            >
            <header class="entry-header">
               <?php the_title( '<h1>', '</h1>' ); ?>
               <div class="bypass">
                <?php esc_html_e( 'Author:', 'heestheme') ?> <?php the_author();?>
               </div>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
</article>