<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package PlanetG
 * @since PlanetG 1.0
 */
?>

	</div> <!-- /#maincontentcontainer -->
	<div id="bannershare" class="section-style-1">
	</div>

	<div id="footercontainer">

		<footer class="site-footer row" role="contentinfo">

			<div class="col grid_10_of_12">
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-footer'. 1 ); ?>
				</div>
			</div>

			<div class="col grid_2_of_12">
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-footer'. 2 ); ?>
				</div>
			</div>

		</footer> <!-- /.site-footer.row -->


		<div class="row smallprint">
			<p>Segala partikel maupun komponen pendukung planet ini dikelola dan dikembangkan sepenuhnya 
			oleh <a title="G" href="http://twitter.com" target="_blank">GIZIPP</a> di kala senggang.</br>
			Copyright © 2006-2014 
			<a title="G" href="http://gizipp.com" target="_blank">GIZIPP's Inspiration Zone of Idea, Passion and Productivy</a>
			All Rights Reserved.</p>
		</div>

	</div> <!-- /.footercontainer -->

</div> <!-- /.#wrapper.hfeed.site -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29500251-3', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>

</html>