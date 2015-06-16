<?php get_header(); ?>

<div class="jumbotron aboutjumbo">
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center">
			<h1>[about]</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>

</div>
</div>

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		the_content();
	endwhile; endif; ?>




<div class="container">
<div class="row buff">

<div class="col-md-2">
</div>

<div class="col-md-5 stagedirections">
<p>In a house in Bristol. Outside - the van. Inside, unseen by the enthusiastic consumers of The Spotless Leopard, the Lowly Web Designer and Louise Abel sit at a table made from locally resalvaged wood. They eat delicious food from <a href="http://themightyfoodfight.com/">someone else's van</a>. Dawn is breaking and they are tired.</p>
</div>
</div>

<div class="row buff">
<div class="col-md-4 text-right popuptitle lwd">
<h2>Lowly Web Designer:</h2>
</div>
<div class="col-md-8 leftborder lwd">
<p>Ok. You have to tell them about yourself. The public wants to know.</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle la">
<h2>Louise Abel:</h2>
</div>
<div class="col-md-8 leftborder la">
<p>I hate this stuff. Why do I have to talk about myself? It's so self involved. Do people really like all that personal rubbish?</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle lwd">
<h2>LWD:</h2>
</div>
<div class="col-md-8 leftborder lwd">
<p>Look Louise. I have a lot of power. It is important that you are nice to me. And part of being nice to me involves cooperating and writing this last bloody page so that we can both go bloody home.</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle la">
<h2>LA:</h2>
</div>
<div class="col-md-8 leftborder la">
<p>Ok fine but why is it about me? It should be about 'we'.</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle lwd">
<h2>LWD:</h2>
</div>
<div class="col-md-8 leftborder lwd">
<p>Us?</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle la">
<h2>LA:</h2>
</div>
<div class="col-md-8 leftborder la">
<p>No, 'we'. Me and the van. Obviously. And my highly esteemed and well renumerated immigrant workers.</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle lwd">
<h2>LWD:</h2>
</div>
<div class="col-md-8 leftborder lwd">
<p>Ok fine. Tell me about 'we'. Excluding me.</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle la">
<h2>LA:</h2>
</div>
<div class="col-md-8 leftborder la">
<p>Well it's all about the food. We want to make beautiful, delicious, healthy, ethical food. We don't want to compromise on anything. We want to be absolutely proud of what we serve - and in order for this to happen the food has to be ethical. We want it to make people feel good - so we put a lot of effort into sourcing local, simple and organic ingredients and making it as healthy as possible. Oh my god these are all such clichés. But this is what we strive for. Fresh. Simple. Pure. Ethical.</p>
</div>
</div>



<div class="row">
<div class="col-md-4 text-right popuptitle lwd">
<h2>LWD:</h2>
</div>
<div class="col-md-8 leftborder lwd">
<p>[Exasperated] Thank you! Was that really so hard?</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle la">
<h2>LA:</h2>
</div>
<div class="col-md-8 leftborder la">
<p>Yes.</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle lwd">
<h2>LWD:</h2>
</div>
<div class="col-md-8 leftborder lwd">
<p>Is there anything else?</p>
</div>
</div>

<div class="row">
<div class="col-md-4 text-right popuptitle la">
<h2>LA:</h2>
</div>
<div class="col-md-8 leftborder la">
<p>Yeah - all our containers are biodegradable. But if you bring your own container we'll knock 5p off the price.</p>
</div>
</div>


<div class="row buff">
<div class="col-md-4 text-right popuptitle">
<h2>The spotless leopard in the press</h2>
</div>
<div class="col-md-8 leftborder">
</div>
</div>
<?php if ( have_posts() ) : while( have_posts() ) : the_post();
	the_content();
endwhile; endif; ?>
</div>
<?php get_footer(); ?>
