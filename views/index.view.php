<?php require 'partials/header.php'; ?>

<?php foreach ($names as $user ):?>

	<li><?= $user->name ?></li>
	
<?php endforeach; ?>

<h1>Submit Your Files</h1>

<form method="POST" action="/names">

<input type="text" name="name"></input>

<button type="submit">Submit</button>

</form>

<?php require 'partials/footer.php'; ?>
