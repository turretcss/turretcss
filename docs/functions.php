<?php
	include_once('config.php');

	function code($string) {
		echo '<code>' . htmlentities($string) . '</code>';
	}

	function markup($string) {
		echo '<pre class="language-markup"><code class="language-markup">' . htmlentities($string) . '</code></pre>';
	}

	function less($string) {
		echo '<pre class="language-less"><code class="language-less">' . htmlentities($string) . '</code></pre>';
	}

	function git($string) {
		echo '<pre class="language-git"><code class="language-git">' . htmlentities($string) . '</code></pre>';
	}

	function bash($string) {
		echo '<pre class="language-bash"><code class="language-bash">' . htmlentities($string) . '</code></pre>';
	}

	function sample($path) {
		echo file_get_contents(SAMPLES . $path . '.html');
	}

	function sample_code($path) {
		echo '<pre class="language-markup"><code class="language-markup">' . htmlentities(file_get_contents(SAMPLES . $path . '.html')) . '</code></pre>';
	}

	function definitions($path) {
		echo '<pre class="language-less"><code class="language-less">' . htmlentities(file_get_contents(DEFINITIONS . $path . '.less')) . '</code></pre>';
	}