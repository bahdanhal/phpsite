<?php Theme::header(); ?>
<div class="col-md-10 col-md-offset-1 text-center">
<h2><?php echo Post::title(); ?> </h2>
<?php echo Post::content(); ?> 
<?php echo Post::image(); ?> 
</div>
<?php Theme::footer(); ?> 
