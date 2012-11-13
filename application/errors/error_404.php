<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=  $heading; ?> :(</title>
		<meta name="author" content="Javi (@Stolz)" /><!--to-do set your name-->
		<link type="text/plain" rel="author" href="<?= ASSETS ?>humans.txt" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><!--Force latest IE rendering engine (& Chrome Frame if installed)-->

		<!-- Favicon -->
		<!-- For third-generation iPad with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS ?>images/favicons/apple-touch-icon-144x144-precomposed.png"/>
		<!-- For iPhone with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS ?>images/favicons/apple-touch-icon-114x114-precomposed.png"/>
		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS ?>images/favicons/apple-touch-icon-72x72-precomposed.png"/>
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="<?= ASSETS ?>images/favicons/apple-touch-icon-57x57-precomposed.png"/>
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="icon" href="<?= ASSETS ?>images/favicons/favicon.ico" type="image/x-icon" />

		<!-- Mobile -->
		<meta name="HandheldFriendly" content="True" /><!--BlackBerry-->
		<meta name="MobileOptimized" content="960" /><!--Windows Mobile-->
		<meta http-equiv="cleartype" content="on" /><!--Windows Mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><!--Webkit-->

		<style>
			::-moz-selection {
				background: #b3d4fc;
				text-shadow: none;
			}

			::selection {
				background: #b3d4fc;
				text-shadow: none;
			}

			html {
				padding: 30px 10px;
				font-size: 20px;
				line-height: 1.4;
				color: #737373;
				background: #f0f0f0;
				-webkit-text-size-adjust: 100%;
				-ms-text-size-adjust: 100%;
			}

			html,
			input {
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			}

			body {
				max-width: 600px;
				_width: 600px;
				padding: 30px 20px 50px;
				border: 1px solid #b3b3b3;
				border-radius: 4px;
				margin: 0 auto;
				box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
				background: #fcfcfc;
			}

			h1 {
				margin: 0 10px;
				font-size: 50px;
				text-align: center;
			}

			h1 span {
				color: #bbb;
			}

			h3 {
				margin: 1.5em 0 0.5em;
			}

			p {
				margin: 1em 0;
			}

			ul {
				padding: 0 0 0 40px;
				margin: 1em 0;
			}

			.container {
				max-width: 500px;
				_width: 500px;
				margin: 0 auto;
			}

			/* google search */

			#goog-fixurl ul {
				list-style: none;
				padding: 0;
				margin: 0;
			}

			#goog-fixurl form {
				margin: 0;
			}

			#goog-wm-qt,
			#goog-wm-sb {
				border: 1px solid #bbb;
				font-size: 16px;
				line-height: normal;
				vertical-align: top;
				color: #444;
				border-radius: 2px;
			}

			#goog-wm-qt {
				width: 220px;
				height: 20px;
				padding: 5px;
				margin: 5px 10px 0 0;
				box-shadow: inset 0 1px 1px #ccc;
			}

			#goog-wm-sb {
				display: inline-block;
				height: 32px;
				padding: 0 10px;
				margin: 5px 0 0;
				white-space: nowrap;
				cursor: pointer;
				background-color: #f5f5f5;
				background-image: -webkit-linear-gradient(rgba(255,255,255,0), #f1f1f1);
				background-image: -moz-linear-gradient(rgba(255,255,255,0), #f1f1f1);
				background-image: -ms-linear-gradient(rgba(255,255,255,0), #f1f1f1);
				background-image: -o-linear-gradient(rgba(255,255,255,0), #f1f1f1);
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				*overflow: visible;
				*display: inline;
				*zoom: 1;
			}

			#goog-wm-sb:hover,
			#goog-wm-sb:focus {
				border-color: #aaa;
				box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
				background-color: #f8f8f8;
			}

			#goog-wm-qt:hover,
			#goog-wm-qt:focus {
				border-color: #105cb6;
				outline: 0;
				color: #222;
			}

			input::-moz-focus-inner {
				padding: 0;
				border: 0;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1><span>404</span><br/>Page Not Found <span>:(</span></h1>
			<p><?=  $message; ?></p>
			<p>It looks like this was the result of either:</p>
			<ul>
				<li>a mistyped address</li>
				<li>an out-of-date link</li>
			</ul>
			<script>
				var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
			</script>
			<script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
		</div>
	</body>
</html>