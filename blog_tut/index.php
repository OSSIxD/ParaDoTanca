
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
										<a href="https://www.facebook.com/wodzireiDJ" target="_blank" class="author"><span class="name">><?php echo $entry->getAuthor(); ?></span><img src="images/avatar-blog.jpg" alt="" /></a>
									</div>
								</header>
								<div class="excerpt">
								<?php echo $entry->getExcerpt(); ?>
								</div>
								<footer>
									<ul class="actions">
										<li><a href="single.php?entry_id=<?php echo $entry->getId(); ?>" class="button big">Czytaj</a></li>
									</ul>
								</footer>
							</article>
<?php } ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="icon">
            <li>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa fa-facebook" aria-hidden="true"></span>
              </a>
            </li>
            <li>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa fa-twitter" aria-hidden="true"></span>
              </a>
            </li>
            <li>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa fa-google-plus" aria-hidden="true"></span>
              </a>
            </li>
            <li>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa fa-instagram" aria-hidden="true"></span>
              </a>
            </li>
            <li>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa fa-envelope" aria-hidden="true"></span>
              </a>
            </li>
          </ul>
          <p style="text-align: center; margin-top: 15px; color: white;">
            &#9400; Copyright 2020 Website Design by<a href="#"> Adam Podymniak<p>
        </div>
      </div>
    </div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>