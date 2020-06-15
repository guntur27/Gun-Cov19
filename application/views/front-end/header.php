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

    <title>SH-Cov19</title>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
                <div class="navbar-header d-flex col">
                    <a class="navbar-brand mt-0" href="#">SH-Cov19</b></a>
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                        <span class="navbar-toggler-icon"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a href="<?= base_url('home'); ?>" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Artikel</a></li>

                        <li class="nav-item"><a href="" class="nav-link">Protokol Kesehatan</a></>
                        <li class="nav-item"><a href="<?= base_url('about'); ?>" class="nav-link">Tentang Kami</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>

    <main>
        <section class="jumbotron text-center" style="background-image: url(https://assets.kpmg/content/dam/kpmg/xx/images/2020/04/spherical-ball-of-connected-dots-blue-background.jpg/jcr:content/renditions/cq5dam.web.1400.350.jpg)">
            <div class="container mt-5">
                <h1>SH-Cov19</h1>
                <small>SH (Stay at Home) | COVID-19</small>
                <br>
                <br>
                <p>Website SH-Cov19 merupakan sebuah website untuk memberikan informasi mengenai virus Corona (Covid-19) di Negara Indonesia. Informasi yang diberikan meliputi : jumlah pasien positif, jumlah pasien sembuh, dan jumlah pasien meninggal. Data tersebut akan ter-update setiap harinya. Terima kasih.
                </p>
            </div>
        </section>