<?php if(!empty($error)) { echo $error; } ?>
<form action="autorize" method="POST">
    <input type="text" name="login">
    <input type="text" name="password">
    <input type="submit">
</form>