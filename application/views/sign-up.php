<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success" role="alert">
            <h6><?php echo $this->session->flashdata('success'); ?></h6></div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger" role="alert">
            <h6><?php echo $this->session->flashdata('error'); ?></h6></div>
    <?php } ?>
    <h1>Sign up form</h1>
    <form action="<?php echo base_url('user-registration'); ?>" method="post">
        <label for="">Name</label>
        <input name="name" type="text" name="" id="">
        <label for="">Email</label>
        <input name="email" type="text" name="" id="">
        <label for="">Password</label>
        <input name="pass" type="password" name="" id="">
        <button name="submit" type="submit">Submit</button>
    </form>
</body>
</html>