<!doctype html>
<html>
<?php
	require('configuration.php');
	require_once('classDef.php');
	require_once('classInit.php');
	require_once('functions.php');
	include($includeHelper->includeIncFile('head'));
?>
<body>
	<?php	
		include($includeHelper->includeIncFile('header'));
	?>
	<main>
		<div id="container">
			<?php
				if(empty($_GET['site'])){
					$var_content = 'home';
				} elseif (!empty($_GET['site'])) {
					$var_content = $_GET['site'];
				}
					
				$var_content_file = $includeHelper->includeIncFile($var_content);
					
				if(!file_exists($var_content_file)){
					$var_content = 'home';
				}
				
				include($includeHelper->includeIncFile($var_content));
			?>
		</div>
	</main>
	<?php
		include($includeHelper->includeIncFile('footer'));
	?>
</body>
</html>