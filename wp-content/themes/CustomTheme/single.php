<?php get_header();?>
<div class="container-fluid">
    <div class="theme-banner">
        <h1 class="main-title"><?php the_title();?></h1>
    </div>
</div>

<div class="container pt-5">

    <div class="row">

        <?php if (has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
        <?php endif;?>
            
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <div class="col-md-12"><?php the_content();?></div>
        <?php endwhile; endif;?>
        
    </div>

</div>

<?php get_footer();?>