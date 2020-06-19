<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">

    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
                <div class="navbar-header d-flex col">
                    <h2 class="navbar-brand mt-0">SH-Cov19</h2>
                    <ul class="nav navbar-nav mt-2 ml-auto">
                        <p class="mr-2">Teknik Informatika | Univeritas Pamulang </p>
                        <a href="<?= base_url('login/logout'); ?>">
                            <i class="fa fa-sign-out"> Keluar</i>
                        </a>
                    </ul>
                </div>

            </nav>
        </header>
    </div>