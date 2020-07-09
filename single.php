
	<?php require_once 'includes/header.php'; 
	
	if (!isset($_GET['entry_id'])) {
		header('location:blog.php');
	}

	require_once 'classes/entry.php';

	$entry = new Entry();

	$entry->SqlSelectEntryById($_GET['entry_id']);

	//print_r($_GET);
	//print_r($entry);
	
	?>

				<!-- Main -->
					<div id="main">
<?php if ($entry->getId() != -1) { ?>
						<!-- Post -->
							<article class="post" style="background-color: #E8D8D1;">
								<header>
									<div class="title">
										<h2><?php echo $entry->getTitle(); ?></h2>
									</div style="background-color: 170738;">
									<div class="meta">
										<time class="published"><?php echo $entry->getDate(); ?></time>
										<a href="https://www.facebook.com/wodzireiDJ" target="_blank" class="author"><span class="name"><?php echo $entry->getAuthor(); ?></span><img src="images/avatar-blog.jpg" alt="" /></a>
									</div>
								</header>
								<div class="content">
								<?php echo $entry->getContent(); ?>
								</div>
							</article>
<?php } else { ?>
	<!-- Post -->
	<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">404 Entry not found.</a></h2>
									</div>
									<div class="meta">
										<time class="published"></time>
										<a href="#" class="author"><span class="name"></span></a>
									</div>
								</header>
								<div class="content">
									Sorry :( The entry you are looking for has been removed or doesn't exist.
								</div>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart"></a></li>
										<li><a href="#" class="icon fa-comment"></a></li>
									</ul>
								</footer>
							</article>
	<?php } ?>
					</div>
	<?php require_once 'includes/footer.php'; ?>