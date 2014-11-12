<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<!--it labels the title-->
		<label for="title">Title: </label>	
			<!--creates a text box where you can input text in one line only-->
		<input type="text" name="title" />
	</div>

	<div>
		<!--it labels the post-->
		<label for="post">Post: </label>	
		<!--creates a text box where you can input text in several lines-->
		<textarea name="post"></textarea>
	</div>

	<div>
		<!--creates a button to submit the text -->
		<button type="submit">Submit</button>
	</div>
</form>