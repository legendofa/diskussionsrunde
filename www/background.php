<head>
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<script src="../js/jquery.min.js"></script>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
if(isset($_SESSION['user_id'])){
	if($_SESSION['logo']=='0'){
		?>
		<script>
			$(document).ready(function(){
				$('#homepage').css('filter', 'invert(100%)');
			});
		</script>
		<?php
	}
	switch($_SESSION['zoom']){
		case 70:
		?>
		<script>
			$(document).ready(function(){
				$('html').css('zoom', '0.7');
				$('html').css('-moz-transform', 'scale(0.7)');
				$('html').css('-webkit-transform', 'scale(0.7)');
				$('html').css('transform', 'scale(0.7)');
			});
		</script>
		<?php
		break;
		case 80:
		?>
		<script>
			$(document).ready(function(){
				$('html').css('zoom', '0.8');
				$('html').css('-moz-transform', 'scale(0.8)');
				$('html').css('-webkit-transform', 'scale(0.8)');
				$('html').css('transform', 'scale(0.8)');
			});
		</script>
		<?php
		break;
		case 90:
		?>
		<script>
			$(document).ready(function(){
				$('html').css('zoom', '0.9');
				$('html').css('-moz-transform', 'scale(0.9)');
				$('html').css('-webkit-transform', 'scale(0.9)');
				$('html').css('transform', 'scale(0.9)');
			});
		</script>
		<?php
		break;
		case 95:
		?>
		<script>
			$(document).ready(function(){
				$('html').css('zoom', '0.95');
				$('html').css('-moz-transform', 'scale(0.95)');
				$('html').css('-webkit-transform', 'scale(0.95)');
				$('html').css('transform', 'scale(0.95)');
			});
		</script>
		<?php
		break;
		case 98:
		?>
		<script>
			$(document).ready(function(){
				$('html').css('zoom', '0.98');
				$('html').css('-moz-transform', 'scale(0.98)');
				$('html').css('-webkit-transform', 'scale(0.98)');
				$('html').css('transform', 'scale(0.98)');
			});
		</script>
		<?php
		break;
		case 100:
		?>
		<script>
			$(document).ready(function(){
				$('html').css('zoom', '1');
				$('html').css('-moz-transform', 'scale(1)');
				$('html').css('-webkit-transform', 'scale(1)');
				$('html').css('transform', 'scale(1)');
			});
		</script>
		<?php
		break;
		case 110:
		?>
		<script>
			$(document).ready(function(){
				$('html').css('zoom', '1.1');
				$('html').css('-moz-transform', 'scale(1.1)');
				$('html').css('-webkit-transform', 'scale(1.1)');
				$('html').css('transform', 'scale(1.1)');
			});
		</script>
		<?php
		break;
	}
	if($_SESSION['background_url']==''){
		?>
		<script>
			$(document).ready(function(){
				$('body').css('background-image', 'url(../img/bundestag.jpg)');
			});
		</script>
		<?php
	}
	else{
		?>
		<script>
			$(document).ready(function(){
				$('body').css('background-image', 'url(<?php echo $_SESSION['background_url']?>)');
			});
		</script>
		<?php
	}
}
else{
	?>
	<script>
		$(document).ready(function(){
			$('body').css('background-image', 'url(../img/bundestag.jpg)');
		});
	</script>
	<?php
}