<?php
include "inc/head.php";
?>

<?php if (!empty($errors)) : ?>
    <!-- <div class="alert alert-danger">
    <?php //var_dump($errors); 
    ?>
</div> -->
<?php endif;
$err_msg = ""; ?>

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="<?php echo ROOT . "views/css/login.css" ?>" rel="stylesheet" type="text/css" />

<div class="login">
    <header class="masthead">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= ROOT ?>user/login" method="post">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text justify-content-center"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control" placeholder="username">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text justify-content-center"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <!-- <div class="row align-items-center remember">
                                <input type="checkbox">Remember Me
                            </div> -->
                            <div class="form-group">
                                <?php CSRF::outputToken(); ?>
                                <input type="submit" value="Login" class="btn float-right login_btn">
                            </div>
                            <?php
                            if (isset($errors['username_err'])) {
                                $err_msg = $errors['username_err'];;
                                //$_SESSION['err_msg'] = $errors['username_err'];
                                //echo $error['username_err'];
                            } else if (isset($error['password_err'])) {
                                $err_msg = $errors['password_err'];
                                //$_SESSION['err_msg'] = $errors['password_err'];
                                //echo $error['password_err'];
                            }
                            ?>
                            <?php if (!empty($errors)) : ?>
                                <div class="alert alert-danger form-group login-err">
                                    <p><?php //var_dump($errors); 
                                        echo array_values($errors)[0];
                                        //echo $err_msg;
                                        //var_dump($_SESSION); 
                                        //echo $errors['username_err']; 
                                        ?></p>
                                </div>
                            <?php endif ?>

                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="<?php echo ROOT . "user/create" ?>">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<?php
include "inc/footer.php";
?>