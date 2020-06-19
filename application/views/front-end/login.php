<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">

    <link href="<?= base_url('assets/css/signin.css'); ?>" rel="stylesheet">
</head>

<body class="text-center">

    <form class="form-signin" action="<?= base_url('login'); ?>" method="POST">
        <div class="alert alert-success" role="alert">
            <h6 class="alert-heading">Username dan password untuk login</h6>
            <small>Username : <b>admin</b></small>
            |
            <small>Password : <b>admin</b></small>
        </div>
        <img class="mb-4" src="<?= base_url('assets/img/login-svgrepo-com.svg'); ?>" alt="login responsive" width="100" height="100">
        <?php
        if (validation_errors() || $this->session->flashdata('message')) {
        ?>
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>

                <strong>Warning!</strong>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('message'); ?>
            </div>
        <?php  } ?>

        <h1 class="h3 mb-3 font-weight-normal">Silakan Masuk</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus autocomplete="off">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
        <p class="mt-5 mb-3 text-muted">&copy; Kelompok Santuy - <?= date('Y'); ?></p>
    </form>

</body>

</html>