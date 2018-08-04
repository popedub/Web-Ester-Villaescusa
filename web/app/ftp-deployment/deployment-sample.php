<?php

return [
	'my site' => [
		'remote' => 'ftp://espejo@ivliss.com:Melodica6_201@ftp.ivliss.com/public_html/espejo/wp-content/themes/espejotheme',
		'local' => '../espejotheme',
		'test' => true,
		'ignore' => '
			/deployment.*
			/log
			temp/*
			!temp/.htaccess
			*/tests
		',

		'include' => '
        	/app
        	/app/*
        	/index.php
        ',

		'allowDelete' => true,
		'before' => [
			function (Deployment\Server $server, Deployment\Logger $logger, Deployment\Deployer $deployer) {
				$logger->log('Hello!');
			},
		],
		'afterUpload' => [
			'http://example.com/deployment.php?afterUpload'
		],
		'after' => [
			'http://example.com/deployment.php?after'
		],
		'purge' => [
			'temp/cache',
		],
		'preprocess' => ['combined.js', 'combined.css'],
	],

	'tempDir' => __DIR__ . '/temp',
	'colors' => true,
];
