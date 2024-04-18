<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Student Records</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Assets/Css/style.css" />
    <link rel="stylesheet" href="Assets/Css/bootstrap.min.css" />
    <link rel="stylesheet" href="Assets/Css/dataTables.bootstrap5.css" />
    <link rel="stylesheet" href="Assets/Css/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="Assets/Css/buttons.dataTables.css">
    <script src="Assets/JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4b8ecf8af7.js" crossorigin="anonymous"></script>
    <script src="Assets/JS/jquery-3.7.1.js"></script>
    <script src="Assets/JS/bootstrap.min.js"></script>
    <script src="Assets/JS/popper.min.js"></script>
    <script src="Assets/JS/dataTables.js"></script>
    <script src="Assets/JS/dataTables.bootstrap5.js"></script>
    <script src="Assets/JS/dataTables.buttons.js"></script>
    <script src="Assets/JS/bottons.dataTabless.js"></script>
    <script src="Assets/JS/buttons.bootstrap5.js"></script>
    <script src="Assets/JS/pdfmake.min.js"></script>
    <script src="Assets/JS/jszip.min.js"></script>
    <script src="Assets/JS/vfs_fonts.js"></script>
    <script src="Assets/JS/script.js"></script>
    <script src="Assets/JS/dataTables.bootstrap5.js"></script>
    <script src="Assets/JS/dataTables.responsive.js"></script>
    <script src="Assets/JS/responsive.bootstrap5.js"></script>
    <script src="Assets/JS/buttons.html5.min.js"></script>
    <script src="Assets/JS/buttons.print.min.js"></script>
    <script src="Assets/JS/buttons.colVis.min.js"></script>



</head>


<body>
    <nav class="navbar container navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" alt="" height="100" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Database.php">Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Addnew.php">Add New</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>