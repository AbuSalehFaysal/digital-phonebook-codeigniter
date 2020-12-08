<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Phonebook</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Email</label>
        <input type="text">
        <label for="">Password</label>
        <input type="password">
        <button name="submit" type="submit">Sign In</button>
    </form>
    <h3>Do no have an account, sign up here</h3>
    <a href="<?php echo base_url('sign-up'); ?>">Sign Up</a>
</body>
</html>