<?php get_header(); ?>

    <section>

        <div class="headerBlock">

                <?php

            $post_id = 26;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="row">
                    
                    <div class="col-md-4 pull-left expTitle">
                        <h3>Experience</h3>
                        <h1>China</h1>
                    </div>
                    
                    <div class="col-md-7 pull-right rightCenter expDesc">

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>


            <video class="headerVideo" autoplay no-controls muted loop>
                <source src=<?php echo get_template_directory_uri() . '/videos/EmperorQin.mp4' ?> type="video/mp4">
            </video>

        </div>

            <!-- This is the wordpress loop. It grabs all of our "Posts" -->
            <div class = "buddha blocks" id = "buddha">

            <?php

            $post_id = 1;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="content-block row">
                
                    <div class="col-md-6 pull-right rightCenter">

                        <div class>

                            <h1><?php echo $queried_post -> post_title; ?></h1>

                        </div>

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>

             <?php

            $post_id = 19;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="content-block row">
                
                    <div class="col-md-6 pull-left leftCenter">

                        <div>

                            <h1><?php echo $queried_post -> post_title; ?></h1>

                        </div>

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>
            </div>

            <div class = "taoism blocks" id = "taoism">

             <?php

            $post_id = 6;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="content-block row">
                
                    <div class="col-md-6 pull-right rightCenter">

                        <div>

                            <h1><?php echo $queried_post -> post_title; ?></h1>

                        </div>

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>

            
            <?php


            $post_id = 15;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="content-block row">
                
                    <div class="col-md-6 pull-left leftCenter">

                        <div>

                            <h1><?php echo $queried_post -> post_title; ?></h1>

                        </div>

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>

            </div>

            <div class = "confucius blocks" id = "confucius">

            <?php

            $post_id = 8;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="content-block row-md-3 text-center">
                
                    <div class="col-md-6 pull-right rightCenter">

                        <div>

                            <h1><?php echo $queried_post -> post_title; ?></h1>

                        </div>

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>

            <?php

            $post_id = 13;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="content-block row text-center">
                
                    <div class="col-md-6 pull-left leftCenter">

                        <div>

                            <h1><?php echo $queried_post -> post_title; ?></h1>

                        </div>

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>

            </div>

            <div class = "legalism blocks" id = "legalism">

                <?php
            $post_id = 10;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="content-block row">
                
                    <div class="col-md-6 pull-right rightCenter">

                        <div>

                            <h1><?php echo $queried_post -> post_title; ?></h1>

                        </div>

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>

                <?php

            $post_id = 17;
            $queried_post = get_post($post_id);
            ?>
                
                <div class="content-block row">
                
                    <div class="col-md-6 pull-left leftCenter">

                        <div>

                            <h1><?php echo $queried_post -> post_title; ?></h1>

                        </div>

                        <p><?php echo $queried_post -> post_content; ?></p>

                    </div>

                </div>

            </div>

    </section>

<?php get_footer(); ?>