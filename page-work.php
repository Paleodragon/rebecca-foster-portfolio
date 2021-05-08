<?php /* 
This page is used to display the work page. 
*/
 
// Fetch theme header template
get_header(); ?>

<div class="work-page container">
    

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


</div><!--container-->






<?php
get_footer();