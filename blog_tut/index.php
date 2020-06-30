
<?php
require_once 'includes/header.php'; 

require_once 'classes/entry.php';

?>

				<!-- Main -->
					<div id="main">
<?php 

$query = 'SELECT * FROM entries ORDER BY entry_id DESC LIMIT 7;';

require_once('classes/dbh.php');

$dbh = new Dbh();

$rows = $dbh->executeSelect($query);

//print_r($rows);

foreach ($rows as $row) {
	$entry = new Entry();

	$entry->setByRow($row);

?>
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="single.php?entry_id=<?php echo $entry->getId(); ?>"><?php echo $entry->getTitle(); ?></a></h2>
									</div>
									<div class="meta">
										<time class="published"><?php echo $entry->getDate(); ?></time>
										<a href="#" class="author"><span class="name">><?php echo $entry->getAuthor(); ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<div class="excerpt">
								<?php echo $entry->getExcerpt(); ?>
								</div>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
<?php } ?>
				
						
						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>