<?php
    $published_date = get_the_date( 'F j, Y', $post->ID );
?>
<article>
    <h1 class="page-title">
        <?php the_title(); ?>
    </h1>
    <div class="date">
        <?php echo $published_date; ?>
    </div>
    <?php the_content(); ?>
</article>