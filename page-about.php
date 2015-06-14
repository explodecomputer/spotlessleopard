<?php get_header(); ?>

<div class="jumbotron aboutjumbo">
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center bigtitle">
			<h1 class="bigtitle">[about]</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>

</div>
</div>

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
	the_content();
endwhile; endif; ?>


<?php
/*
Template Name: All posts
*/
?>

<?php get_header(); ?>

<?
$myposts = get_posts(array(
	'posts_per_page'=>'100', 
	'post_status'=>'publish', 
	'category_name'=>'Pop-up',
	'meta_key'=>'event_begin',
	'orderby'=>'meta_value',
	'order'=>'ASC'));
?>

<? print_popup_list($myposts, '', -1); ?>

<div id="blog">
<?php if(have_posts()) : ?>
     <?php while(have_posts()) : the_post(); ?>
          <div class="post"> 
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <div class="entry">	
                    <?php the_content(); ?>
                    <?php
                    $current_date ="";
                    $count_posts = wp_count_posts();
                    echo $count_posts->publish;
                    $nextpost = 0;
                    $published_posts = $count_posts->publish;
                    $myposts = get_posts(array('posts_per_page'=>$published_posts)); 
	               foreach($myposts as $post) :
                         $nextpost++;
                         setup_postdata($post);
                         $myvals = get_post_meta(get_the_ID());

foreach($myvals as $key=>$val)
{
    echo $key . ' : ' . $val[0] . '<br/>';
}
echo $myvals['event_begin'];

                         $date = get_the_date("F Y");   
                         if($current_date!=$date): 
                              if($nextpost>1): ?> 
                                   </ol>
                              <?php endif; ?> 
                              <strong><?php echo $date; ?></strong><ol start = "<?php echo $nextpost; ?>">
                              <?php $current_date=$date;
                         endif; ?>
                         <li><?php the_title(); ?> &bull; <a href = "<?php the_permalink(); ?>">link</a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                    </ol>
              </div>
          </div>
     <?php endwhile; ?>
<?php endif; ?>
</div>


<?php get_footer(); ?>
