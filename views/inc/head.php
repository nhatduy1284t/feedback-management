<?php
$isHomePage = false;
// if($GET[])
// var_dump($_GET=="");
if (empty($_GET) || $_GET['url'] === "home") {
    $isHomePage = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo ROOT . "views/css/style.css" ?>" rel="stylesheet" type="text/css" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?php echo ROOT  ?>">
                <h3 class="mb-0">Itec Coffee</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <?php if ($isHomePage) : ?>
                        <li class="nav-item"><a class="nav-link" href="#services">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">MENU</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <?php endif; ?>
                    <?php if ($_SESSION['logged_in'] == true) : ?>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="btn text-lowercase dropdown-toggle text-light border-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?= $_SESSION['user_name'] ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item text-capitalize" href="<?php echo ROOT . "admin/posts" ?>">Posts</a>
                                    <a class="dropdown-item text-capitalize" href="<?php echo ROOT . "user/logout" ?>">Logout</a>
                                </div>
                            </div>
                        </li>
                    <?php else : ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo ROOT . "user/login" ?>">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>