<?php get_header(); ?>

<?php 

function menu_gallery($tag)
{
	$args = array(
		'post_type' => 'attachment',
		'post_mime_type' => 'image',
		'posts_per_page' => -1,
		'numberposts' => -1,
		'post_status' => null,
	);

	$attachments = get_posts( $args );
	if ( $attachments ) {
		foreach ( $attachments as $attachment ) {
			if(get_field('imagetag', $attachment->ID) == $tag)
			{
				echo '<div class="row"><div class="col-md-5">';
				echo '<a href="' . $attachment->guid . '" data-lightbox="food" data-title="';
				echo apply_filters( 'the_title', $attachment->post_title ) . ': ';
				echo $attachment->post_content;
				echo '">';
				echo wp_get_attachment_image( $attachment->ID, 'medium' );
				echo '</a></div><div class="col-md-7">';
				echo '<h2>';
				echo apply_filters( 'the_title', $attachment->post_title );
				echo '</h2>';
				echo '<p>';
				echo $attachment->post_content;
				echo '</p></div></div><hr class="fuzzy">';
			}
		}
	}
}


?>

<div class="jumbotron menujumbo">
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center">
			<h1>[menu]</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>

</div>
</div>


<div class="container">
<div class="row buff">
<div class="col-md-4 text-right menublurb rightborder">

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		the_content();
	endwhile; endif; ?>

</div>
<div class="col-md-8 popuptitle">
<h1>Mains</h1>
<? menu_gallery("main"); ?>

<h1>Sweet stuff</h1>
<? menu_gallery("dessert"); ?>

</div>
</div>
</div>




<?php get_footer(); ?>
