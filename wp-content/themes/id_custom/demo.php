<?php
/* Template Name: Demo Template
 * Description: Your template's description goes here.
 */

get_header();

?>


<h1><?php the_title(); ?></h1>

<a href="<?php the_permalink(); ?>">Permalink</a>
<p>Hello, I'm blank.</p>

<?php

get_footer();

?>