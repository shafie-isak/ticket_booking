<?php

?>

<h2>Register Now</h2>
<form action="index.php?action=register_user" method="POST">
<label for="name">Name:</label> <br>
<input type="text" name="name" required>
<br>
<label for="">Email:</label><br>
<input type="email" name="email" required>
<br>
<label for="">Phone</label><br>
<input type="number" name="number" required>
<br>
<label for="">Password</label><br>
<input type="password" name="password" required>
<br>

<button type="submit">Register</button>

</form>