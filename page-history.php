<?php

/* 
Template Name: Наша история
*/

?>
<?php
get_header();
?>
       
       <div class="aboutus">
            <div class="container">
            
                <h1 class="title"><?php the_field('title_history');?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('title_history2');?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('text_history');?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('img_history');?>" alt="мир детства">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('img_quality');?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('title_quality');?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('text_history_quality');?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('title_technology');?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('text_technology');?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src=" <?php the_field('img_technology');?>" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>
        <?php
get_footer();
?>
