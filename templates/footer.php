<footer class="site-footer">
	<nav class="footer-nav">
		<ul class="social-links">
			<?php foreach ($sociallinks as $name => $url) {
				echo '<li class="'.$name.'"><a href="'.$url.'" target="_blank">'.$name.'</a>';
			} ?>
		</ul>
		<ul class="site-links">
			<?php foreach ($navlinks as $name => $url) {
				echo '<li class="'.$name.'"><a href="'.$url.'">'.$name.'</a>';
			} ?>
		</ul>
		<ul class="local-links">
			<?php foreach ($locallinks as $name => $url) {
				echo '<li class="'.$name.'"><a href="'.$url.'">'.$name.', TX</a>';
			} ?>
		</ul>
	</nav>
	<p><small>all rights reserved &copy;<?php echo date('Y'); ?> ampnetmedia - Dallas, Texas web development</small></p>
</footer>