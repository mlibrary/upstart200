<!-- Copyright (c) 2016, Regents of the University of Michigan.
All rights reserved. See LICENSE.txt for details.-->
</div><!-- end content -->
<footer>
        <div id="footer-content" class="center-div">
          <div id="custom-footer-text">
          <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                    <p>&copy; <?php echo $copyright; ?></p>
          <?php endif;?>
          </div><!--custom-footer-->
        </div><!-- end footer-content -->
  <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>
</footer>
        </div> <!--wrap-->

<!-- Share Button Javascripts -->
<!-- the following social network scripts only load on the summary and item pages -->

	<?php if($GLOBALS['bodyclass'] == 'summary' || 'show item'){
		//Facebook
		$output = '<div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script>';
		//Twitter
		$output.= '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';

		echo $output;
	}?>
	<script type="text/javascript">
    var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1341620-8']);
        _gaq.push (['_gat._anonymizeIp']);        
        _gaq.push(['_trackPageview']);

    (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
             ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();
  </script>

</body>
</html>
