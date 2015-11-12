<?php get_header(); ?>

    <section>

    		<!-- This is the wordpress loop. It grabs all of our "Posts" -->
            <?php if (have_posts()) : while ( have_posts()) : the_post(); ?>
                
                <div class="content-block row">
                
                    <div class="col-md-6 pull-right">

                        <div class="page-header">
                            <h1><?php the_title(); ?></h1>
                        </div>

                        <?php the_content(); ?>

                    </div>

                </div>

            <?php endwhile; else: ?>

                <div class="page-header">
                    <h1><Uh-oh...</h1>
                </div>

                <p>Looks like this page has no content!</p>

            <?php endif; ?>

    </section>

<?php get_footer(); ?>