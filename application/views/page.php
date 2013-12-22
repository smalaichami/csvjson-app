<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title><?=$title?></title>
		<meta name="description" content="<?=$description?>">
		
		<script type="text/javascript">
			window.CSVJSON = {
				page: '<?=$page?>'
			};
		</script>
		
		<script src="/js/jquery-2.0.3.min.js" type="text/javascript"></script>
		<script src="/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		
		<link href="/js/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<link href="/js/jQuery-File-Upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<link href="/css/csvjson.css" rel="stylesheet" type="text/css" charset="utf-8" />
		
		<?php if (ENVIRONMENT == 'production'): ?>
			<script src="/js/csvjson.min.js" type="text/javascript"></script>
		<?php else: ?>
			<script src="/js/jQuery-File-Upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
			<script src="/js/jQuery-File-Upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
			<script src="/js/jQuery-File-Upload/js/jquery.fileupload.js" type="text/javascript"></script>
			<script src="/js/underscore.js" type="text/javascript"></script>
			<script src="/js/underscore.string.js" type="text/javascript"></script>
			<script src="/js/json/json3.js" type="text/javascript"></script>
			<script src="/js/csv2json.js" type="text/javascript"></script>
			<script src="/js/json_beautifier.js" type="text/javascript"></script>
			<script src="/js/main.js" type="text/javascript"></script>
		<?php endif; ?>
	</head>
	<body>
		<header class="navbar navbar-inverse" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/" title="csvjson.com - Conversion tools"></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="<?=$page == 'csv2json' ? 'active' : ''?>"><a href="/csv2json">CSV to JSON</a></li>
						<li class="<?=$page == 'json_beautifier' ? 'active' : ''?>"><a href="/json_beautifier">JSON Beautifier</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/about">About</a></li>
					</ul>
				</div>
			</div>
		</header>

		<?php $this->load->view($view); ?>
	</body>
</html>