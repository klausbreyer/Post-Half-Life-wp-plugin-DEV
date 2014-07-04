<?php

		$fp = fopen('phl.txt', 'a');
		fwrite($fp, date('Y-m-d H:i:s') . "\n");
			header("HTTP/1.1 301 Moved Permanently");
			header("Location:http://klaus-breyer.de/projekte/post-half-life.zip");
			exit;
			