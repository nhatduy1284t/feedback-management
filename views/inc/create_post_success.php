<?php
include "head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="<?php echo ROOT . "views/css/login.css" ?>" rel="stylesheet" type="text/css" />

<div class="create create__post__user">
    <header class="masthead ">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card" style="height: 100%; width: 55%;">
                    <div class="card-header">
                        <h3>Feedback</h3>
                    </div>
                    <div class="card-body text-center alert alert-success">
                        Feedback created successfully
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            <a href="<?php echo ROOT . "user/post/create" ?>">Continue to give a feedback</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
</div>


<?php
include "footer.php";
?>