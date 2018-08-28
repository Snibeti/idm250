<?php get_header(); ?>

<p class="h1">
    <?php echo  get_the_archive_title()?>
</p>

<h2>Archives By Month:</h2>
<ul>
    <?php

    $arg = [

        'type' => 'monthly'

    ];
    wp_get_archives($arg);

    ?>
</ul>

<h2>Archives By Year:</h2>
<ul>
    <?php

    $arg = [

        'type' => 'yearly'

    ];
    wp_get_archives($arg);

    ?>
</ul>

<?php get_footer(); ?>