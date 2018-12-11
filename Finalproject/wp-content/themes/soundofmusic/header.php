<html>
    <head>
        <title>
            <?php
                wp_title( '|', true, 'right' );
                bloginfo('name');
             ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container">

            <header>
                <h1>The Sound of Music</h1>
                <a class="hamburger" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png"></a>
            </header>

            <nav class="mainmenu">
                <div class="linklist">
                    <a href="/">HOME</a>
                    <a href="/story">STORY</a>
                    <a href="/cyoa-2">CYOA</a>
                    <a href="/gallery">GALLERY</a>
                </div>
            </nav>