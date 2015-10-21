<div id="footer" class="navbar-default"> <!-- Made by Jean Calvet (leavetodream.github.io)-->
	<div class="container">
		<p class="text-footer">Crédit</p>
	</div>
</div> <!-- /footer -->
<script language="JavaScript" type="text/javascript" src="assets/js/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script language="JavaScript" type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script language="JavaScript" type="text/javascript" src="assets/js/jqBootstrapValidation.js"></script>
<script language="JavaScript" type="text/javascript" src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script language="JavaScript" type="text/javascript" src="assets/js/jquery.event.move.js"></script>
<script language="JavaScript" type="text/javascript" src="assets/js/jquery.twentytwenty.js"></script>
<script language="JavaScript" type="text/javascript" src="assets/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script language="JavaScript" type="text/javascript" src="assets/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script language="JavaScript" type="text/javascript" src="assets/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script language="JavaScript" type="text/javascript">
	$(document).ready(
		function() {
		$('.fancybox').fancybox({
			helpers : {
				thumbs : {
					width  : 50,
					height : 50
				},
				title : {
					type : 'inside'
				}
			}
		});
	});
	$(document).ready(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); });
	$(window).load(function(){ $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.3}); });
</script>
<script language="JavaScript" type="text/javascript"> <?php echo($script); ?>  </script>
</body>
</html>
