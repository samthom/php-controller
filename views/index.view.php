<!DOCTYPE html>
<html>
<head>
	<title>php | home</title>
</head>
<body>
<ul>
	<li><a href="about.php">About page</a></li>
	<li><a href="contact.php">Contact page</a></li>
</ul>
<h1>Tasks for the day</h1>

<ul>
<?php foreach ($tasks as $task): ?>
	<li>
		<?php if ($task->completed) : ?>
			<strike><?= $task->description; ?></strike>
		<?php else : ?>
			<?= $task->description; ?>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>
</body>
</html>
