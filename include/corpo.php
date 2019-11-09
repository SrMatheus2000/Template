<div class="container-fluid corpo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					if (isset($_GET["inicio"]) || !$_GET) {
						includee("inicio");
					} elseif (isset($_GET["pg1"])) {
						includee("pg1");
					} elseif (isset($_GET["pg2"])) {
						includee("pg2");
					} elseif (isset($_GET["pg3"])) {
						includee("pg3");
					} elseif (isset($_GET["pg4"])) {
						includee("pg4");
					}
				?>
			</div>
		</div>
	</div>
</div>
