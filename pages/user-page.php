<?php $user = $currentUser(); ?>

<a href="logout.php">Logout</a>

<h1>Hi <?php echo $user->getName() ?></h1>
