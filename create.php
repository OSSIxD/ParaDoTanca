<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
	<?php require_once 'includes/header.php'; 
	require_once 'classes/entry.php';

	if (isset($_POST['publishing'])) {

		$entry = new Entry();
		$entry->createNewFromPOST($_POST);

		$entry->SqlInsertEntry();
?>
	<a href="single.php?entry_id=<?php echo $entry->getId(); ?>">View Entry</a>
<?php
	}
	?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<div id="create_form">
									<form action="create.php" method="POST">

									<label for="">Title</label>
									<input type="text" name="entry_title" id="title" />

									<label for="">Author</label>
									<input type="text" name="entry_author" id="author" />

									<label for="">Excerpt</label>
									<textarea name="entry_excerpt" id="title" cols="30" rows="10"></textarea>

									<label for="">Content</label>
									<textarea name="entry_content" id="title" cols="30" rows="10"></textarea>

									<input type="hidden" name="publishing" />

									<input type="submit" name="submit" id="submit" value="Publish" />
									</form>
								</div>
							</article>

					</div>
					<a href="logout1.php" class="btn btn-danger">Sign Out of Your Account</a>
					
	<?php require_once 'includes/footer.php'; ?>