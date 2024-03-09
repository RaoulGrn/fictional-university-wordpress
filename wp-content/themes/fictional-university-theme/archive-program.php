<?php
get_header();
while (have_posts()):
    the_post();
endwhile;
rewind_posts();
pageBanner(
    array(
        "title" => "All Programs",
        "subtitle" => "See what we have to offer.",
    )
);
?>

<div class="container container--narrow page-section">
    <ul class="link-list min-list">
        <?php
        while (have_posts()) {
            the_post(); ?>

            <li><a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a></li>

        <?php }
        echo paginate_links();
        ?>
    </ul>
</div>

<?php get_footer();
?>