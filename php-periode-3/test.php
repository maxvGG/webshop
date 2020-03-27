<?php 
    get_header()

    if(have_post()){
        while(have_post() && the_post()) { ?> 
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php the_content(); ?>

        <?php }

    } else {
        echo 'No content found';
    }
?>