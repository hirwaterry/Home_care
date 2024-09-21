<?php
   include 'include/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./img/logo.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Home Care Services LLC</title>
    <!-- REMIXICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <script src="include/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<style>
    .hover-primary:hover {
        color: #3faec7; /* Bootstrap's text-primary color */
    }
    /* Hover dropdown */
    .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Prevent dropdown from closing when hovering */
        .dropdown-menu {
            margin-top: 0;
            transition: all 0.3s ease;
        }

    
</style>

<body>
    <div class="container sticky-top">
        <nav class="navbar navbar-expand-lg bg-light rounded">
            <div class="container-fluid">
                
                <a href="index.php" class="navbar-brand disabled text-danger text-uppercase ">Sweeet Home Care service LLC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarone"
                    aria-controls="navbarone" aria-expanded="false" aria-label="toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarone">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link hover-primary" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link hover-primary">About us</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle hover-primary" href="#" id="navbarDropdown" role="button">
                                Programs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Independent Living Skills Training</a></li>
                                <li><a class="dropdown-item" href="#">Community Integration Programs</a></li>
                                <li><a class="dropdown-item" href="#">Behavioral and Emotional Support</a></li>
                                <li><a class="dropdown-item" href="#">Day and Residential Habilitation</a></li>
                                <li><a class="dropdown-item" href="#">Recreational and Social Engagement Activities</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a href="donate.php" class="nav-link text-danger">D<i class="ri-heart-add-2-fill"></i>nate Here</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link hover-primary">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link hover-primary">Our story</a>
                        </li>
                    </ul>
                    

                </div>
            </div>
        </nav>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>