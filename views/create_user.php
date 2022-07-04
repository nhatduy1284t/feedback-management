<?php
include "inc/head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="<?php echo ROOT . "views/css/login.css" ?>" rel="stylesheet" type="text/css" />

<div class="create">
    <header class="masthead vh-110">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign Up</h3>

                    </div>
                    <div class="card-body">
                        <form action="<?php echo ROOT . "user/create" ?>" method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text justify-content-center"><i class="fas fa-user"></i></span>
                                </div>
                                <input name="username" type="text" class="form-control" placeholder="username">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text justify-content-center"><i class="fas fa-user"></i></span>
                                </div>
                                <input name="email" type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text justify-content-center"><i class="fas fa-key"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text justify-content-center"><i class="fas fa-key"></i></span>
                                </div>
                                <input name="password_confirm" type="password" class="form-control" placeholder="Password confirm">
                            </div>
                            <div class="form-group">
                                <?php CSRF::outputToken(); ?>
                                <input type="submit" value="Create" class="btn float-right login_btn">
                            </div>
                            <?php if (!empty($errors)) : ?>
                                <div class="alert alert-danger form-group signup-err">
                                    <ul class="signup-err">
                                        <?php foreach ($errors as $error) : ?>
                                            <li><?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif ?>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            <a href="<?php echo ROOT . "user/login" ?>">Go back to login</a>
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