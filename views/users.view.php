<?php require 'partials/header.php'; ?>
<h1>All Users</h1>
<?php foreach ($users as $user ):?>

	<li><?= $user->name ?></li>
	
<?php endforeach; ?>

<h1>Submit Your Files</h1>

<form method="POST" action="/users">

<input type="text" name="name"></input>

<button type="submit">Submit</button>

</form> 


<?php require 'partials/footer.php'; ?>
