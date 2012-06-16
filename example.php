<?php include 'highlight_php.inc.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PHP Source Highlighter</title>
		<link rel="stylesheet" href="css/monokai-soda-dark.css" />
	</head>

	<body>
		<?php PHPLighter::highlight( file_get_contents( 'sample.php' ) ); ?>
	</body>
</html>