<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Page Not Found</title>

    <!-- Style for this page -->
    <style>
        body {
            background-color: #e9eef8;
        }

        .notfound {
            display: block;
            width: 50%;
            height: 50%;
            margin-top: 6%;
        }

        .button {
            margin-top: 20px;
            display: block;
            width: 200px;
        }
    </style>
</head>

<body>
    <center>
        <img class="notfound" src="<?= asset_url() . 'img/404.png'; ?>" alt="404">
        <a href="<?= base_url() ?>">
            <img class="button" src="<?= asset_url() . 'img/back.png'; ?>" alt="back">
        </a>
    </center>
</body>

</html>