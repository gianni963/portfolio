    <?php // include('../lib/debug.php'); ?>
    <!-- /.container -->

    <div id="footer">
	    <div class="container">
			<div class="row" >
				<div class="col-sm-12 copyright">
					<p>©2016 <font color="#F37736">Gianni3G</font></p>
				</div>
			</div>
		</div>
	</div>

    <script src="<?= WEBROOT; ?>js/jquery.js"></script>

    <!-- fichier banner -->
    <script src="<?= WEBROOT; ?>js/docs.min.js"></script>
    <script src="<?= WEBROOT; ?>js/ie10-viewport-bug-workaround.js"></script>
	<!-- use jssor.slider.debug.js for debug -->
	<script type="text/javascript" src="<?= WEBROOT; ?>/js/jssor.slider.mini.js"></script>
    <?php include('banner2.html'); ?>
    <!-- fin fichier banner -->
    
    <?php if(isset($script)): ?><?= $script; ?><?php endif; ?>

  </body>
</html>

