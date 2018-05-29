<footer>
<div class="container text-center">
	<p class="credits">
		Copyright &copy; Tech-Day Cedros<br/>
		
	</p>
</div>
</footer>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#hide").click(function(){
            $("#temas").hide();
        });
        $("#show").click(function(){
            $("#temas").show();
        });
    });
	$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>