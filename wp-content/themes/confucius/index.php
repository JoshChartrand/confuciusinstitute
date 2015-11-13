<?php get_header(); ?>

    <section>

    		<!-- This is the wordpress loop. It grabs all of our "Posts" -->
            <div class = "buddha blocks">

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

            <div class = "taoism blocks">

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

            <div class = "confucius blocks">

            <?php

            $post_id = 8;
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

            $post_id = 13;
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

            <div class = "legalism blocks">

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