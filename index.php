<html>
	<head>
		<?php
			include("include/styles.php");
			include("include/libsql.php");
		?>
		<title>Template</title>
	</head>
	<body>
		<center>
			<div>
				<?php
					includee("cabecalho");
				?>
			</div>
			<div>
				<?php
					includee("menu");
				?>
			</div>
			<div>
				<?php
					includee("corpo");
				?>
			</div>
			<div>
				<?php
					includee("rodape");
				?>
			</div>
		<center>
	</body>
	<?php
		include("include/scripts.php");
	?>
</html>
