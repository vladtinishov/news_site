<?php if(!empty($error)) { echo $error; } ?>
<style><?php require_once('assets/css/writer.css') ?></style>
<div class="form_container">
    <h1>Форма регистрации</h1>
    <form action="autorize" method="POST">
        <input type="text" placeholder="login" name="login">
        <input type="password" placeholder="password" name="password">
        <input type="submit">
    </form>
</div>