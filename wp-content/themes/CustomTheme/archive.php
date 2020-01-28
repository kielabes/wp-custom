<?php get_header();?>
<div class="container-fluid">
    <div class="theme-banner">
        <h1 class="main-title"><?php single_cat_title();?></h1>
    </div>
</div>

<div class="container pt-5">


    <div class="row">

        <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <div class="card">
            <div class="card-body">

            <?php if (has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
            <?php endif;?>

            <h2><?php the_title();?></h2>
            
            <div class="col-md-12">
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
            </div>
            </div>
        </div>
        <?php endwhile; endif;?>

    </div>

</div>

<?php get_footer();?>