<?php
include "inc/head.php";
?>

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="<?php echo ROOT . "views/css/login.css" ?>" rel="stylesheet" type="text/css" />

<div class="create">
    <header class="masthead">
        <div class="container">
            <div class="d-flex justify-content-center h-200">
                <div class="card" style="height: 100%; width: 55%;">
                    <div class="card-header">
                        <h3>Complaint Form</h3>
                    </div>
                    <div class="card-body">
                    <form action="<?= ROOT ?>admin/posts/create" method="post" enctype="multipart/form-data">
                    <div class="form-group" >
                      <label for="ID">User ID</label>
                      <input type="text" name="title" class="form-control" placeholder="ID....">
                    </div>
                    <div class="form-group" >
                    <label for="category ">Complaint Category</label>
                    <select id="cars" name="carlist" form="carform" style="width: 100%;">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="title ">Complaint Title</label>
                      <input type="text" name="title" class="form-control" placeholder="Complaint title....">
                    </div>
                    <div class="form-group">
                      <label for="body">Complaint Body</label>
                      <textarea name="body" rows="4" class="form-control" placeholder="Complaint body...."></textarea>
                    </div>
                    <!-- <div class="form-group">
                      <label for="title">Post Image</label>
                      <input type="file" name="image" class="form-control">
                    </div> -->
                    <button type="submit" class="btn btn-secondary btn-block btn-lg"><i class="fa fa-plus-square" aria-hidden="true"></i> Create New Complaint</button>
                </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            <a href="<?php echo ROOT . "home" ?>">Go back to home</a>
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